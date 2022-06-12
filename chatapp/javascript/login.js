const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); //prevent form from submitting
}

continueBtn.onclick = ()=>{
    //Ajax start
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                //calling the resault without reload page
                console.log(data);
                if (data == "success") {
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                    
                }
            }
        }
    }
    //finish sending the form data through ajax
    let formData = new FormData(form); //creating new formData Object
    xhr.send(formData); //sending the form data to php

}