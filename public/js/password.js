const passField = document.getElementById('new_password')

const btn = document.getElementById('passwordToggler')

btn.addEventListener('click' ,() => {
    if(passField.type == 'password'){
        passField.type == 'text'
    }else{
        passField.type == 'password'
    }
})
