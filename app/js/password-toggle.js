const passField = document.getElementById('password');
const toggleBtn = document.getElementById('toggle-icon');

toggleBtn.addEventListener('click', () => {
    if(passField.type === 'password') {
        passField.type = 'text';
        toggleBtn.classList.add('active');
    } else {
        passField.type = 'password';
        toggleBtn.classList.remove('active');
    }
});