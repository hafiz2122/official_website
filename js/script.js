// Script for popup for login/register


function openPopup() {
    document.getElementById('auth-popup').style.display = 'block';
}

function closePopup() {
    document.getElementById('auth-popup').style.display = 'none';
}

function openForm(evt, formName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName('tabcontent');
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = 'none';
    }
    tablinks = document.getElementsByClassName('tablinks');
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(' active', '');
    }
    document.getElementById(formName).style.display = 'block';
    evt.currentTarget.className += ' active';
}

// Open the login form by default
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.tablinks').click();
});

// Close the popup if clicked outside of it
window.onclick = function(event) {
    var popup = document.getElementById('auth-popup');
    if (event.target == popup) {
        closePopup();
    }
}