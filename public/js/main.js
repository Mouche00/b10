
    // ==========Burger menus for navbar=============
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
    // =================navbar-close =================
 
    // =================cart-======================

    let cartIcon = document.querySelector('.cart-icon-button');
    let carteMenu = document.querySelector('.carte-menu');
    let cartCloseButton = document.querySelector('.cart-close');
    
    cartIcon.addEventListener('click', () => {
        // Afficher la carte-menu
        carteMenu.classList.remove('hidden');
    });
    
    cartCloseButton.addEventListener('click', () => {
        // Cacher la carte-menu avec une transition
        carteMenu.classList.add('hidden');
    });
   