let dropdown_menu = document.getElementById('header__cabinet_dropdown-menu'),
    dropdown_menuToggle1 = document.getElementById('cabinet__text'),
    dropdown_menuToggle2 = document.getElementById('cabinet__link'),
    dropdown_menu_counter1 = 2,
    dropdown_menu_counter2 = 2,

    elem1 = document.getElementById('green'),
    elem2 = document.getElementById('profile__right_order_status1'),
    elem3 = document.getElementById('profile__right_order_inf-box1'),
    elem4 = document.getElementById('profile__right_order-content-box1'),
    elem5 = document.getElementById('profile__right_order_price_clear_box1'),
    elem6 = document.getElementById('green'),
    elem7 = document.getElementById('profile__right_order_status2'),
    elem8 = document.getElementById('profile__right_order_inf-box2'),
    elem9 = document.getElementById('profile__right_order-content-box2'),
    elem10 = document.getElementById('profile__right_order_price_clear_box2'),
    elem11 = document.getElementById('green'),
    elem12 = document.getElementById('profile__right_order_status3'),
    elem13 = document.getElementById('profile__right_order_inf-box3'),
    elem14 = document.getElementById('profile__right_order-content-box3'),
    elem15 = document.getElementById('profile__right_order_price_clear_box3');









    /////////////////////////// функции идут ниже /////////////////////////







    // выпадающий хедар



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
      
    



    // Проверка на статус заказа(крестик)



    if (elem4.contains(elem3) && elem3.contains(elem2) && elem2.contains(elem1)){
        elem5.style.display = "block"
    }

    if (elem9.contains(elem8) && elem8.contains(elem7) && elem7.contains(elem6)){
        elem10.style.display = "block"
    }

    if (elem14.contains(elem13) && elem13.contains(elem12) && elem12.contains(elem11)){
        elem15.style.display = "block"
    }
        
    

