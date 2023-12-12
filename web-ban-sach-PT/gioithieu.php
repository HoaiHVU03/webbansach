<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sách Phú Thọ</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        span{
            color: chocolate;
        }
    </style>

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
                    <li><a href="#"><i class='bx bx-cart'></i></a></li>
                        
                    
                <div class="other_login">
                    <li id="login"><a href="/form-login/form-login.php"><i class='bx bxs-user-circle'></i></a></li>
                        
                </div>
                <div>
                        <li id="register"></li>
                        
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
    </div>
<div class="container-content" style="text-align: justify; width:1440px; margin:auto; padding-top:100px;"  >
<p style="font-size:18px;font-weight:100">Chào mừng đến với <strong><span style="font-size: 24px;">Tiệm Bán Sách Sinh Viên </span></strong> - nơi bạn có thể khám phá và tìm thấy những tác phẩm văn học tuyệt vời để nâng cao kiến thức và trải nghiệm đọc sách tuyệt vời!

Với sứ mệnh làm cho việc đọc sách trở nên dễ dàng và thú vị hơn đối với cộng đồng sinh viên, <strong><span style="font-size: 24px;"> Tiệm Bán Sách Sinh Viên </span></strong> tự hào cung cấp một bộ sưu tập đa dạng các tác phẩm từ các thể loại khác nhau, từ văn học kinh điển đến sách giáo trình chuyên ngành, phục vụ cho mọi nhu cầu học tập và sở thích cá nhân.

Chúng tôi hiểu rằng sinh viên luôn tìm kiếm sự tiện lợi và tiết kiệm thời gian, vì vậy trang web của chúng tôi được thiết kế để dễ sử dụng, cho phép bạn tìm kiếm nhanh chóng các tựa sách, xem đánh giá, và đặt hàng một cách thuận tiện.

Tại <strong><span style="font-size: 24px;">Tiệm Bán Sách Sinh Viên</span></strong>, chúng tôi cam kết đem đến cho bạn không chỉ là sách với giá cả phải chăng mà còn là trải nghiệm mua sắm trực tuyến tuyệt vời, với dịch vụ chăm sóc khách hàng tận tâm và đội ngũ nhân viên am hiểu về sách luôn sẵn sàng hỗ trợ bạn.

Hãy cùng chúng tôi khám phá thế giới văn học đa dạng và phong phú, tận hưởng niềm vui của việc đắm mình trong từng trang sách và mở rộng kiến thức một cách thú vị tại <strong><span style="font-size: 24px;"> Tiệm Bán Sách Sinh Viên! </span></strong> </p>

    <img src="/img/sl2.jpg" style="width:1440px">
    </div>
    <div class="product_footer" style="margin-top: 40px;">
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
        <ul id="productList">

        </ul>
        <script src="script.js"></script>
</body>
</html>