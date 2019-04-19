<?php
require_once 'vendor/autoload.php';
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=skuyblob;AccountKey=rv1XIjNp0wfIZHfwP53aiCJXWOmisv9l8WaD6VVuXM6R5eKgMrpSCPQjumt/v409YFALojccRDV87K0MYjBBGg==";
$containerName = "images";
$blobClient = BlobRestProxy::createBlobService($connectionString);

$createContainerOptions = new CreateContainerOptions();
$createContainerOptions->setPublicAccess(PublicAccessType::CONTAINER_AND_BLOBS);
$createContainerOptions->addMetaData("key1", "value1");
$createContainerOptions->addMetaData("key2", "value2");

$blobContainers = $blobClient->listContainers();
$blobContainersArray = $blobContainers->getContainers();

if(count($blobContainersArray)==0){
    try{
        $blobClient->createContainer($containerName,$createContainerOptions);
    }catch(Exception $e){
        echo "Cannot Create Container";
    }
}

?>