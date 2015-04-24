<?php

ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '50M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);

$target_path = "tutorialupload/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	include 'include.php';
	echoStart();
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). " has been uploaded.";
	echoEnd();
} else{
	include 'include.php';
	echoStart();
    echo "There was an error uploading the file, please try again!>";
	echoEnd();
}

?>