
const register = document.querySelector('#register')
const closere = document.querySelector('#close-register')
const loginevent = document.querySelector('#login-event')

register.addEventListener("click", function(){
    document.querySelector('.register-form').style.display = "flex"
})

loginevent.addEventListener("click", function(){
    document.querySelector('.register-form').style.display = "none"
})

loginevent.addEventListener("click", function(){
    document.querySelector('.signup').style.display = "flex"
})