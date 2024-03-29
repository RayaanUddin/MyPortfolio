// Nav bar show/hide button
var navPagesList = document.getElementById('nav-pages-list');

document.getElementById('nav-show-button').addEventListener('click', function(e) {
    navPagesList.classList.toggle('hide');
    updateMenuButton();
});

function updateMenuButton() {
    let navShowButton = document.getElementById('nav-show-button');
    let navShowButton_icon = navShowButton.querySelector('i');
    if (navPagesList.classList.contains('hide')) {
        navShowButton_icon.classList.replace("fa-times", "fa-bars");
        navShowButton.removete
        // navShowButton.replaceChild(navShowButton.childNodes.div, document.createTextNode("Hello"));
    } else {
        navShowButton_icon.classList.replace("fa-bars","fa-times");
    }
}

window.onresize = function() {
    if (window.innerWidth <= 768) {
        navPagesList.classList.add('hide');
    } else {
        navPagesList.classList.remove('hide');
    }
    updateMenuButton();
}

window.onload = function() {
    if (window.innerWidth <= 768) {
        navPagesList.classList.add('hide');
    } else {
        navPagesList.classList.remove('hide');
    }
    updateMenuButton();
}
