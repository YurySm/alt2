document.addEventListener('DOMContentLoaded', () => {
    //menu
    
    const humburger = document.querySelector('.header__humburger'),
          close = document.querySelector('.header__close'),
          menu = document.querySelector('.header__menu'),
          menuItems = document.querySelectorAll('.header__nav-item');
    humburger.addEventListener('click', () => {
        menu.style.display = 'block';
        close.style.display = 'block';
        humburger.style.display = 'none';
    });
    close.addEventListener('click', () => {
        menu.style.display = 'none';
        close.style.display = 'none';
        humburger.style.display = 'block';
    });
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            menu.style.display = 'none';
            close.style.display = 'none';
            humburger.style.display = 'block';
        });
    });
});