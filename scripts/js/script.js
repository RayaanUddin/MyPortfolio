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

// Sign out button
document.getElementById('login_signout_button').addEventListener('click', function(e) {
    if (document.getElementById('login_signout_button').querySelector('a').getAttribute('href') == "scripts/php/logout.php") {
        let confirm = window.confirm('Are you sure you want to sign out?');
        if (confirm) {
            console.log('Signing out');
        } else {
            e.preventDefault();
        }
    }
});

// Reset form confirmation
var resetButton = document.querySelector('input[type="reset"]') !== null;
if (resetButton) {
    document.querySelector('input[type="reset"]').addEventListener('click', function(e) {
        let confirm = window.confirm('Are you sure you want to reset the form?');
        if (confirm) {
            document.querySelector('form').reset();
            console.log('Form reset');
            document.querySelector('input[type="text"]').focus();
    
        } else {
            e.preventDefault();
        }
    });
}

// Create account form validation
var createAccountForm = document.getElementById('create-account-form');
if (createAccountForm) {
    createAccountForm.addEventListener('submit', function(e) {
        let password = document.getElementById('password').value;
        let confirmPassword = document.getElementById('reenter-password').value;
        if (password !== confirmPassword) {
            e.preventDefault();
            alert('Passwords do not match');
        }
    });
}

// Preview Blog Post
var previewButton = document.getElementById('blog-post-preview');
if (previewButton) {
    previewButton.addEventListener('click', function(e) {
        e.preventDefault();
        let title = document.getElementById('title').value;
        let content = document.getElementById('content').value;
        if (title == "" || content == "") {
            alert('Please fill in all fields');
            return;
        }
        window.location.href = "viewBlog.php?title="+title+"&content="+content;
    });
}



