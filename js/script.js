window.addEventListener('scroll', function() {
    if (window.scrollY > 100) { // ajusta este valor según tu necesidad
        document.body.classList.add('scrolled');
        document.querySelector('nav').classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
        document.querySelector('nav').classList.remove('scrolled');
    }
});