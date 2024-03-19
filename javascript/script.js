// Nav bar show/hide button
document.getElementById('nav-show-button').addEventListener('click', function(e) {
    document.getElementById('nav-pages-list').classList.toggle('hide');
    document.getElementById('nav-show-button-icon').classList.toggle("fa-bars");
    document.getElementById('nav-show-button-icon').classList.toggle("fa-times");
});

window.onresize = function() {
    if (window.innerWidth < 768) {
        document.getElementById('nav-pages-list').classList.add('hide');
    } else {
        document.getElementById('nav-pages-list').classList.remove('hide');
    }
}

window.onload = function() {
    if (window.innerWidth < 768) {
        document.getElementById('nav-pages-list').classList.add('hide');
    } else {
        document.getElementById('nav-pages-list').classList.remove('hide');
    }
}
