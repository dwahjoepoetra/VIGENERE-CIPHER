document.getElementById('encryptForm').addEventListener('submit', function(event) {
    const fileInput = document.querySelector('input[name="file"]');
    const keyInput = document.querySelector('input[name="key"]');
    const formatInput = document.querySelector('select[name="format"]');
    if (!fileInput.files.length || !keyInput.value || !formatInput.value) {
        event.preventDefault();
        alert('Please upload a file, enter a key, and select a format.');
    }
});

document.getElementById('decryptForm').addEventListener('submit', function(event) {
    const fileInput = document.querySelector('input[name="file"]');
    const keyInput = document.querySelector('input[name="key"]');
    const formatInput = document.querySelector('select[name="format"]');
    if (!fileInput.files.length || !keyInput.value || !formatInput.value) {
        event.preventDefault();
        alert('Please upload a file, enter a key, and select a format.');
    }
});