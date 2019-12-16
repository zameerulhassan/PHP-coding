<?php

if (isset($_REQUEST['submit'])) {
		// user submitted form  better process it!
		
       // $conn = new mysqli("localhost", "root", "Password1", "webapp1");
        $conn = new mysqli("localhost", "root", "", "testdb");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$fileName = $_FILES["fileToUpload"]["tmp_name"];
		
		$finfo = new finfo();
		
		$data = file_get_contents($fileName);
		$data = $conn->real_escape_string($data);
		$mime = $finfo->file($fileName, FILEINFO_MIME_TYPE); 
		$fileName = $conn->real_escape_string($_FILES["fileToUpload"]["name"]);
		
		$sql = "insert into blobs (data, mime, filename) values ('$data' , '$mime', '$fileName')";	
		
		if ($conn->query($sql) == true) {
			echo "File was uploaded!<br />\n";
		} else {
			die("<h1> did not upload file - $conn->error</h1>\n");
		}
		
		/* $fileName = explode(".",$_FILES["fileToUpload"]["name"]);
		$target_file = "c:\\www\\uploads\\" . $_FILES["fileToUpload"]["name"];
		
		if ($fileName[count($fileName)-1] == "php") {	
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "upload was successful!";
				die("<a href='upload.php'>Upload another</a>");
				
			} else {
				echo "upload failed!";
			}
		} else {
			echo "Wrong - file extension!";
		} */
		
		
}

echo "
<!DOCTYPE html>
<html>
<body>

<form action='barrysupload.php' method='post' enctype='multipart/form-data'>
    Select image to upload:
    <input type='file' name='fileToUpload' id='fileToUpload'>
    <input type='submit' value='Upload Image' name='submit'>
</form>

</body>
</html>";


?>