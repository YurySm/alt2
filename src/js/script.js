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

    try {
        new WOW().init();
    } catch(e){}

    try{
        const element = document.querySelector('#services');
        const choices = new Choices(element, {
            searchEnabled: false,
            shouldSort: false,
            itemSelectText: '',
            placeholder: false,
        });
    }catch(e){}



    // tabs
    try{
        const tabs__btns = document.querySelectorAll('.tabs__btn'),
          tabs__content = document.querySelectorAll('.tabs__content');

        tabs__content.forEach(content => {
            content.classList.add('fadeOut');
            content.classList.remove('fade');
            content.style.display = 'none';
        });

        tabs__content[0].classList.remove('fadeOut');
        tabs__content[0].classList.add('fade');
        tabs__content[0].style.display = 'flex';

        tabs__btns.forEach((btn, i )=> {
            btn.addEventListener('click', e => {
                e.preventDefault();
                tabs__btns.forEach( btn => {
                    btn.classList.remove('tabs__btn_active');
                })
                if(btn === e.target) {
                    btn.classList.add('tabs__btn_active');
                    tabs__content.forEach(content => {
                        content.classList.add('fadeOut');
                        content.classList.remove('fade');
                        content.style.display = 'none';     
                    });
                }
                tabs__content[i].classList.remove('fadeOut');
                tabs__content[i].classList.add('fade');
                tabs__content[i].style.display = 'flex';
            })
        })
    } catch(e){}
    //tabs selects
    const models = document.querySelectorAll('#model');

    models.forEach(item => {
        try{
            const element = item;
            const choices = new Choices(element, {
                searchEnabled: false,
                shouldSort: false,
                itemSelectText: '',
                placeholder: false,
            });
        }catch(e){}
    
    });


});