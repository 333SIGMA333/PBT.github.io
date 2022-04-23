let dropdown_menu = document.getElementById('header__cabinet_dropdown-menu'),
    dropdown_menuToggle1 = document.getElementById('cabinet__text'),
    dropdown_menuToggle2 = document.getElementById('cabinet__link'),
    dropdown_menu_counter1 = 2,
    dropdown_menu_counter2 = 2,

    wrapper = document.querySelector('.profile__right_avatar-img-box'),
    imgRemove = document.querySelector('.profile__right_avatar-img');



    // функции идут ниже



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





    function donwload(input) {
        let file = input.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(file);
    
        reader.onload = function () {
            let img = document.createElement('img');
            imgRemove.parentNode.removeChild(imgRemove);
            wrapper.prepend(img);
            img.src = reader.result;
            img.className = 'profile__right_avatar-img';
        }
    }