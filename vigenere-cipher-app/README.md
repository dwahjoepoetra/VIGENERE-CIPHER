# Vigenère Cipher File Encryption/Decryption Application

## Overview
This project is a web application that allows users to encrypt and decrypt files using the Vigenère Cipher. The application supports various file formats including .docx, .doc, .pptx, .ppt, .pdf, .xls, and .xlsx.

## Features
- Upload files for encryption and decryption.
- Use a custom key for the Vigenère Cipher.
- Download the encrypted or decrypted files.

## Project Structure
```
vigenere-cipher-app
├── backend
│   ├── encrypt.php
│   ├── decrypt.php
│   └── utils
│       └── vigenere.php
├── frontend
│   ├── css
│   │   └── styles.css
│   ├── js
│   │   └── app.js
│   └── index.html
├── README.md
└── .gitignore
```

## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Ensure you have a PHP server running (e.g., XAMPP, MAMP).
4. Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
5. Access the application via your web browser at `http://localhost/vigenere-cipher-app/frontend/index.html.`

### Penjelasan:
1. **Clone the repository**: Menggunakan perintah `git clone` untuk menyalin repositori ke mesin lokal Anda.
2. **Navigate to the project directory**: Menggunakan perintah `cd` untuk masuk ke direktori proyek.
3. **Set up a local server**: Menjalankan server lokal menggunakan PHP built-in server atau web server lain seperti Apache atau Nginx.
4. **Open the application**: Membuka aplikasi di browser web dengan URL yang sesuai.

Dengan mengikuti langkah-langkah ini, Anda akan dapat menginstal dan menjalankan aplikasi Vigenère Cipher File Encryption/Decryption di mesin lokal Anda.

## Usage
1. Open the application in your web browser.
2. To encrypt a file:
   - Select the file you want to encrypt.
   - Enter your encryption key.
   - Click the "Encrypt" button.
   - Download the encrypted file.
3. To decrypt a file:
   - Select the encrypted file.
   - Enter your decryption key.
   - Click the "Decrypt" button.
   - Download the decrypted file.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for details.