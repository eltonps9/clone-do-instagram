function publicar() {

    let menu = document.querySelector('#public');
    let menu_con = document.querySelector('#menuconfig');
    let menu_confi = document.querySelector('#menu-config');


    if (menu.style.display == "flex") {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
        menu_con.style.display = 'none';
        menu_confi.style.display = 'none';
    }
}

function alt_foto() {

    let menu = document.querySelector('#perfil_ft');
    let menu_con = document.querySelector('#menuconfig');
    let menu_confi = document.querySelector('#menu-config');


    if (menu.style.display == "flex") {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
        menu_con.style.display = 'none';
        menu_confi.style.display = 'none';
    }
}

function foto() {

    let foto = document.querySelector('#foto_ft');
    let foto_input = document.querySelector('#imagem');

    foto.addEventListener('click', () => {
        foto_input.click();
    });
}

function alt() {

    let foto_perf = document.querySelector('#foto_perfil');
    let foto_inp = document.querySelector('#imagem_perfil');

    foto_perf.addEventListener('click', () => {
        foto_inp.click();
    });
}

function menuconfig() {

    let button = document.querySelector('.z-index');
    let menu_config = document.querySelector('#menuconfig');
    let menu_confi = document.querySelector('#menu-config');

    if (menu_config.style.display == "flex") {
        menu_config.style.display = "none";
        button.style.border = "0px";


    } else {
        menu_config.style.display = "flex";
        button.style.border = "2px solid #000";
        menu_confi.style.display = "none";


    }

}

function config() {


    let menu_config = document.querySelector('#menuconfig');
    let menu_confi = document.querySelector('#menu-config');

    if (menu_confi.style.display == "flex") {
        menu_confi.style.display = "none";
        menu_config.style.display = "flex";




    } else {
        menu_confi.style.display = "flex";
        menu_config.style.display = "none";



    }

}

function mudar_conta() {

    let menu_config = document.querySelector('#menuconfig');
    let button = document.querySelector('.z-index');
    let login = document.querySelector('.login');

    if (login.style.display == "flex") {
        login.style.display = "none";

    } else {
        login.style.display = "flex";
        menu_config.style.display = "none";
        button.style.border = "0px";



    }

}