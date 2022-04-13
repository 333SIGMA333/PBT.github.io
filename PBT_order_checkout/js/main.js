let dropdown_menu = document.getElementById('header__cabinet_dropdown-menu'),
    dropdown_menuToggle1 = document.getElementById('cabinet__text'),
    dropdown_menuToggle2 = document.getElementById('cabinet__link'),
    dropdown_menu_counter1 = 2,
    dropdown_menu_counter2 = 2,

    checkout_pay_card1 = document.getElementById('profile__booster_list-checkout-pay-card1'),
    checkout_pay_card2 = document.getElementById('profile__booster_list-checkout-pay-card2'),
    checkout_pay_card3 = document.getElementById('profile__booster_list-checkout-pay-card3'),
    checkout_pay_card4 = document.getElementById('profile__booster_list-checkout-pay-card4'),
    checkout_pay_card5 = document.getElementById('profile__booster_list-checkout-pay-card5'),
    checkout_pay_card6 = document.getElementById('profile__booster_list-checkout-pay-card6'),
    checkout_pay_card7 = document.getElementById('profile__booster_list-checkout-pay-card7'),
    checkout_pay_card_counter1 = 0,
    checkout_pay_card_counter2 = 0,
    checkout_pay_card_counter3 = 0,
    checkout_pay_card_counter4 = 0,
    checkout_pay_card_counter5 = 0,
    checkout_pay_card_counter6 = 0,
    checkout_pay_card_counter7 = 0,

    checkout_commission1 = document.getElementById('profile__booster_list-checkout-commission1'),
    checkout_commission2 = document.getElementById('profile__booster_list-checkout-commission2'),
    commission_box = document.getElementById('profile__booster_list-checkout-commission-box');


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

    checkout_pay_card1.addEventListener('click', ()=> {
        if(checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
            && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
            if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
                && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
                checkout_pay_card1.style.border = '2px solid rgba(19, 144, 17, 0.4)'
                checkout_pay_card1.style.boxShadow = '0px 0px 10px rgba(19, 144, 17, 0.15)'
                checkout_pay_card_counter1++
                console.log('1',checkout_pay_card_counter1)
                checkout_commission1.innerHTML = 'Комиссия 10% (взимается при оплате)'
                checkout_commission2.innerHTML = 'Включают в себя налоги и комиссию системы'
                commission_box.style.display = 'block'
            }
            else {
                checkout_pay_card1.style.border = '1px solid rgba(0, 0, 0, 0.1)'
                checkout_pay_card1.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.15)'
                checkout_pay_card_counter1++
                console.log('1',checkout_pay_card_counter1)
                checkout_commission1.innerHTML = ''
                checkout_commission2.innerHTML = ''
                commission_box.style.display = 'none'
            }
        }
    })

    checkout_pay_card2.addEventListener('click', ()=> {
        if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
            && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
            if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
                && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
                checkout_pay_card2.style.border = '2px solid rgba(19, 144, 17, 0.4)'
                checkout_pay_card2.style.boxShadow = '0px 0px 10px rgba(19, 144, 17, 0.15)'
                checkout_pay_card_counter2++
                console.log('2',checkout_pay_card_counter2)
                checkout_commission1.innerHTML = 'Комиссия - 10%'
                checkout_commission2.innerHTML = 'Налоги + Платежная система. Взимается при оплате.'
                commission_box.style.display = 'block'
            }
            else {
                checkout_pay_card2.style.border = '1px solid rgba(0, 0, 0, 0.1)'
                checkout_pay_card2.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.15)'
                checkout_pay_card_counter2++
                console.log('2',checkout_pay_card_counter2)
                checkout_commission1.innerHTML = ''
                checkout_commission2.innerHTML = ''
                commission_box.style.display = 'none'
            }
        }
    })

    checkout_pay_card3.addEventListener('click', ()=> {
        if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0
            && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
            if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
                && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
                checkout_pay_card3.style.border = '2px solid rgba(19, 144, 17, 0.4)'
                checkout_pay_card3.style.boxShadow = '0px 0px 10px rgba(19, 144, 17, 0.15)'
                checkout_pay_card_counter3++
                console.log('3',checkout_pay_card_counter3)
                checkout_commission1.innerHTML = 'Наш менеджер проконсультирует по всем вопросам, связанным с оплатой.'
                checkout_commission2.innerHTML = 'А также может предложить наиболее выгодное решение по комиссиям.'
                commission_box.style.display = 'block'
            }
            else {
                checkout_pay_card3.style.border = '1px solid rgba(0, 0, 0, 0.1)'
                checkout_pay_card3.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.15)'
                checkout_pay_card_counter3++
                console.log('3',checkout_pay_card_counter3)
                checkout_commission1.innerHTML = ''
                checkout_commission2.innerHTML = ''
                commission_box.style.display = 'none'
            }
        }
    })

    checkout_pay_card4.addEventListener('click', ()=> {
        if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
            && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
            if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
                && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
                checkout_pay_card4.style.border = '2px solid rgba(19, 144, 17, 0.4)'
                checkout_pay_card4.style.boxShadow = '0px 0px 10px rgba(19, 144, 17, 0.15)'
                checkout_pay_card_counter4++
                console.log('4',checkout_pay_card_counter4)
                checkout_commission1.innerHTML = 'Комиссия: от 0%'
                checkout_commission2.innerHTML = 'Оплата производится на один из наших кошельков. Минимальная комиссии из возможных. Подробности в дискорде.'
                commission_box.style.display = 'block'
            }
            else {
                checkout_pay_card4.style.border = '1px solid rgba(0, 0, 0, 0.1)'
                checkout_pay_card4.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.15)'
                checkout_pay_card_counter4++
                console.log('4',checkout_pay_card_counter4)
                checkout_commission1.innerHTML = ''
                checkout_commission2.innerHTML = ''
                commission_box.style.display = 'none'
            }
        }
    })

    checkout_pay_card5.addEventListener('click', ()=> {
        if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
            && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
            if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
                && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
                checkout_pay_card5.style.border = '2px solid rgba(19, 144, 17, 0.4)'
                checkout_pay_card5.style.boxShadow = '0px 0px 10px rgba(19, 144, 17, 0.15)'
                checkout_pay_card_counter5++
                console.log('5',checkout_pay_card_counter5)
                checkout_commission1.innerHTML = 'Комиссия WebMoney 0.8% (до 50$)'
                checkout_commission2.innerHTML = 'Оплата на наш кошелёк WMZ'
                commission_box.style.display = 'block'
            }
            else {
                checkout_pay_card5.style.border = '1px solid rgba(0, 0, 0, 0.1)'
                checkout_pay_card5.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.15)'
                checkout_pay_card_counter5++
                console.log('5',checkout_pay_card_counter5)
                checkout_commission1.innerHTML = ''
                checkout_commission2.innerHTML = ''
                commission_box.style.display = 'none'
            }
        }
    })

    checkout_pay_card6.addEventListener('click', ()=> {
        if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
            && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
            if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
                && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
                checkout_pay_card6.style.border = '2px solid rgba(19, 144, 17, 0.4)'
                checkout_pay_card6.style.boxShadow = '0px 0px 10px rgba(19, 144, 17, 0.15)'
                checkout_pay_card_counter6++
                console.log('6',checkout_pay_card_counter6)
                checkout_commission1.innerHTML = 'Комиссия - 0%'
                checkout_commission2.innerHTML = 'Прямой перевод на наш кошелек в системе Payoneer.'
                commission_box.style.display = 'block'
            }
            else {
                checkout_pay_card6.style.border = '1px solid rgba(0, 0, 0, 0.1)'
                checkout_pay_card6.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.15)'
                checkout_pay_card_counter6++
                console.log('6',checkout_pay_card_counter6)
                checkout_commission1.innerHTML = ''
                checkout_commission2.innerHTML = ''
                commission_box.style.display = 'none'
            }
        }
    })

    checkout_pay_card7.addEventListener('click', ()=> {
        if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
            && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0) {
            if(checkout_pay_card_counter1 % 2 == 0 && checkout_pay_card_counter2 % 2 == 0 && checkout_pay_card_counter3 % 2 == 0
                && checkout_pay_card_counter4 % 2 == 0 && checkout_pay_card_counter5 % 2 == 0 && checkout_pay_card_counter6 % 2 == 0 && checkout_pay_card_counter7 % 2 == 0) {
                checkout_pay_card7.style.border = '2px solid rgba(19, 144, 17, 0.4)'
                checkout_pay_card7.style.boxShadow = '0px 0px 10px rgba(19, 144, 17, 0.15)'
                checkout_pay_card_counter7++
                console.log('7',checkout_pay_card_counter7)
                checkout_commission1.innerHTML = 'Комиссия: 6 - 18%'
                checkout_commission2.innerHTML = 'Мы можем принять деньги на расчетный счет в Белорусском банке.'
                commission_box.style.display = 'block'
            }
            else {
                checkout_pay_card7.style.border = '1px solid rgba(0, 0, 0, 0.1)'
                checkout_pay_card7.style.boxShadow = '0px 0px 10px rgba(0, 0, 0, 0.15)'
                checkout_pay_card_counter7++
                console.log('7',checkout_pay_card_counter7)
                checkout_commission1.innerHTML = ''
                checkout_commission2.innerHTML = ''
                commission_box.style.display = 'none'
            }
        }
    })

