const passwordToggle = document.getElementById('passwordToggler');
const passwordField = document.getElementById('password');

passwordToggle.addEventListener('click',()=>{
    if(passwordField.type === 'password'){
        passwordField.type = 'text';
    }else{
        passwordField.type = 'password';
    }
})