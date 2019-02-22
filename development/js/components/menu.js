const MenuActions = (function () {
  const body = document.querySelector('body');
  const headerNav = document.querySelector('.header__nav');
  const menu = document.querySelector('.menu');
  const menuItemToSubMenu = document.querySelectorAll('.menu-item-has-children');
  const subMenu = document.querySelectorAll('.sub-menu');
  const hamburguer = document.querySelector('.header__hamburguer');

  function addEventListener(element, func, type) {
    element.addEventListener(type, func);
  };

  function activeMenu() {
    if (headerNav) {
      if (headerNav.classList.contains('menu-active')) {
        headerNav.classList.remove('menu-active');
        body.classList.remove('fixing-body');
        return true;
      }
      headerNav.classList.add('menu-active');
      body.classList.add('fixing-body');
      return true;

    }
  }

  function activeSubMenu(e) {
    if (e.target.parentElement.classList.contains('menu-item-has-children')) {
      e.preventDefault();
      const subMenu = e.target.parentElement.querySelector('.sub-menu');
      subMenu.classList.add('sub-menu--active')
      menu.classList.add('menu--submenu-active');
    }
  }

  function deactiveSubMenu(e) {
    console.log(e);
    const subMenu = e.target.parentElement;
    subMenu.classList.remove('sub-menu--active');
    menu.classList.remove('menu--submenu-active');
  }

  function createBackBtn() {
    const li = document.createElement("li");
    li.classList.add('sub-menu__back');
    const text = document.createTextNode("Voltar");
    li.appendChild(text);
    addEventListener(li, deactiveSubMenu, "click")
    return li;
  }

  return {
    startMenuEvents: function () {
      if (hamburguer) {
        console.log("MENU STARTED")
        addEventListener(hamburguer, activeMenu, "click")
      }
      if (menuItemToSubMenu && subMenu) {

        subMenu.forEach((el) => {
          el.insertBefore(createBackBtn(), el.childNodes[0]);
        })

        menuItemToSubMenu.forEach((el) => {
          addEventListener(el, activeSubMenu, "click")
        })

      }
    }
  }

}());


export default MenuActions;
