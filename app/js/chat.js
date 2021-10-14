const form = document.querySelector(".typing-area");
const inputField = document.getElementById("input-field");
const sendBtn = document.getElementById("send-btn");
const chatBox = document.getElementById("chat-box");

form.addEventListener('submit', (e) => {
    e.preventDefault();
});

sendBtn.addEventListener('click', () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "app/php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                inputField.value = "";
            }
        }
    };

    let formData = new FormData(form);
    xhr.send(formData);
});

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "app/php/get-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
            }
        }
    };
    
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);