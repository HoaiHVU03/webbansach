<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="/css/register.css">
	<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="register-form">
        <div class="register-form-content">
			<form method="POST">
            <?php
				if(isset($_POST['btnregiste'])){
                    $id = $_POST['txtid'];
					$us = $_POST['txt'];
					$pw = $_POST['pswd'];
                    $em = $_POST['email'];
                    $cfpw = $_POST['cfpwd'];
					$err = "";
                    if($err != ""){
                        echo $err;
                    }else{
                        $pw = md5($cfpw);
                        $sq =  "Select * from login where User_id='$id'";
                        $res = mysqli_query($conn,$sq);
                        if(mysqli_num_rows($res)==0){
                            mysqli_query($conn, "Insert into login(User_id ,User_name, Password, Confirm Password, Email, state) 
                            values ('$id','$us', '$pw', '$em, '$cfp')") or die(mysqli_error($conn));
                        }else{
                            echo "Tài Khoản hoặc Email trùng lặp!";
                        }
                    }
                }
			?>
            <?php
            
             ?>
				<label  aria-hidden="true">Đăng Ký</label>
				<input class="form-input" type="text" name="txt" placeholder="Tài Khoản..." >
                <input class="form-input" type="email" name="email" placeholder="Email..." >
				<input class="form-input" type="password" name="pswd" placeholder="Mật Khẩu..." >
                <input class="form-input" type="password" name="cfpswd" placeholder="Nhập Lại Mật Khẩu..." >
				<input class="submit" type="submit" name="btnregister" value="Đăng Ký" onclick="window.location='form-login.php'">
                <p>Bạn đã có tài khoản ?</p><a id="login-event" href="/form-login/form-login.php">Đăng Nhập</a>
				</form>
        </div>
	</div>
</body>
</html>