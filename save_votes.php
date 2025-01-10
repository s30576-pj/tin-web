<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jsonData = file_get_contents('php://input');
    $filePath = 'photos.json';

    if ($jsonData) {
        file_put_contents($filePath, $jsonData);
        echo 'Votes recorded.';
    } else {
        echo 'The votes could not be registered.';
    }
} else {
    echo 'Incorrect request method.';
}
?>
