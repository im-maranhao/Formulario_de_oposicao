document.addEventListener('DOMContentLoaded', function() {
    var hamburger = document.getElementById('hamburger');
    var menu = document.getElementById('menu');

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('open');
        menu.classList.toggle('open');
    });
});
