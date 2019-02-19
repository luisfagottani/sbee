const MenuActions = (function () {
  let headerNav = document.querySelector('.header__nav');
  const hamburguer = document.querySelector('.header__hamburguer');

  function addEventListener(element, func, type) {
    element.addEventListener(type, func);
  };

  function activeMenu() {
    if (headerNav) {
      if (headerNav.classList.contains('menu-active')) {
        headerNav.classList.remove('menu-active');
        return true;
      }
      headerNav.classList.add('menu-active');
      return true;

    }
  }

  return {
    startMenuEvents: function () {
      if (hamburguer) {
        console.log("MENU STARTED")
        addEventListener(hamburguer, activeMenu, "click")
      }
    }
  }

}());


export default MenuActions;
