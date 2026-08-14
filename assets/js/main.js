console.log('Nova Agency JS loaded');

const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.main-navigation');

menuToggle.addEventListener('click', function () {
    navigation.classList.toggle('is-open');

    });


const backToTop = document.querySelector('.back-to-top');

    backToTop.addEventListener('click', function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
