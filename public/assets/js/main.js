document.addEventListener("DOMContentLoaded", function() {
    var swiperConfigElement = document.querySelector('.swiper-config');
    var swiperConfig = JSON.parse(swiperConfigElement.textContent);
    var swiper = new Swiper('.swiper', swiperConfig);
});

$(document).ready(function() {
    $('#loginForm').on('submit', function(event) {
        var email = $('#email').val();
        var password = $('#password').val();
        var rememberMe = $('#formCheck').is(':checked');

        var errors = [];

        if (!email) {
            errors.push("Harap isi Email Anda.");
        }

        if (!password) {
            errors.push("Harap isi Password Anda.");
        }

        if (!rememberMe) {
            errors.push("Harap check 'Remember Me'.");
        }

        if (errors.length > 0) {
            event.preventDefault();

            var errorMessagesContainer = $('#errorMessages');

            errorMessagesContainer.html(errors.join("<br>"));

            errorMessagesContainer.slideDown();
        } else {
            $('#errorMessages').slideUp();
        }
    });
});
