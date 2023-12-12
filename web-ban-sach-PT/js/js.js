const addbtn = document.querySelector('#adress')
const addbclose = document.querySelector('#adress-close')


addbtn.addEventListener("click", function(){
    document.querySelector('.adress-form').style.display = "flex"
})

addbclose.addEventListener("click", function(){
    document.querySelector('.adress-form').style.display = "none"
})


/*------------------thanh toán-----------------*/
function confirmSubmit(event) {

    event.preventDefault();

    var isConfirmed = confirm("Bạn xác nhận mua hàng thành công, xin đợi đơn hàng tới nơi và thanh toán. Chúc quý khách một ngày vui vẻ!");


    if (isConfirmed) {
      document.getElementById("myForm").submit();
    } else {
    
    }
  }