const navbar = document.querySelector('.nav');
window.onscroll = () => {
    if (window.scrollY > 5) {
        navbar.classList.add('nav-active');
        document.querySelector('.logoimg').src = "image/linkfyle-logo.png";
    } else {
        navbar.classList.remove('nav-active');
        document.querySelector('.logoimg').src = "image/linkfyle-logo-white.png";
    }
};
