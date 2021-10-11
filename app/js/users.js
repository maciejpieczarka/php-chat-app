const searchBar = document.getElementById('searchBar');
const searchBtn = document.getElementById('searchBtn');
const usersList = document.getElementById('users-list');

searchBtn.addEventListener('click', () => {
    searchBar.classList.toggle('active');
    searchBtn.classList.toggle('active');
    searchBar.focus();
    searchBar.value = "";
});

searchBar.addEventListener('keyup', () => {
    let searchTerm = searchBar.value;
    if(searchTerm != "") {
        searchBar.classList.add("active");
    }else {
        searchBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "app/php/search.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                usersList.innerHTML = data;
            }
        }
    };
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
});

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "app/php/users.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(!searchBar.classList.contains("active")) {
                    usersList.innerHTML = data;
                }
            }
        }
    };
    xhr.send();
}, 500);