let dropdown_menu = document.getElementById('header__cabinet_dropdown-menu'),
    dropdown_menuToggle1 = document.getElementById('cabinet__text'),
    dropdown_menuToggle2 = document.getElementById('cabinet__link'),
    dropdown_menu_counter1 = 2,
    dropdown_menu_counter2 = 2,
    
    shop_data_togle_menu = document.getElementById('shop__data_select-input'),
    shop__data_secretcode = document.getElementById('shop__data_secretcode-box'),
    shop__data_telephone = document.getElementById('shop__data_telephone-box'),
    shop__data_mail = document.getElementById('shop__data_mail-box');
    
const inputs = document.querySelectorAll('input'),
      totalPriceElement = document.querySelector('#desc__price'),
      checkbox1 = document.getElementById('checkbox_1'),
      checkbox2 = document.getElementById('checkbox_2'),
      checkbox3 = document.getElementById('checkbox_3'),
      checkbox4 = document.getElementById('checkbox_4'),
      checkbox5 = document.getElementById('checkbox_5'),
      checkbox6 = document.getElementById('checkbox_6'),
      checkbox7 = document.getElementById('checkbox_7'),
      checkbox8 = document.getElementById('checkbox_8'),
      checkbox9 = document.getElementById('checkbox_9'),
      checkbox10 = document.getElementById('checkbox_10'),
      checkbox11 = document.getElementById('checkbox_11'),
      checkbox12 = document.getElementById('checkbox_12'),

      selects = document.querySelectorAll('select[id="select__input"]'),
      shop_card_togle_menu = document.getElementById('select__input'),

      block1 = document.querySelector('.card__option-box[id="card__option-box1"]'),
      block2 = document.querySelector('.card__option-box[id="card__option-box2"]'),
      block3 = document.querySelector('.card__option-box[id="card__option-box3"]'),
      block4 = document.querySelector('.card__option-box[id="card__option-box4"]'),
      block5 = document.querySelector('.card__option-box[id="card__option-box5"]'),
      block6 = document.querySelector('.card__option-box[id="card__option-box6"]'),
      block7 = document.querySelector('.card__option-box[id="card__option-box7"]'),
      block8 = document.querySelector('.card__option-box[id="card__option-box8"]'),
      block9 = document.querySelector('.card__option-box[id="card__option-box9"]'),


      checkbox_span1 = document.querySelector('.checkbox__label_text[id="checkbox__label_text1"]'),
      checkbox_span2 = document.querySelector('.checkbox__label_text[id="checkbox__label_text2"]'),
      checkbox_span3 = document.querySelector('.checkbox__label_text[id="checkbox__label_text3"]'),
      checkbox_span4 = document.querySelector('.checkbox__label_text[id="checkbox__label_text4"]'),
      checkbox_span5 = document.querySelector('.checkbox__label_text[id="checkbox__label_text5"]'),
      checkbox_span6 = document.querySelector('.checkbox__label_text[id="checkbox__label_text6"]'),
      checkbox_span7 = document.querySelector('.checkbox__label_text[id="checkbox__label_text7"]'),
      checkbox_span8 = document.querySelector('.checkbox__label_text[id="checkbox__label_text8"]'),
      checkbox_span9 = document.querySelector('.checkbox__label_text[id="checkbox__label_text9"]'),

      checkbox_money1 = document.querySelector('.card__option-text-after[id="card__option-text-after1"]'),
      checkbox_money2 = document.querySelector('.card__option-text-after[id="card__option-text-after2"]'),
      checkbox_money3 = document.querySelector('.card__option-text-after[id="card__option-text-after3"]'),
      checkbox_money4 = document.querySelector('.card__option-text-after[id="card__option-text-after4"]'),
      checkbox_money5 = document.querySelector('.card__option-text-after[id="card__option-text-after5"]'),
      checkbox_money6 = document.querySelector('.card__option-text-after[id="card__option-text-after6"]'),
      checkbox_money7 = document.querySelector('.card__option-text-after[id="card__option-text-after7"]'),
      checkbox_money8 = document.querySelector('.card__option-text-after[id="card__option-text-after8"]'),
      checkbox_money9 = document.querySelector('.card__option-text-after[id="card__option-text-after9"]'),

      mediaQuery940 = window.matchMedia('(max-width: 940px)'),
      mediaQuery660 = window.matchMedia('(max-width: 660px)'),
      mediaQuery1400 = window.matchMedia('(max-width: 1400px)');






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




    // код переключения способа подтверждения в данных карточки магазина

    shop_data_togle_menu.addEventListener('change', function() {
        if(this.value == "A") {
            shop__data_secretcode.style.display = "block",
            shop__data_telephone.style.display = "none",
            shop__data_mail.style.display = "none";
        }

        if(this.value == "B") {
            shop__data_secretcode.style.display = "none",
            shop__data_telephone.style.display = "block",
            shop__data_mail.style.display = "none";
        }

        if(this.value == "C") {
            shop__data_secretcode.style.display = "none",
            shop__data_telephone.style.display = "none",
            shop__data_mail.style.display = "block";
        }

        if(this.value == "D") {
            shop__data_secretcode.style.display = "none",
            shop__data_telephone.style.display = "none",
            shop__data_mail.style.display = "none";
        }
    })






    // код переключения варианта прокачки карточки магазина

    shop_card_togle_menu.addEventListener('change', function() {
        if(this.value == "A") {
            totalPriceElement.innerText = "300";
            block2.style.display = "flex"
            block3.style.display = "flex"
            block9.style.display = "flex"

            document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 70px 50px";
            document.querySelector('article[class="shop__card"]').style.height = "735px";
            if (mediaQuery1400.matches) {
                document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 0px";
            }

            if (mediaQuery940.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "1050px";
            }

            if (mediaQuery660.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "0px";
            }



            checkbox_span1.textContent = "PvP сервер"; 
            checkbox_span2.textContent = "+Летающий маунт(60%)";
            checkbox_span3.textContent = "+Летающий маунт(280%)";
            checkbox_span4.textContent = "+Одна собирательная профа(1-375)";
            checkbox_span5.textContent = "+Две собирательные профы(1-375)";
            checkbox_span6.textContent = "+Кулинария(1-375)";
            checkbox_span7.textContent = "+Рыбная ловля(1-375)";
            checkbox_span8.textContent = "+Первая помощь(1-375)";
            checkbox_span9.textContent = "+Открыть все героики";

            checkbox_money1.textContent = "10";
            checkbox1.value = 1.1;
            checkbox_money2.textContent = "20";
            checkbox2.value = 20;
            checkbox_money3.textContent = "60";
            checkbox3.value = 60;
            checkbox_money4.textContent = "50";
            checkbox4.value = 50;
            checkbox_money5.textContent = "50";
            checkbox5.value = 50;
            checkbox_money6.textContent = "80";
            checkbox6.value = 80;
            checkbox_money7.textContent = "80";
            checkbox7.value = 80;
            checkbox_money8.textContent = "30";
            checkbox8.value = 30;
            checkbox_money9.textContent = "270";
            checkbox9.value = 270;
            document.querySelector('.card__option-text-after[id="card__option-text-after11"]').textContent = "%";

            document.querySelector('.card__option-box[id="card__option-box10"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box11"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box12"]').style.display = "none";
        }
    })
    shop_card_togle_menu.addEventListener('change', function() {
        if(this.value == "B") {
            totalPriceElement.innerText = "240";
            block2.style.display = "flex"
            block3.style.display = "flex"
            block9.style.display = "flex"

            document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 70px 50px";
            document.querySelector('article[class="shop__card"]').style.height = "735px";
            if (mediaQuery1400.matches) {
                document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 0px";
            }

            if (mediaQuery940.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "1050px";
            }

            if (mediaQuery660.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "0px";
            }



            checkbox_span1.textContent = "PvP сервер"; 
            checkbox_span2.textContent = "+Летающий маунт(60%)";
            checkbox_span3.textContent = "+Летающий маунт(280%)";
            checkbox_span4.textContent = "+Одна собирательная профа(1-375)";
            checkbox_span5.textContent = "+Две собирательные профы(1-375)";
            checkbox_span6.textContent = "+Кулинария(1-375)";
            checkbox_span7.textContent = "+Рыбная ловля(1-375)";
            checkbox_span8.textContent = "+Первая помощь(1-375)";
            checkbox_span9.textContent = "+Открыть все героики";

            checkbox_money1.textContent = "10";
            checkbox1.value = 1.1;
            checkbox_money2.textContent = "20";
            checkbox2.value = 20;
            checkbox_money3.textContent = "60";
            checkbox3.value = 60;
            checkbox_money4.textContent = "50";
            checkbox4.value = 50;
            checkbox_money5.textContent = "50";
            checkbox5.value = 50;
            checkbox_money6.textContent = "80";
            checkbox6.value = 80;
            checkbox_money7.textContent = "80";
            checkbox7.value = 80;
            checkbox_money8.textContent = "30";
            checkbox8.value = 30;
            checkbox_money9.textContent = "270";
            checkbox9.value = 270;
            document.querySelector('.card__option-text-after[id="card__option-text-after11"]').textContent = "%";

            document.querySelector('.card__option-box[id="card__option-box10"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box11"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box12"]').style.display = "none";
        }
    })
    shop_card_togle_menu.addEventListener('change', function() {
        if(this.value == "C") {
            totalPriceElement.innerText = "340";
            block2.style.display = "flex"
            block3.style.display = "flex"
            block9.style.display = "flex"

            document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 70px 50px";
            document.querySelector('article[class="shop__card"]').style.height = "735px";
            if (mediaQuery1400.matches) {
                document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 0px";
            }

            if (mediaQuery940.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "1050px";
            }

            if (mediaQuery660.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "0px";
            }



            checkbox_span1.textContent = "PvP сервер"; 
            checkbox_span2.textContent = "+Летающий маунт(60%)";
            checkbox_span3.textContent = "+Летающий маунт(280%)";
            checkbox_span4.textContent = "+Одна собирательная профа(1-375)";
            checkbox_span5.textContent = "+Две собирательные профы(1-375)";
            checkbox_span6.textContent = "+Кулинария(1-375)";
            checkbox_span7.textContent = "+Рыбная ловля(1-375)";
            checkbox_span8.textContent = "+Первая помощь(1-375)";
            checkbox_span9.textContent = "+Открыть все героики";

            checkbox_money1.textContent = "10";
            checkbox1.value = 1.1;
            checkbox_money2.textContent = "20";
            checkbox2.value = 20;
            checkbox_money3.textContent = "60";
            checkbox3.value = 60;
            checkbox_money4.textContent = "50";
            checkbox4.value = 50;
            checkbox_money5.textContent = "50";
            checkbox5.value = 50;
            checkbox_money6.textContent = "80";
            checkbox6.value = 80;
            checkbox_money7.textContent = "80";
            checkbox7.value = 80;
            checkbox_money8.textContent = "30";
            checkbox8.value = 30;
            checkbox_money9.textContent = "270";
            checkbox9.value = 270;
            document.querySelector('.card__option-text-after[id="card__option-text-after11"]').textContent = "%";

            document.querySelector('.card__option-box[id="card__option-box10"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box11"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box12"]').style.display = "none";
        }
    })
    shop_card_togle_menu.addEventListener('change', function() {
        if(this.value == "D") {
            totalPriceElement.innerText = "260";
            block2.style.display = "flex"
            block3.style.display = "flex"
            block9.style.display = "flex"

            document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 70px 50px";
            document.querySelector('article[class="shop__card"]').style.height = "735px";
            if (mediaQuery1400.matches) {
                document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 0px";
            }

            if (mediaQuery940.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "1050px";
            }

            if (mediaQuery660.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "0px";
            }



            checkbox_span1.textContent = "PvP сервер"; 
            checkbox_span2.textContent = "+Летающий маунт(60%)";
            checkbox_span3.textContent = "+Летающий маунт(280%)";
            checkbox_span4.textContent = "+Одна собирательная профа(1-375)";
            checkbox_span5.textContent = "+Две собирательные профы(1-375)";
            checkbox_span6.textContent = "+Кулинария(1-375)";
            checkbox_span7.textContent = "+Рыбная ловля(1-375)";
            checkbox_span8.textContent = "+Первая помощь(1-375)";
            checkbox_span9.textContent = "+Открыть все героики";

            checkbox_money1.textContent = "10";
            checkbox1.value = 1.1;
            checkbox_money2.textContent = "20";
            checkbox2.value = 20;
            checkbox_money3.textContent = "60";
            checkbox3.value = 60;
            checkbox_money4.textContent = "50";
            checkbox4.value = 50;
            checkbox_money5.textContent = "50";
            checkbox5.value = 50;
            checkbox_money6.textContent = "80";
            checkbox6.value = 80;
            checkbox_money7.textContent = "80";
            checkbox7.value = 80;
            checkbox_money8.textContent = "30";
            checkbox8.value = 30;
            checkbox_money9.textContent = "270";
            checkbox9.value = 270;
            document.querySelector('.card__option-text-after[id="card__option-text-after11"]').textContent = "%";

            document.querySelector('.card__option-box[id="card__option-box10"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box11"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box12"]').style.display = "none";
        }
    })
    shop_card_togle_menu.addEventListener('change', function() {
        if(this.value == "E") {
            totalPriceElement.innerText = "150";
            block2.style.display = "none"
            block3.style.display = "none"
            block9.style.display = "none"

            document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 50px";
            document.querySelector('article[class="shop__card"]').style.height = "636px";
            if (mediaQuery1400.matches) {
                document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 0px";
            }

            if (mediaQuery940.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "920px";
            }

            if (mediaQuery660.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "0px";
            }



            checkbox_span1.textContent = "PvP сервер"; 
            checkbox_span2.textContent = "+Летающий маунт(60%)";
            checkbox_span3.textContent = "+Летающий маунт(280%)";
            checkbox_span4.textContent = "+Одна собирательная профа(1-375)";
            checkbox_span5.textContent = "+Две собирательные профы(1-375)";
            checkbox_span6.textContent = "+Кулинария(1-375)";
            checkbox_span7.textContent = "+Рыбная ловля(1-375)";
            checkbox_span8.textContent = "+Первая помощь(1-375)";
            checkbox_span9.textContent = "+Открыть все героики";

            checkbox_money1.textContent = "10";
            checkbox1.value = 1.1;
            checkbox_money2.textContent = "20";
            checkbox2.value = 20;
            checkbox_money3.textContent = "60";
            checkbox3.value = 60;
            checkbox_money4.textContent = "50";
            checkbox4.value = 50;
            checkbox_money5.textContent = "50";
            checkbox5.value = 50;
            checkbox_money6.textContent = "80";
            checkbox6.value = 80;
            checkbox_money7.textContent = "80";
            checkbox7.value = 80;
            checkbox_money8.textContent = "30";
            checkbox8.value = 30;
            checkbox_money9.textContent = "270";
            checkbox9.value = 270;
            document.querySelector('.card__option-text-after[id="card__option-text-after11"]').textContent = "%";

            document.querySelector('.card__option-box[id="card__option-box10"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box11"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box12"]').style.display = "none";
        }
    })
    shop_card_togle_menu.addEventListener('change', function() {
        if(this.value == "F") {
            totalPriceElement.innerText = "160";
            block2.style.display = "none"
            block3.style.display = "none"
            block9.style.display = "none"

            document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 50px";
            document.querySelector('article[class="shop__card"]').style.height = "636px";
            if (mediaQuery1400.matches) {
                document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 0px";
            }

            if (mediaQuery940.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "920px";

            }

            if (mediaQuery660.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "0px";
            }



            checkbox_span1.textContent = "PvP сервер"; 
            checkbox_span2.textContent = "+Летающий маунт(60%)";
            checkbox_span3.textContent = "+Летающий маунт(280%)";
            checkbox_span4.textContent = "+Одна собирательная профа(1-375)";
            checkbox_span5.textContent = "+Две собирательные профы(1-375)";
            checkbox_span6.textContent = "+Кулинария(1-375)";
            checkbox_span7.textContent = "+Рыбная ловля(1-375)";
            checkbox_span8.textContent = "+Первая помощь(1-375)";
            checkbox_span9.textContent = "+Открыть все героики";

            checkbox_money1.textContent = "10";
            checkbox1.value = 1.1;
            checkbox_money2.textContent = "20";
            checkbox2.value = 20;
            checkbox_money3.textContent = "60";
            checkbox3.value = 60;
            checkbox_money4.textContent = "50";
            checkbox4.value = 50;
            checkbox_money5.textContent = "50";
            checkbox5.value = 50;
            checkbox_money6.textContent = "80";
            checkbox6.value = 80;
            checkbox_money7.textContent = "80";
            checkbox7.value = 80;
            checkbox_money8.textContent = "30";
            checkbox8.value = 30;
            checkbox_money9.textContent = "270";
            checkbox9.value = 270;
            document.querySelector('.card__option-text-after[id="card__option-text-after11"]').textContent = "%";

            document.querySelector('.card__option-box[id="card__option-box10"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box11"]').style.display = "none";
            document.querySelector('.card__option-box[id="card__option-box12"]').style.display = "none";
        }
    })
    shop_card_togle_menu.addEventListener('change', function() {
        if(this.value == "G") {
            totalPriceElement.innerText = "0";
            block2.style.display = "flex"
            block3.style.display = "flex"
            block9.style.display = "flex"

            document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 70px 50px";
            document.querySelector('article[class="shop__card"]').style.height = "835px";

            if (mediaQuery1400.matches) {
                document.querySelector('article[class="shop__card"]').style.margin = "52px 0px 160px 0px";
            }

            if (mediaQuery940.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "1050px";
            }

            if (mediaQuery660.matches) {
                document.querySelector('article[class="shop__desc"]').style.top = "0px";
            }



            checkbox_span1.textContent = "69-70"; 
            checkbox_span2.textContent = "68-69";
            checkbox_span3.textContent = "67-68";
            checkbox_span4.textContent = "66-67";
            checkbox_span5.textContent = "65-66";
            checkbox_span6.textContent = "64-65";
            checkbox_span7.textContent = "63-64";
            checkbox_span8.textContent = "62-63";
            checkbox_span9.textContent = "61-62";

            checkbox_money1.textContent = "24";
            checkbox1.value = 24;
            checkbox_money2.textContent = "23";
            checkbox2.value = 23;
            checkbox_money3.textContent = "22";
            checkbox3.value = 22;
            checkbox_money4.textContent = "21";
            checkbox4.value = 21;
            checkbox_money5.textContent = "20";
            checkbox5.value = 20;
            checkbox_money6.textContent = "20";
            checkbox6.value = 20;
            checkbox_money7.textContent = "20";
            checkbox7.value = 20;
            checkbox_money8.textContent = "20";
            checkbox8.value = 20;
            checkbox_money9.textContent = "19";
            checkbox9.value = 19;
            document.querySelector('.card__option-text-after[id="card__option-text-after11"]').textContent = "$";

            document.querySelector('.card__option-box[id="card__option-box10"]').style.display = "flex";
            document.querySelector('.card__option-box[id="card__option-box11"]').style.display = "flex";
            document.querySelector('.card__option-box[id="card__option-box12"]').style.display = "flex";
        }
    })


    
    // прослушка селект опций и удаление чеков после смены опции

    for (let select of selects) {
        select.addEventListener('change', function() {
            totalPrice = parseInt(totalPriceElement.textContent); // цена текста
            priceForLvl = parseInt(totalPriceElement.textContent); // цена текста
            checkbox1.checked = false;
            checkbox2.checked = false;
            checkbox3.checked = false;
            checkbox4.checked = false;
            checkbox5.checked = false;
            checkbox6.checked = false;
            checkbox7.checked = false;
            checkbox8.checked = false;
            checkbox9.checked = false;
            checkbox10.checked = false;
            checkbox11.checked = false;
            checkbox12.checked = false;
        })
    }

    // код суммы селекторов в карточке магазина

    totalPrice = parseInt(totalPriceElement.textContent); // цена текста
    priceForLvl = parseInt(totalPriceElement.textContent); // цена текста

    

    function calculate() { // функция

        if (checkbox2.checked) {
            totalPrice = totalPrice + parseInt(checkbox2.value); // выбран 2 чек (цена = цена + сумма чекбокса 2)
        }

        if (checkbox3.checked) {
            totalPrice = totalPrice + parseInt(checkbox3.value); // выбран 3 чек
        }

        if (checkbox4.checked) {
            totalPrice = totalPrice + parseInt(checkbox4.value); // выбран 4 чек
        }

        if (checkbox5.checked) {
            totalPrice = totalPrice + parseInt(checkbox5.value); // выбран 5 чек 
        }

        if (checkbox6.checked) {
            totalPrice = totalPrice + parseInt(checkbox6.value); // выбран 6 чек
        }

        if (checkbox7.checked) {
            totalPrice = totalPrice + parseInt(checkbox7.value); // выбран 7 чек
        }

        if (checkbox8.checked) {
            totalPrice = totalPrice + parseInt(checkbox8.value); // выбран 8 чек
        }

        if (checkbox9.checked) {
            totalPrice = totalPrice + parseInt(checkbox9.value); // выбран 9 чек
        }

        if (checkbox10.checked) {
            totalPrice = totalPrice + parseInt(checkbox10.value); // выбран 9 чек
        }

        if (checkbox11.checked) {
            totalPrice = totalPrice + parseInt(checkbox11.value); // выбран 9 чек
        }

        if (checkbox12.checked) {
            totalPrice = totalPrice + parseInt(checkbox12.value); // выбран 9 чек
        }

        if (checkbox1.checked && shop_card_togle_menu.value != "G") {
            totalPrice = totalPrice * parseFloat(checkbox1.value); // выбран 1 чек
        }

        if (checkbox1.checked && shop_card_togle_menu.value == "G") {
            totalPrice = totalPrice + parseFloat(checkbox1.value); // выбран 1 чек
        }

        totalPriceElement.innerText = parseInt(totalPrice); // (цена текст = общ цена просчета чека)
    }

    calculate();

    // прослушка всех input

    for (let input of inputs) {
        input.addEventListener('input', function() {
            totalPrice = priceForLvl;
            calculate();
        })
    }
    