document.addEventListener('DOMContentLoaded', () => {
    //menu
    
    const humburger = document.querySelector('.header__humburger'),
          close = document.querySelector('.header__close'),
          menu = document.querySelector('.header__menu'),
          menuItems = document.querySelectorAll('.header__nav-item');
    humburger.addEventListener('click', () => {
        if(menu.classList.contains('fadeOut')) {
            menu.classList.remove('fadeOut');
        }
        menu.classList.add('fade');
        menu.style.display = 'block';
        close.style.display = 'block';
        humburger.style.display = 'none';
    });
    close.addEventListener('click', () => {
        menu.classList.remove('fade');
        menu.classList.add('fadeOut');
        humburger.style.display = 'block';
        close.style.display = 'none';
        setTimeout(() => {
            menu.style.display = 'none';
        },600);
    });
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            menu.classList.remove('fade');
            menu.classList.add('fadeOut');
            humburger.style.display = 'block';
            close.style.display = 'none';
            setTimeout(() => {
                menu.style.display = 'none';
            },600);
        });
    });
});