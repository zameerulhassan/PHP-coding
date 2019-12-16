<?php

if (isset($_REQUEST['submit'])) {
		// user submitted form  better process it!
		
		
		$fileName = explode(".",$_FILES["fileToUpload"]["name"]);
        //$target_file = "c:\\www\\uploads\\" . $_FILES["fileToUpload"]["name"];
        $target_file = "C:\\xampp\\htdocs\\phpTutorial\\uploadedImages" . $_FILES["fileToUpload"]["name"];
		if ($fileName[count($fileName)-1] == "jpg") {	
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "upload was successful!";
				die("<a href='barrysupload.php'>Upload another</a>");
				
			} else {
				echo "upload failed!";
			}
		} else {
			echo "Wrong - file extension!";
		}
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