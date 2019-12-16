<?php
$conn = new mysqli("localhost", "root", "", "testdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $table= "blobs";
    $query = "SELECT * FROM $table WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if($result===FALSE) { 
        die('mysqli_error()'); 
    }
    $row = mysqli_fetch_assoc($result);
    header('Content-Type:'.$row['mime']);//informing browser about content type.
    echo $row['data'];
}