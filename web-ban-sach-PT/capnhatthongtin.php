<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sách Phú Thọ</title>
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
                <img src="./img/logo.png">
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
                    <i class='bx bx-cart'></i>
                </div>
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
                    <li><a href="/svmuonsachhv.php">Sinh viên mượn sách</a></li>
                    <li><a href="/svtrasachhv.php">Sinh viên trả sách</a></li>
                </ul>
            </li>
                <li><a href="">Hỗ Trợ</a></li>
                <li><a href="/gioithieu.php">Giới Thiệu</a></li>
            </ul>
        </div>
    </div>
	
   <?php
			include_once("connection.php"); 
			if(isset($_GET["id"])){
				$id = $_GET["id"];
		$result = mysqli_query($conn, "SELECT * FROM svmuonsach WHERE Cat_ID='$id'");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$cat_id = $row['Cat_ID'];
		$cat_name = $row['Cat_Class'];
		$cat_fax = $row['Cat_Fax'];
		$cat_book = $row['Cat_Book'];
		;
	?>
	<?php
		}else{
			echo '<meta http-equiv="refresh" content="0;URL=svmuonsach1.php"/>';
		}
	?>
	

<div class="container">
	<h2>Cập Nhật Thông Tin Sinh Viên</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Nhập Tên Bạn:  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Nhập tên bạn..." readonly 
								  value='<?php echo $cat_id; ?>'>	
							</div>
					</div>
					<div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Nhập Khoa Và Lớp:  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtClass" id="txtID" class="form-control" placeholder="Nhập khoa và lớp bạn..."
								  value='<?php echo $cat_name; ?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Nhập Email or SĐT: </label>
							<div class="col-sm-10">
								  <input type="text" name="txtFax" id="txtName" class="form-control" placeholder="Nhập email or số điện thoại bạn..." 
								  value='<?php echo $cat_fax; ?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Nhập Tên Sách:  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtBook" id="txtDes" class="form-control" placeholder="Nhập tên sách..."
								  value='<?php echo $cat_book; ?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2">
						      <input type="submit"  class="btn btn-primary" name="btnUpdate" id="btnUpdate" value="Cập Nhật"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Xem Danh Sách" onclick="window.location='svmuonsach1.php'" />
                              	
						</div>
					</div>
				</form>
	</div>
    <?php
		if(isset($_POST['btnUpdate'])){
			$id = $_POST['txtID'];
			$class = $_POST['txtClass'];
			$fax = $_POST['txtFax'];
			$book = $_POST['txtBook'];
			$err = "";
			if($id == ""){
				$err .= "<li>Vui lòng nhập tên bạn</li>";
			}
			if($err != ""){
				echo "<ul>$err</ul>";
			}else{
				$sq = "Select * from svmuonsach where Cat_ID != '$id' and Cat_Class = '$Class'";
				$result = mysqli_query($conn, $sq);
				if(mysqli_num_rows($result)==0){
					mysqli_query($conn, "UPDATE svmuonsach SET Cat_Class = '$class', Cat_Fax = '$fax', Cat_Book= '$book' where Cat_ID = '$id'");
					echo '<meta http-equiv="refresh" content="0;URL=svmuonsach1.php"/>';
				}else{
					echo "<li> Tên danh mục trùng lặp </li>";
				}
			}
		}
	?>


	<?php
   
    ?>
      <div class="product_footer" style="margin-top: 80px;">
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