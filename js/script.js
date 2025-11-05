document.addEventListener('DOMContentLoaded', () => {

    const btnMenu = document.querySelector("#btnMenu");
    const menuPrincipal = document.querySelector(".menu");
    const btnFilters = document.querySelector("#btnFilters");
    const menuFilters = document.querySelector(".menuFilters");
    const btnCloseMenu = document.querySelector("#btnCloseMenu");
    const btnCloseFilters = document.querySelector("#btnCloseFilters");
    const menuProduct = document.querySelector(".menuProduct");
    const addProducts = document.querySelectorAll(".cart");
    const btnCloseProduct = document.querySelector("#btnCloseProduct");

    btnMenu.addEventListener('click', () => {
        menuPrincipal.style.display = "flex";
    });

    btnFilters.addEventListener('click', () => {
        menuFilters.style.display = "flex";
    });

    // this will have e.target later to get each product on to the screen.
    addProducts.forEach(addProduct => {
        addProduct.addEventListener('click', () => {
        menuProduct.style.display = "flex";
        });
    });

    btnCloseMenu.addEventListener('click', () => {
        menuPrincipal.style.display = "none";
    });

    btnCloseFilters.addEventListener('click', () => {
        menuFilters.style.display = "none";
    });

    // to avoid issue with disappearing filters menu after resizing to desktop
    window.addEventListener("resize", () => {
        if (window.innerWidth >= 992) {
            menuFilters.style.display = "";
        }
    });

    btnCloseProduct.addEventListener('click', () => {
        menuProduct.style.display = "none";
    });

});    