const adaptiveMenu = () => {
    const nav = document.querySelector('[data-name=nav]');
    const vMenu = document.querySelector('[data-name=visible-menu]');
    const hMenu = document.querySelector('[data-name=hidden-menu]');
    const burger = document.querySelector('[data-name=burger]');
    const breaks = [];

    if (!nav) return;

    const updateNav = () => {
        //получаем ширину всего меню
        const navWidth = burger.classList.contains('hidden') ? nav.offsetWidth : nav.offsetWidth - burger.offsetWidth;
        const vMenuWidth = vMenu.offsetWidth;
        const hMenuWidth = hMenu.offsetWidth;

        console.log(vMenuWidth, navWidth)

        if (vMenuWidth + 37 > navWidth){
            // breaks.push(vMenuWidth);
            hMenu.prepend(vMenu.lastElementChild);
            debugger
            burger.classList.remove('hidden');
            updateNav();
        }
    }

    window.addEventListener('resize', updateNav);
    document.addEventListener('DOMContentLoaded', updateNav)
}

adaptiveMenu()
