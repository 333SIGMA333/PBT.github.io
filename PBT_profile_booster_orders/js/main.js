let popup = document.getElementById('mypopup'),
    popupToggle = document.getElementById('myBtn'),
    popupClose = document.getElementById('popupClose'),
    popup2 = document.getElementById('mypopup2'),
    popupToggle2 = document.getElementById('myBtn2'),
    popupClose2 = document.getElementById('popupClose2'),

    dropdown_menu = document.getElementById('header__cabinet_dropdown-menu'),
    dropdown_menuToggle1 = document.getElementById('cabinet__text'),
    dropdown_menuToggle2 = document.getElementById('cabinet__link'),
    dropdown_menu_counter1 = 2,
    dropdown_menu_counter2 = 2,

    money_prompt = document.getElementById('profile__left_remove-money-prompt'),
    remove_prompt = document.getElementById('profile__left__remove_prompt'),
    money_promt_counter = 2,

    btn_screen_promt = document.getElementById('profile__right_order-btn-prompt'),
    screen_promt = document.getElementById('profile__right_order-btn-promt-text'),
    screen_promt_counter = 2;



    // функции идут ниже




    popupToggle.onclick = function() {
        popup.style.opacity = "1",
        popup.style.visibility = "visible";
    };

    popupClose.onclick = function() {
        popup.style.opacity = "0",
        popup.style.visibility = "hidden";
    }

    popupToggle2.onclick = function() {
        popup2.style.opacity = "1",
        popup2.style.visibility = "visible";
    };

    popupClose2.onclick = function() {
        popup2.style.opacity = "0",
        popup2.style.visibility = "hidden";
    }

    window.onclick = function (e) {
        if(e.target == popup || e.target == popup2) {
            popup.style.opacity = "0",
            popup.style.visibility = "hidden",
            popup2.style.opacity = "0",
            popup2.style.visibility = "hidden";
        }
    }





    dropdown_menuToggle1.onclick = function() {
        if(dropdown_menu_counter1 % 2 == 0) {
            dropdown_menu.style.display = "block"
            dropdown_menu_counter1++
        }
        else {
            dropdown_menu.style.display = "none"
            dropdown_menu_counter1++
        }
    }

    dropdown_menuToggle2.onclick = function() {
        if(dropdown_menu_counter2 % 2 == 0) {
            dropdown_menu.style.display = "block"
            dropdown_menu_counter2++
        }
        else {
            dropdown_menu.style.display = "none"
            dropdown_menu_counter2++
        }
    }





    money_prompt.addEventListener('click', ()=> {
        if(money_promt_counter % 2 == 0) {
            remove_prompt.style.opacity = "1"
            remove_prompt.style.visibility = "visible"
            money_promt_counter++
        }
        else {
            remove_prompt.style.opacity = "0"
            remove_prompt.style.visibility = "hidden"
            money_promt_counter++
        }
    })









    btn_screen_promt.addEventListener('click', ()=> {
        if(screen_promt_counter % 2 == 0) {
            screen_promt.style.opacity = "1"
            screen_promt.style.visibility = "visible"
            screen_promt_counter++
        }
        else {
            screen_promt.style.opacity = "0"
            screen_promt.style.visibility = "hidden"
            screen_promt_counter++
        }
    })