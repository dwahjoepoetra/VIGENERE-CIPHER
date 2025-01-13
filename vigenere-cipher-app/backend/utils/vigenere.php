<?php
/**
 * Encrypts data using the Vigenere cipher.
 * @param string $data The data to be encrypted.
 * @param string $key The key used for encryption.
 * @return string The encrypted data in base64 form.
 * @throws InvalidArgumentException If the data or key is null.
 * @throws LengthException If the data or key is empty.
 */
function vigenereEncrypt($data, $key) {
    if ($data === null || $key === null) {
        throw new InvalidArgumentException('The data and key cannot be null.');
    }

    if (empty($data) || empty($key)) {
        throw new LengthException('The data and key cannot be empty.');
    }

    $ki = 0;
    $kl = strlen($key);
    $length = strlen($data);
    $encryptedData = '';

    for ($i = 0; $i < $length; $i++) {
        $encryptedData .= chr((ord($data[$i]) + ord($key[$ki])) % 256);
        $ki++;
        if ($ki >= $kl) {
            $ki = 0;
        }
    }

    return base64_encode($encryptedData);
}

/**
 * Decrypts data using the Vigenere cipher.
 * @param string $data The data to be decrypted.
 * @param string $key The key used for decryption.
 * @return string The decrypted data.
 * @throws InvalidArgumentException If the data or key is null.
 * @throws LengthException If the data or key is empty.
 */
function vigenereDecrypt($data, $key) {
    if ($data === null || $key === null) {
        throw new InvalidArgumentException('The data and key cannot be null.');
    }

    if (empty($data) || empty($key)) {
        throw new LengthException('The data and key cannot be empty.');
    }

    $data = base64_decode($data);
    $ki = 0;
    $kl = strlen($key);
    $length = strlen($data);
    $decryptedData = '';

    for ($i = 0; $i < $length; $i++) {
        $decryptedData .= chr((ord($data[$i]) - ord($key[$ki]) + 256) % 256);
        $ki++;
        if ($ki >= $kl) {
            $ki = 0;
        }
    }

    return $decryptedData;
}
?>