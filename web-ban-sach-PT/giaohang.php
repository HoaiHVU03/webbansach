<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sách Phú Thọ</title>
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/svmuonsach.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
        <div class="header">
            <h1>Tiệm Sách Sinh Viên - Chi Nhánh Phú Thọ</h1>
        </div>
        <div class="banner">
            <div class="logo">
                <img src="/img/logo.png">
            </div>
            <div class="banner-find">
                <li id="adress"><a href="#">Phú Thọ<i class='bx bxs-chevron-down'></i></a></li>
            </div>
                <div class="adress-form">
                    <div class="adress-form-content">
                        <h2>Chọn địa chỉ chi nhánh <span id="adress-close">X Đóng</span></h2>
                        <form action="">
                           <select>
                                <option value="">--Chọn Địa Điểm--</option>
                                <option value="">Phú Thọ</option>
                                <option value="">Vĩnh Phúc</option>
                                <option value="">Việt Trì</option>
                           </select>
                           <select>
                                <option value="">--Chọn Quận\Huyện--</option>
                                <option value="">Phú Thọ</option>
                                <option value="">Vĩnh Phúc</option>
                                <option value="">Việt Trì</option>
                           </select>
                           <select>
                                <option value="">--Chọn Phường\Xã--</option>
                                <option value="">Phú Thọ</option>
                                <option value="">Vĩnh Phúc</option>
                                <option value="">Việt Trì</option>
                           </select>
                           <input type="text" placeholder="Số nhà, tên đường...">
                           <button>Xác Nhận</button>

                        </form>
                    </div>
                </div>
            <script src="/js/js.js"></script>
            <div class="others">
                <div class="other_search">
                    <input type="text" id="searchInput" name="search" placeholder="Tìm kiếm sách..." size="15">
                    <button onclick="searchProduct()"><i class='bx bx-search-alt-2'></i></button>
                </div>
            
                <div class="other_cart">
                    <li id="cart"><a href="#"><i class='bx bx-cart'></i></a></li>
                        <div class="cart-form">
                            <div class="cart-form-content">
                                <div class="cart-right">
                                    <h2>Giỏ Hàng</h2>
                                    <div id="close"><a href="#">Đóng</a></div>
                                    <div class="cart-img">
                                        <img src="/truyen/img/1.jpg" style="width: 100px; height: 120px ;"> <br>
                                        <img src="/truyen/img/2.jpg" style="width: 100px; height: 120px ;"> 
                                    </div>
                                    <div class="cart-p">
                                        <p>Bắp Ăn Mơ <br> và Xóm Đồi Rơm</p>
                                        <p>Hòn Đảo<br> Phía Chân Trời</p>
                                    </div>
                                    <div class="hrs">
                                        <hr>
                                    </div>
                                    
                                    <div class="VND">
                                        <p> 34.000VND </p> <br>
                                        <p> 37.000VND </p>
                                    </div>
                                    <div class="cart-sl">
                                        <p>-  <span style="color:chocolate">1</span>  +</p> <br>
                                        <p>-  <span style="color:chocolate">1</span>  +</p>
                                    </div>
                                    <div class="cart-info">
                                        <p>X</p> <br>
                                        <p>X</p>
                                    </div>
                                    <div class="cart-button">
                                       <button><a href="/giaohang.php">Xác Nhận</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="/js/cart.js"></script>
                <div class="other_login">
                    <li id="login"><a href="/form-login/form-login.php"><i class='bx bxs-user-circle'></i></a></li>
                        
                        <script src="/js/login-js.js"></script>
                </div>
                <div>
                        <li id="register"></li>
                        
                        <script src="/js/register.js"></script>
                </div> 
               
            </div>
        </div>
    <div class="product_navs">
    <div class="menu">
            <ul class="menu_list">
                <li><a href="main_web.php">Trang Chủ</a></li>
                <li><a href="">Thể Loại Sách</a>
                    <ul class="menu_dropdow">
                        <li><a href="/sachth.php">Sách Giáo Khoa</a></li>
                        <li><a href="tailieudaihoc/tailieu.php">Tài Liệu Đại Học</a></li>
                        <li><a href="/truyen/page1.php">Truyện các loại</a></li>
                        <li><a href="/dungcuhoctap/page1.php">Dụng Cụ Học Tập</a></li>
                    </ul>
                </li>
                <li><a href="">Quản Lý</a>
                <ul class="menu_dropdow2">
                    <li><a href="svmuonsachhv.php">Sinh viên mượn sách</a></li>
                    <li><a href="/svtrasachhv.php">Sinh viên trả sách</a></li>
                </ul>
            </li>
                <li><a href="">Hỗ Trợ</a></li>
                <li><a href="/gioithieu.php">Giới Thiệu</a></li>
            </ul>
        </div>
    </div>
	<?php
        if(isset($_POST['btnAdd'])){
            $name = $_POST['txtID'];
            $class = $_POST['class'];
            $sdt = $_POST['txtFax'];
            $err = "";
            if($name = ""){
                $err .= "<li>Nhập Tên Bạn";
            }
            if($class = ""){
                $err .= "<li>Nhập Địa Chỉ";
            }
            if($sdt = ""){
                $err .= "<li>Nhập Số Điện Thoại";
            }
            echo '<meta http-equiv="refresh" content="0;URL=main_web.php"/>';
        }
	?>

<div class="container" style="margin-top: 30px;">
	<h2>Xác Nhận Giao Hàng</h2>
			 	<form id="form1 myForm" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Nhập Tên Bạn:</label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Tên bạn...." value='<?php echo isset($_POST["txtID"])?($_POST["txtID"]):"";?>'>
							</div>
					</div>	
					<div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Nhập Địa Chỉ:</label>
							<div class="col-sm-10">
							      <input type="text" name="class" id="txtID" class="form-control" placeholder="Tên sách...." value='<?php echo isset($_POST["class"])?($_POST["class"]):"";?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Số Điện Thoại:</label>
							<div class="col-sm-10">
							      <input type="text" name="txtFax" id="txtName" class="form-control" placeholder="Email hoặc Số điện thoại..." value='<?php echo isset($_POST["txtFax"])?($_POST["txtFax"]):"";?>'>
							</div>
					</div>
                    
                    
					<div class="form-group">
						<div class="col-sm-offset-3">
						      <input type="submit" onclick="confirmSubmit(event)"  class="btn btn-primary" name="btnAdd" id="btnAdd" value="Xác Nhận"/>
						</div>
					</div>
				</form>
	</div>
    <div class="product_footer" style="margin-top: 100px;">
            <div class="hotline">
                <div class="tilte">
                    <p>Liên Hệ Với Chúng Tôi</p>
                </div>

                    <hr>

                <div class="sdt">
                <i class='bx bx-chevron-right'></i><span>Hotline: 0386574833</span> <br>
                <i class='bx bx-chevron-right'></i><span>Email: hoai0386574833@gmail.com</span>
                </div>

                <div class="icon">
                    <i class='bx bxl-facebook-square'></i>  
                    <i class='bx bxl-instagram-alt' ></i>
                    <i class='bx bxl-youtube' ></i>
                </div>
            </div>

            <div class="introduce">
                <div class="tilte">
                    <p>Giới Thiệu Về BookShop</p>
                </div>

                    <hr>

                <div class="sdt">
                <i class='bx bx-chevron-right'></i><span>Giới thiệu về nhà sách Sinh Viên chi nhánh Phú Thọ</span> <br>
                <i class='bx bx-chevron-right'></i><span>Hệ Thống Nhà Sách Phú Thọ</span> <br>
                <i class='bx bx-chevron-right'></i><span>Điều Khoản Sử Dụng</span><br>
                <i class='bx bx-chevron-right'></i><span>Chính Sách Bảo Mật</span><br>
                </div>
            </div>

            <div class="support">
                <div class="tilte">
                    <p>Hỗ Trợ Khách Hàng</p>
                </div>

                    <hr>

                <div class="sdt">
                <i class='bx bx-chevron-right'></i><span>Các Câu Hỏi Thường Gặp</span> <br>
                <i class='bx bx-chevron-right'></i><span>Chính Sách Đổi/Trả Hàng</span> <br>
                <i class='bx bx-chevron-right'></i><span>Quy Định Viết Bình Luận</span><br>
                </div>
            </div>

        </div>
</body>
</html>
<?php 
ob_end_flush();
?>