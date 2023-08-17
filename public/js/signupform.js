const togglebtn = document.getElementById('see_password');
const passwordField = document.getElementById('password');

const togglebtn1 = document.getElementById('see_confirmation');
const confirmationField = document.getElementById('password_confirmation');

    togglebtn.addEventListener('click', ()=>{
        if(passwordField.type === 'password'){
            passwordField.type = 'text';
        }else{
            passwordField.type = 'password';
        }
    })

    togglebtn1.addEventListener('click', ()=>{
        if(confirmationField.type === 'password'){
            confirmationField.type = 'text';
        }else{
            confirmationField.type = 'password';
        }
    })