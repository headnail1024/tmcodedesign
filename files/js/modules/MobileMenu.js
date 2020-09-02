import $ from 'jquery';

class MobileMenu {
  constructor() {
    console.log("mobile menu constructor");
    this.header = $(".site-header");
    this.navbar = $(".navbar");
    this.burgerButton = $(".burger");
    this.burgerContainer = $(".burger-container");
    this.events(); 
  }

  events() {
    $(window).scroll(function () 
    {
      console.log("Scroll s" + $(window).scrollTop());
      if ($(window).scrollTop() == 0)
      {
        $(".navigation").removeClass("navigation--floating");
      } else
      {
        $(".navigation").addClass("navigation--floating");
      }
    });

    this.burgerContainer.on("click", this.openMenu.bind(this));
  }

  openMenu() {
    this.burgerButton.toggleClass("fa-bars fa-window-close");
    // fuggggggggggss
    this.navbar.toggleClass("navbar--active");
    //this.menu.toggleClass("site-header__menu--active");
  }
}

export default MobileMenu;