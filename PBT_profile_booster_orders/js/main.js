let popup = document.getElementById('mypopup'),
    popupToggle = document.getElementById('myBtn'),
    popupClose = document.getElementById('popupClose'),
    popup2 = document.getElementById('mypopup2'),
    popupToggle2 = document.getElementById('myBtn2'),
    popupClose2 = document.getElementById('popupClose2');

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