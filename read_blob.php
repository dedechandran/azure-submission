<?php
require_once './conn.php';

do{
    $result = $blobClient->listBlobs($containerName);
    foreach ($result->getBlobs() as $blob)
    {
        echo $blob->getUrl()."\n";
    }
} while($result->getContinuationToken());

?>