let dropdown_menu = document.getElementById('header__cabinet_dropdown-menu'),
    checkbox__label_img = document.getElementById('checkbox__label_img'),
    dropdown_menuToggle1 = document.getElementById('cabinet__text'),
    dropdown_menuToggle2 = document.getElementById('cabinet__link'),
    chbox,
    dropdown_menu_counter1 = 2,
    dropdown_menu_counter2 = 2;

    dropdown_menuToggle1.onclick = function() {
        if(dropdown_menu_counter1 % 2 == 0) {
            dropdown_menu.style.display = "block",
            dropdown_menu_counter1++;
        }
        else {
            dropdown_menu.style.display = "none",
            dropdown_menu_counter1++;
        }
    }

    dropdown_menuToggle2.onclick = function() {
        if(dropdown_menu_counter2 % 2 == 0) {
            dropdown_menu.style.display = "block",
            dropdown_menu_counter2++;
        }
        else {
            dropdown_menu.style.display = "none",
            dropdown_menu_counter2++;
        }
    }

    function checkbox_tick() {
    chbox=document.getElementById('checkbox_1');
        if (chbox.checked) {
            checkbox__label_img.style.display = "block";
        }
        else {
            checkbox__label_img.style.display = "none";
        }
    }