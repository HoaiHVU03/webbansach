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
                            <img src="img/tuhoctienganh.jpg" alt="">
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
                            <img src="img/tuhoctiengtrung.jpg" alt="">
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
                            <img src="img/z4884759378959_353acc13e9ae2b059a0d84cb0e227dc2.jpg" alt="">
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
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759379162_740bcb2ecb343b1b6749e974b92ad604.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Câu Hỏi Trắc Nghiệm Độc Chất</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">84.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759383171_a81df8d034a7a2220069e6492cbc615f.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Kinh Tế Dược</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">65.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759388273_d5843846ee1bdb5470c87c0b8b3a3c55.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Tài Liệu HD Đại Hội Chi Bộ</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">93.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759389801_81eceeb360d4e596ef076eb225e25734.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Tài Liệu Học Tập DHDBTQ</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">73.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759391628_c093a181f9ce1dfecb582599fbf5f237.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Kinh Tế Dược</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">81.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759397068_4c07d32d82ec998de4f68a9d204a1095.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Bệnh Lao Và Tiến Trình Chăm Sóc</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">112.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759403872_3b6c78489876653e51efdcc7bdebcab0.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Giải Mã Đề Thi</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">212.000 VND</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-item">
                    <div class="product-top">
                        <a href="" class="product-thumb">
                            <img src="img/z4884759410600_62e376ecfde26e868f8758b85dbf60c8.jpg" alt="">
                            <!-- mua ngay -->
                            <a href="" class="buy-now">Mua ngay</a>
                        </a>
                    </div>

                    <div class="product-info">
                        <a href="" class="product-cat">Bách Khoa Toàn Thư Khoa Học</a>
                        <a href="" class="product-name"></a>
                        <div class="product-price">94.000 VND</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="product_page">
        <button><a href="tailieu.php">1</a></button>
        <button><a href="/tailieudaihoc/page2.php">2</a></button>
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