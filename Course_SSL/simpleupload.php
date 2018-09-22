<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

 if (file_exists($target_file)) {
    include 'final_upload1.php';
    $uploadOk = 0;
 }
 else if ($_FILES["fileToUpload"]["size"] > 500000) {
    include 'final_upload1.php';
    $uploadOk = 0;
 }
 else if ($uploadOk == 0) {
    include 'final_upload1.php';
 } 
 else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        include 'final_upload.php';
	} 
	else {
        include 'final_upload1.php';
   }
 }
?> 
