<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="signup">
        <div class="signup-form">
			<?php
				if(isset($_POST['btnlogin'])){
					$us = $_POST['txt'];
					$pw = $_POST['pswd'];
					$err = "";
					if($us == "" || $pw == ""){
						function function_alert($message) {   
                            echo "<script type ='text/JavaScript'>";  
                            echo "alert('$message')";  
                            echo "</script>";   
                        }
                        function_alert("Vui Lòng Nhập Đầy Đủ Thông Tin!!");
					}
					if(strlen($pw) <= 5){
						$err .= "<h5> Vui lòng nhập mật khẩu lớn hơn 5 ký tự !! </h5>";
					}
				}
			?>
			<form method="POST" action="/main_web.php">
				<label>Đăng Nhập</label>
				<input class="form-input" type="text" name="txt" placeholder="Tài Khoản..." >
				<input class="form-input" type="password" name="pswd" placeholder="Mật Khẩu..." >
                <input class="checkbox-form" type="checkbox"> <span class="remem">Remember</span>
				<input class="submit" type="submit" name="btnlogin" value="Đăng Nhập">
                <p>Bạn chưa có tài khoản ?</p><a id="register" href="/form-login/form-register.php">Đăng Ký</a>
			</form>
        </div>
	</div>
</body>
</html>