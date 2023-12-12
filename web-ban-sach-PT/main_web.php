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
    <div class="main_container">
        <div class="main_container_custom">
            <div class="container_left">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="item active">
                             <img src="./img/sl1.jpg" alt="" style="width:100%;">
                        </div>

                        <div class="item">
                            <img src="./img/sl2.jpg" alt="" style="width:100%;">
                        </div>
    
                        <div class="item">
                            <img src="./img/sl3.jpg" alt="" style="width:100%;">
                        </div>
                    </div>
                    <div class="controller">
                        <a class="left_carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right_carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container_right">
                <div class="top_img">
                    <li><a href=""><img src="./img/ctn2.jpg"></a></li>
                </div>
                <div class="bottom_img">
                    <li><a href=""><img src="./img/ctn1.png"></a></li>
                </div>
            </div>
        </div>
    </div>
    <div class="container-content">
    <div id="wrapper">
        <div class="headline">
            <h3>Sách Giáo Khoa</h3>
        </div>

        <div class="product-headthumb">
            <a href="/sachth.php">Xem Thêm</a>
        </div>

        <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/img/toan1.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Toán 1</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">76.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/img/toan2.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Toán 2</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">77.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/img/toan3.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Toán 3</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">78.000VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/img/toan4.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Toán 4</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">79.000 VND</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div id="wrapper">
        <div class="headline">
            <h3>Tài Liệu Đại Học</h3>
        </div>

        <div class="product-headthumb">
            <a href="/tailieudaihoc/tailieu.php">Xem Thêm</a>
        </div>

        <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/tailieudaihoc/img/triethoc.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Triết Học</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">88.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/tailieudaihoc/img/tuhoctienganh.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tự Học Tiếng Anh</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">99.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/tailieudaihoc/img/tuhoctiengtrung.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Tự Học Tiếng Trung</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">55.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/tailieudaihoc/img/z4884759378959_353acc13e9ae2b059a0d84cb0e227dc2.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Dược Động Học Đại Cương</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">77.000 VND</div>
                    </div>
                </div>
            </li>
    
        </ul>
    </div>
    <div id="wrapper">
        <div class="headline">
            <h3>Truyện Các Loại</h3>
        </div>

        <div class="product-headthumb">
            <a href="/truyen/page1.php">Xem Thêm</a>
        </div>

        <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/truyen/img/1.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Bắp Ăn Mơ và Xóm Đồi Rơm</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">44.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/truyen/img/2.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Hòn Đảo Phía Chân Trời</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">56.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/truyen/img/3.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Hồ Biểu Chánh, Cay Đắng Mùi Đời</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">47.000VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/truyen/img/4.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Nhóc Củ Lỏi, Củ Cải Trào Đời</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">52.000 VND</div>
                    </div>
                </div>
            </li>
            </ul>
    </div>
    <div id="wrapper">
        <div class="headline">
            <h3>Dụng Cụ Học Tập</h3>
        </div>

        <div class="product-headthumb">
            <a href="/dungcuhoctap/page1.php">Xem Thêm</a>
        </div>

        <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/dungcuhoctap/img/1.png" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Bút Chì Màu</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">22.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/dungcuhoctap/img/2.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Bút Bi Hình Dáng Dễ Thương</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">12.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/dungcuhoctap/img/7.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Combo 5 Cục Tẩy Thơm</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">25.000VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="/dungcuhoctap/img/8.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Màu Nước</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">294.000 VND</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    </div>
        <div class="product_footer">
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