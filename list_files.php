<?php
$dir = $_GET['dir'] ?? '';
$path = realpath(__DIR__ . '/' . $dir);

if ($dir && is_dir($path) && strpos($path, realpath(__DIR__)) === 0) {
    $files = array_diff(scandir($path), ['.', '..']);
    echo json_encode(array_values($files));
} else {
    echo json_encode([]);
}
?>
