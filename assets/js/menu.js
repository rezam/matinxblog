document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const sideMenu = document.getElementById('side-menu');

    if (menuToggle && sideMenu) {
        menuToggle.addEventListener('click', function(event) {
            sideMenu.classList.toggle('open');
            event.stopPropagation();
        });
    }

    document.body.addEventListener('click', function(event) {
        if (!sideMenu.contains(event.target) && !menuToggle.contains(event.target)) {
            sideMenu.classList.remove('open');
        }
    });

    const dropdownLinks = sideMenu.querySelectorAll('.nav-item.dropdown > a');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            const dropdownMenu = this.nextElementSibling;
            const parentLi = this.parentElement;

            if (dropdownMenu) {
                dropdownMenu.classList.toggle('show');
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';

                parentLi.classList.toggle('opened');
            }
        });
    });
});
