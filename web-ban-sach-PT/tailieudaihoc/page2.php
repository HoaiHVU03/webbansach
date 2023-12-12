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
                        <li><a href="tailieu.php">Tài Liệu Đại Học</a></li>
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
            <h3>Tài Liệu Đại Học</h3>
        </div>

        <div class="product-headthumb">
            <a href="">Tài Liệu Đại Học</a>
        </div>

        <ul class="products">
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759420510_e6cc00a6135fd3ce4d277e5b57226a8e.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">5000 Từ Tiếng Anh</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">79.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759429318_1b4693c9988270bbb543875830799ae6.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Tự Học 2000 Từ Vựng Tiếng Anh</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">143.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759429525_22a75ed091e671157f97c00070ae8b29.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">5500 Từ Vựng Tiếng Anh</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">96.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759435049_5e5995f25c2b0e5e805c15c84e9ff3e6.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Quy Luật Đánh Vần Tiếng Anh</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">123.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759444630_e84c89e50f106f7c94741e11f7982656.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Kế Toán Tài Chính</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">54.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759446630_8993856e09e470ecfc335257f1e298c1.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Kế Toán Tài Chính 2</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">59.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759447725_9156f46ad9ca5e65a14faf9b57f71239.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Tài Liệu Chuyên Tin Học 3</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">117.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759451834_49f1fc331145e5e6ba858e933225809d.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Tài Liệu Chuyên Tin Học 2</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">119.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759453620_23a5e5b548e70e0ff6097433d799916d.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Soạn Thảo Văn Bản Word</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">155.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759464197_6bfc2a1adedd1bb9dbd00d2017331f4a.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Bí Quyết Làm Chủ Excel</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">112.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759476213_4559da57d31dc721c87a2cae727dfa3a.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Toán Cao Cấp</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">134.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759479931_ccfce438ffb32b12915675d5f5341fae.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Toán Cao Cấp Văn Bằng 2</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">144.000 VND</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="product_page">
        <button><a href="tailieu.php">1</a></button>
        <button><a href="page2.php">2</a></button>
        <button><a href="page3.php">3</a></button>
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