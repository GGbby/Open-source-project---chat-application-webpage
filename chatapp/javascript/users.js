const searchBar = document.querySelector(".users .search input"),  
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");

}

searchBar.onkeyup = () =>{//getting user search value
    let searchTerm = searchBar.value;
    //Ajax start
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                //calling the resault without reload page
                console.log(data);
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);//sending user search term to php file with ajax
}

setInterval(()=>{
    //Ajax start
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                //calling the resault without reload page
                usersList.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);// this function will run freqently after 500ms