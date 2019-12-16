<?php
//update php.ini to allow uplaod size and post_max size.
//upload_max_filesize = 32M
//post_max_size = 10M

//plus
// "max_allowed_packet" = 1000M for sql
if (isset($_REQUEST['submit'])) {
$conn = new mysqli("localhost", "root", "", "testdb");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    $fileName = $_FILES["fileToUpload"]["tmp_name"];
    $finfo = new finfo();
    $data = file_get_contents($fileName);
    $data = $conn->real_escape_string($data);
    //purging out (backslashes) to save database
    $mime = $finfo->file($fileName, FILEINFO_MIME_TYPE); 
    $fileName = $conn->real_escape_string($_FILES["fileToUpload"]["name"]);
    $sql = "insert into blobs (data, mime, filename) values ('$data' , '$mime', '$fileName')";	
    
    if ($conn->query($sql) == true) {
        echo "File was uploaded!<br />\n";
    } else {
        die("<h1> did not upload file - $conn->error</h1>\n");
    }
}

echo "
<!DOCTYPE html>
<html>
    <body>
        <form method='post' enctype='multipart/form-data'>
            Select image to upload:
            <input type='file' name='fileToUpload' id='fileToUpload'><br><br><br>
            <input type='submit' value='Upload the file' name='submit'>
        </form>
        <br><br><br>
        <hr>
    <div>
        <form method='get' enctype='multipart/form-data'>
            Please provide ID_number of Record to display:
            <input type=input name='input' id='input'>
            <input type='submit' value='Display Record' name='submit2'>
        </form>
    </div>
    </body>
</html>";
?>
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
    echo"<br>";
    echo"<hr>";
    echo "<li><a target='_blank' href='display.php?id=".$row['id']."'>". $row["filename"]."</a></li>"."<br>";   
}
?>
