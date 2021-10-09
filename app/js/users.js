const searchBar = document.getElementById('searchBar');
const searchBtn = document.getElementById('searchBtn');

searchBtn.addEventListener('click', () => {
    searchBar.classList.toggle('active');
    searchBtn.classList.toggle('active');
    searchBar.focus();
});