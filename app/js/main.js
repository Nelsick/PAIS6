'use strict';

const signIn = document.getElementById('signIn');
const alert = document.getElementById('alert');

signIn.addEventListener('submit', (e) => {
    e.preventDefault();
    let data = new FormData(signIn);
    let name = data.get('name');
    let lastname = data.get('lastname');
    let username = data.get('username');
    let password = data.get('password');
    let confirmPassword = data.get('confirmPassword');


    let validar = validateDataForm(name,lastname,username,password,confirmPassword);

    if(validar){
        fetch('../controllers/signin.php',{
            method: 'post',
            body: data
        })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));

    }

})

function validateDataForm(name,lastname,username,password,confirmPassword){
    if((name.length,lastname.length,username.length,password.length,confirmPassword.length)< 1){
        alert.innerHTML = 'No se admiten valores vacios';
        return false;
    }else if(password != confirmPassword){
        alert.innerHTML = "Las contraseñas deben ser iguales";
        return false;
    }else{
        return true;
    }
}

