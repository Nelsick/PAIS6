'use strict';

const buttoncard = document.querySelectorAll('.cardbutton');

buttoncard.forEach(boton => {
    boton.addEventListener('click', (e) => {
        let data = boton['id'];
        fetch('../app/controllers/shoppingcar.php',{
            method: 'post',
            body: data
        })
        .then(response => response.text())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
    })
})