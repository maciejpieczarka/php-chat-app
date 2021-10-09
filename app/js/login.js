'use strict'

//! Util class
const getElement = (element, type) => {
    if(type === 'class') {
        return document.querySelector(`.${element}`);
    } else if(type === 'id') {
        return document.getElementById(element);
    } else {
        throw new Error('Wrong type of the element');
    }
};
//! Util class

const form = getElement('form', 'id');
const submitBtn = getElement('submitBtn', 'id');
const errorTxt = getElement('errorTxt', 'id');

form.addEventListener('submit', e => {
    e.preventDefault(); 
});

submitBtn.addEventListener('click', () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "app/php/login.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data == "success") {
                    location.href = "users.php"; 
                }else {
                    errorTxt.textContent = data;
                    errorTxt.style.display = "block";
                }
            }
        }
    };

    let formData = new FormData(form);

    xhr.send(formData);
});
