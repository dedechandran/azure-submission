<?php
require_once './conn.php';
require_once './random_string.php';
$url = $_POST['imgUrl'];
try{
    $fileToUpload=$url;
    $myFile = fopen($fileToUpload,"r") or die("Unable to open file!");
    fclose($myFile);
    $content= fopen($fileToUpload,"r");
    $blobName= $containerName.generateRandomString();
    $blobClient->createBlockBlob($containerName,$blobName,$content);
    echo "Blob Uploaded !";
}catch(Exception $e){
    echo "Cannot Upload Blob";
}

?>