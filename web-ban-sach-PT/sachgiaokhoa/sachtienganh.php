<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sách Phú Thọ</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        <div class="header">
            <h1>Tiệm Sách Sinh Viên - Chi Nhánh Phú Thọ</h1>
        </div>
        <div class="banner">
        <div class="logo">
            <img src="/img/logo.png">
        </div>
        
        <div class="others">
            <div class="other_search">
                <input type="text" name="search" placeholder="Tìm kiếm sách..." size="15">
                <button><i class='bx bx-search-alt-2'></i></button>
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
        </div>
        </div>
    <div class="product_navs">
    <div class="menu">
            <ul class="menu_list">
                <li><a href="/main_web.php">Trang Chủ</a></li>
                <li><a href="">Thể Loại Sách</a>
                    <ul class="menu_dropdow">
                        <li><a href="/sachth.php">Sách Giáo Khoa</a></li>
                        <li><a href="/tailieudaihoc/tailieu.php">Tài Liệu Đại Học</a></li>
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
    <div id="wrapper">
        <div class="headline">
            <h3>Sách Giáo Khoa</h3>
        </div>

        <div class="product-headthumb">
            <a href="/sachth.php">Sách Toán</a>
            <a href="sachtiengviet.php">Sách Tiếng Việt</a>
            <a href="sachtienganh.php">Sách Tiếng Anh</a>
            
        </div>

        <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta1.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 1</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">33.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta2.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 2</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">34.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta3.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 3</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">35.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta4.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 4</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">36.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta5.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 5</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">37.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta6.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 6</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">38.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta7.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 7</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">39.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta8.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 8</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">40.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta9.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 9</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">41.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta10.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 10</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">42.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta11.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 11</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">43.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/ta12.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Sách Tiếng Anh 12</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">44.000 VND</div>
                    </div>
                </div>
            </li>
        </ul>
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
</body>