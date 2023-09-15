<?php
$coreDirectory = __DIR__ . '/System/Core/';
$databaseDirectory = __DIR__ . '/System/Database/';

$databaseFiles = scandir($databaseDirectory);
foreach ($databaseFiles as $file) {
    $filePath = $databaseDirectory . $file;
    if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
        require_once $filePath;
    }
}

$coreFiles = scandir($coreDirectory);
foreach ($coreFiles as $file) {
    $filePath = $coreDirectory . $file;
    if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
        require_once $filePath;
    }
}
