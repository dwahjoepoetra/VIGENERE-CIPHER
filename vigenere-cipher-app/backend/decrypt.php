<?php
include 'utils/vigenere.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file']) && isset($_POST['key']) && isset($_POST['format'])) {
    $file = $_FILES['file'];
    $key = $_POST['key'];
    $format = $_POST['format'];

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        die("Upload failed with error code " . $file['error']);
    }

    // Read file content
    $fileContent = file_get_contents($file['tmp_name']);
    if ($fileContent === false) {
        die("Failed to read file content");
    }

    // Decrypt file content
    $decryptedContent = vigenereDecrypt($fileContent, $key);

    // Create decrypted file
    $filename = 'decrypted_' . pathinfo($file['name'], PATHINFO_FILENAME) . '.' . $format;
    if (file_put_contents($filename, $decryptedContent) === false) {
        die("Failed to write decrypted file");
    }

    // Send decrypted file to user
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($filename));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));
    readfile($filename);

    // Delete the temporary decrypted file
    unlink($filename);
    exit;
}
?>