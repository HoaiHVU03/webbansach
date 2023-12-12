
const cartform = document.querySelector('#cart')
const cartclose = document.querySelector('#close')

cartform.addEventListener("click", function(){
    document.querySelector('.cart-form').style.display = "flex"
});

cartclose.addEventListener("click", function(){
    document.querySelector('.cart-form').style.display = "none"
});