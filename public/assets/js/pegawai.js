
document.getElementById('npwp').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // Remove all non-digit characters
    if (value.length > 2) value = value.substring(0, 2) + '.' + value.substring(2);
    if (value.length > 6) value = value.substring(0, 6) + '.' + value.substring(6);
    if (value.length > 10) value = value.substring(0, 10) + '.' + value.substring(10);
    if (value.length > 12) value = value.substring(0, 12) + '-' + value.substring(12);
    if (value.length > 15) value = value.substring(0, 15) + '.' + value.substring(15, 18);
    e.target.value = value;
});

document.getElementById('no_telp').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // Remove all non-digit characters
    e.target.value = value; // Update the input field value
    let error = document.getElementById('no_telp_error');
    if (value.length < 10 || value.length > 15) {
        error.classList.remove('d-none');
    } else {
        error.classList.add('d-none');
    }
});
