document.addEventListener("DOMContentLoaded", function() {
    var swiperConfigElement = document.querySelector('.swiper-config');
    var swiperConfig = JSON.parse(swiperConfigElement.textContent);
    var swiper = new Swiper('.swiper', swiperConfig);
});
