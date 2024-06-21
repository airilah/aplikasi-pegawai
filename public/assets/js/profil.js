document.addEventListener('DOMContentLoaded', function () {
    var inputFields = document.querySelectorAll('.form-control');
    var submitButton = document.getElementById('submitButton');

    const previousValues = Array.from(inputFields, inputField => inputField.value);

    inputFields.forEach((inputField, index) => {
        inputField.addEventListener('input', checkSubmitButtonStatus);
    });

    function checkSubmitButtonStatus() {
        let inputChanged = false;

        inputFields.forEach((inputField, index) => {
            if (inputField.value.trim() !== '' && inputField.value !== previousValues[index]) {
                inputChanged = true;
            }
        });

        if (inputChanged) {
            // Aktifkan tombol jika ada perubahan pada input
            submitButton.removeAttribute('disabled');
        } else {
            // Nonaktifkan tombol jika tidak ada perubahan
            submitButton.setAttribute('disabled', 'true');
        }
    }
});
