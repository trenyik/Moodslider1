<?php
 //Backend for file upload

const InputKey = "fileToUpload";
const AllowedTypes = ["text/xml"];
$dstFolder = "Uploads/";

//Error handling for file upload
if (empty($_FILES[InputKey])) {
    die("File missing!");   
}

//Error handling for error message 
if ($_FILES[InputKey]["error"] > 0) {
    die("Handle the error!");
}

//Error handling for file extention(only Xml allowed) 
if (!in_array($_FILES[InputKey]["type"], AllowedTypes)) {
    die("File Type Not Allowed");
}

//Defining variables for moving the file to Uploads folder
$tmpFile = $_FILES[InputKey]["tmp_name"];
$dstFile = $dstFolder . $_FILES[InputKey]["name"];

//Error handling for unsuccessful upload
if (!move_uploaded_file($tmpFile, $dstFile)) {
    die("Coludn't move file, Handle Error");
}

//Deleting the temp file, if file exists in Uploads
if (file_exists($tmpFile)) {
    unlink($tmpFile);
}

//Navigate to index.php
header('Location: index.php');

return $dstFile;
?>