<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/main.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./filejava/start.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./filejava/loading.js">
    <title>Travel</title>
</head>

<body class="preloading">
  
    <div class="loadi">
        <div class="loading">
            <img src="./img/cartoon-snail-loading-loading-gif-animation_2734139.png!bw700" alt="">
        </div>
    </div>
    <div class="main">         
        <input type="checkbox" name="" id="" class="chekboxxxx">
        <div class="menu-icons">
           <div class="menu-line">

           </div>
        </div>
        <div class="menu-items">
         <ul class="uberator-items">
            <li><a href="./star.php">Trang Chủ</a></li>
           <li><a href="./TinTuc.php">Tin Tức</a></li>
           <li><a href="./thue.php">Thuê Xe</a></li>
           <li><a href="./bay.php">Vé Máy Bay</a></li>
           <li><a href="./index.php">Đăng Xuất</a></li>
         </ul>
        </div>
        <div class="headers">
            <div class="header-aboves">
                <div class="header-above-menus">
                    <div class="imglogo-header">
                        <img src="./img/logo.png" alt="" class="photo">
                    </div>
                    <div class="menu-left-div">
                        <ul class="menu-left ">
                            <li class="list-menu"><b onclick="menudulich()" style="cursor: pointer;">Du Lịch <i
                                        class="fa-solid fa-angle-down"></i> </b>

                            </li>
                            <!-- <li class="list-menu"><b onclick="menukhuyenmai()">Vận Chuyển <i
                                            class="fa-solid fa-angle-down"></i></b></li> -->
                            <li class="list-menu"><b  onclick="menukhuyenmai()" style="cursor: pointer;"> Khuyến Mãi <i class="fa-solid fa-angle-down"
                                onclick="menukhuyenmai()"></i></b>
                                <ul class="ubertor-news menunone">
                                    <li class="list-news"><a href="">Tin mới </a></li>
                                    <li class="list-news"><a href="">Tin tức du lịch</a></li>
                                    <li class="list-news"><a href=""> Cẩm nang du lịch</a></li>
                                    <li class="list-news"><a href="">Kinh Nghiệm du lịch</a></li>
                                </ul>
                            </li>
                            <li class="list-menu" ><b > <a href="./LienHe.php">Liên Hệ</a>  </b></li>
                            <li class="list-menu"><b> <a href="./TravelPlus.php">VietTravelPlus</a> </b> </li>
                        </ul>
                    </div>
                    <div class="menu-right-div">
                        <ul class="menu-right">
                        <li class="search list-menu">
                        <form action="xulydulieutimkiem.php" method="post">
                            <input type="text" placeholder="Bắt đầu tìm kiếm..." name="noiden">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </li>
                            </li>
                            <!-- <li class="logOn"><a href="./DangNhap.html" target="_parent"><i
                                        class="fa-regular fa-user"></i></a></li> -->
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!--menuuuu-->
        <div class="main-dropdown">
            <div class="menu-dropdown goout">
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Bac.php">TOUR MIỀN BẮC</a></B></li>
                        <li class="list-dropdown"><a href="./Ha Noi.php">Du lịch Hà Nội</a></li>
                        <li class="list-dropdown"><a href="./Hai Phong.php">Du lịch Hải Phòng</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Hạ Long</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Bắc Ninh</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Phú Thọ</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Bac.php"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Trung.php">TOUR MIỀN TRUNG </a></B></li>
                        <li class="list-dropdown"><a href="./Hue.php">Du lịch Huế</a></li>
                        <li class="list-dropdown"><a href="./Quang Tri.php">Du lịch Quảng Trị</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Bình </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Đà Nẵng </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Nam</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Trung.php"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Tay.php">TOUR MIỀN TÂY NAM BỘ </a></B></li>
                        <li class="list-dropdown"><a href="./Phu Quoc.php"> Du lịch Phú Quốc </a></li>
                        <li class="list-dropdown"><a href="./Tien Giang.php"> Du lịch Tiền Giang</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Cần Thơ </a></li>
                        <li class="list-dropdown"><a href="">Du lịch Vĩnh Long</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Sóc Trăng</a></li>
                        <li class="list-dropdown"><B><a href="/Mien Tay.php"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Dong.php">TOUR MIỀN ĐÔNG NAM BỘ </a></B>
                        </li>
                        <li class="list-dropdown"><a href="./Dong Nai.php"> Du lịch Đồng Nai</a></li>
                        <li class="list-dropdown"><a href="./Vung Tau.php"> Du lịch Bà Rịa - Vũng Tàu</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Côn Đảo </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch TP. Hồ Chí Minh</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Tây Ninh</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Dong.php"> Xem tất cả</a></B> </li>

                    </ul>
                </div>
                <i class="fa-solid fa-xmark iconclosed" onclick="closeddmenu()"></i>
            </div>
        </div>
        <div class="main-dropdown2">
            <div class="menu-dropdown2">
                <ul class="uperator-dropdown2">
                    <li class="list-dropdown2"> <a href="./KhuyenMai1.php">Vietravel & Sacombank tung ưu đãi “Tiền về đầy ví - Du hí thả
                            ga” </a> </li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai2.php"> Vietravel & JCB tung ưu đãi “Thanh toán liền tay - Nhận ngay
                            deal xịn”</a></li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai3.php"> Vietravel triển khai chương trình ưu đãi cùng VNPAY “Trúng
                            deal to – Du lịch chẳng lo”</a></li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai4.php"> Vietravel & Sacombank: Quẹt thẻ liền tay - Giảm ngay 1 triệu
                            đồng</a></li>
                </ul>
                <i class="fa-solid fa-xmark iconclosed" onclick="closeddmenu()"></i>
            </div>
        </div>


        <!-- toi day -->
        <div class="content"  onclick="closeddmenu()">
            <div class="content-img">
                <img src="./img/sl_230410_kvhe2023_1920-570px.jpg" alt="">
            </div>
            <div class="containers">
                <div class="hear-container" onclick="closedmenu()">
                    <div class="menu-container">
                        <ul class="uberator-hear-container">
                            <li>

                                <p><i class="fa-solid fa-car-side"></i>Tour du lịch</p>
                                <p>trọn gói</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-hotel"></i></p>
                                <p></i>Khách sạn</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-plane"></i> </p>
                                <p>Vé máy bay</p>
                            </li>
                            <li>
                                <p> <i class="fa-solid fa-plane"></i> + <i class="fa-solid fa-hotel"></i> Combo</p>
                                <p>vé máy bay + khách sạn</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-car-side"></i>+<i class="fa-solid fa-hotel"></i> Combo</p>
                                <p>xe + khách sạn</p>
                            </li>
                            <li>
                                <p><i class="fa-solid fa-magnifying-glass"></i></p>
                                <p>Tra cứu booking</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content-container">
                    <nav class="seach-tour">
                        <div class="seach-tour-container">
                            <ul class="uberrator-seach-tour">
                                <li><button>Tour Trọn Gói</button></li>
                                <li><button>Dịch Vụ Điểm đến</button></li>

                            </ul>
                            <hr width="95%">
                        </div>
                    </nav>
                    <form action="">
                    <div class="footer-tour">
                        <div class="tour-box1">
                            <div class="tour-box-item tb1">
                                <div class="tour-boxicon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="tour-box-text">
                               <p>Điểm Đi</p>
                               <h5 id="hienthinoiden" onclick="batcroll()" > Nơi Khởi Hành</h5>
                               <div class="tour-croll">
                               <ul class="uberator-tour-txt">

                               <li class="b1" onclick="crollclick()">
                                
                                        <h4>Nơi Khởi Hành</h4>
                                   
                               </li>
                               
                                <li class="b2" onclick="crollclick1()">
                                   
                                        <h4>TP Hồ Chí Minh</h4>
                                   
                                </li>
                                <li class="b3" onclick="crollclick2()">
                                   
                                        <h4>Hà Nội</h4>
                                   
                                </li>
                                <li class="b4" onclick="crollclick3()">
                                  
                                        <h4>Cần Thơ</h4>
                                   
                                </li>
                                <li class="b5" onclick="crollclick4()">
                                    
                                        <h4>Trà Vinh</h4>
                                  
                                </li>
                                <li class="b6" onclick="crollclick5()">
                                   
                                        <h4>Mỹ Tho</h4>
                                    
                                </li>
                                <li class="b7" onclick="crollclick6()">
                                    
                                        <h4>Đà Nẵng</h4>
                                    
                                </li>
                               </ul>
                            </div>
                                </div>
                            </div>
                            <div class="tour-box-item tb2"><i class="fa-solid fa-right-left"></i></div>
                            <div class="tour-box-item tb3"> <div class="tour-boxicon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="tour-box-text">
                           <p>Điểm đến</p>
                           <h5 id="hienthinoiden1" onclick="batcroll2()">Nơi Khởi Hành</h5>
                           <div class="tour-croll bacroll">
                           <ul class="uberator-tour-txt">

                           <li class="b1" onclick="crollclicd()">
                            
                                    <h4>Nơi Khởi Hành</h4>
                               
                           </li>
                           
                            <li class="b2" onclick="crollclicd1()">
                               
                                    <h4>TP Hồ Chí Minh</h4>
                               
                            </li>
                            <li class="b3" onclick="crollclicd2()">
                               
                                    <h4>Hà Nội</h4>
                               
                            </li>
                            <li class="b4" onclick="crollclicd3()">
                              
                                    <h4>Cần Thơ</h4>
                               
                            </li>
                            <li class="b5" onclick="crollclicd4()">
                                
                                    <h4>Trà Vinh</h4>
                              
                            </li>
                            <li class="b6" onclick="crollclicd5()">
                               
                                    <h4>Mỹ Tho</h4>
                                
                            </li>
                            <li class="b7" onclick="crollclicd6()">
                                
                                    <h4>Đà Nẵng</h4>
                                
                            </li>
                           </ul>
                        </div>
                            </div></div>


                            <div class="tour-box-item kt1">
                                <div class="tour-boxicon">
                                  <i class="fa-regular fa-calendar-days"></i>
                                </div>
                                <div class="tour-box-text">
                               <p>Ngày Đi</p>
                               <div id="datepicker" 
                               class="input-group date" 
                               data-date-format="mm-dd-yyyy">
                             <input type="date" name="" id="" style="width: 70%; height: 30px;">
                          </div>
                                </div>
                            </div>
                            <div class="tour-box-item kt2">
                                <div class="tour-boxicon">
                                    <i class="fa-regular fa-calendar-days"></i>
                                  </div>
                                  <div class="tour-box-text">
                                 <p>Số Ngày</p>
                                 <h5 id="hienthinoiden2" onclick="batcroll3()" style="margin-top: 5%;">Tất Cả</h5>
                                 <div class="tour-croll bacroll1">
                                    <ul class="uberator-tour-txt">
                                    <li class="b1" onclick="crollclick7()">
                            
                                        <h4>Tất Cả</h4>
                                   
                               </li>
                               
                                <li class="b2" onclick="crollclick8()">
                                   
                                        <h4>1-3 ngày</h4>
                                   
                                </li>
                                <li class="b3" onclick="crollclick9()">
                                   
                                        <h4>4-7 ngày</h4>
                                   
                                </li>
                                <li class="b4" onclick="crollclick10()">
                                  
                                        <h4>8-14 ngày</h4>
                                   
                                </li>
                                <li class="b4" onclick="crollclick11()">
                                  
                                    <h4>hơn 14 ngày</h4>
                               
                            </li>
                            </ul>
                                 </div>
                        </div>
                            </div>
                            <div class="tour-box-item kt3"><i class="fa-solid fa-magnifying-glass"></i></div>
                        </div>
                    </div>
                </form>
                </div>

            </div>

        </div>
        <div class="content-2"  onclick="dongcroll()">
            <div class="slider-run">

                <div class="slider-run-block">
                    <h2 class="tler">Ưu Đãi</h2>
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>

                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <ul class="uberator-caroudel">
                                    <li><img src="./img/bn_230403_HANQUOC-DAINHACHOI_1024-768px.webp" alt="Los Angeles"
                                            class="d-block"></li>
                                            <li> <img src="./img/bn_230403_NhatBan-02.webp" alt="Chicago" class="d-block"></li>
                                    <li><img src="./img/bn_230403_TourHongKong_1024-768px.webp" alt="New York"
                                            class="d-block"></li>
                                </ul>


                            </div>

                            <div class="carousel-item">
                                <ul class="uberator-caroudel">
                                    <li> <img src="./img/bn_230413_Banner30-4_1024-768px.webp" alt="Los Angeles"
                                            class="d-block"></li>
                                    <li> <img src="./img/bn_230419_KV_SEAGAMES32 1904_1024-768px.webp" alt="Chicago"
                                            class="d-block"></li>
                                    <li><img src="./img/SL1.jpg" alt="New York" class="d-block"></li>
                                    <ul>
                            </div>
                            <div class="carousel-item">
                                <ul class="uberator-caroudel">
                                    <li> <img src="./img/SL2.jpg " alt="Los Angeles" class="d-block"></li>
                                    <li> <img src="./img/SL3.jpg" alt="Chicago" class="d-block"></li>
                                    <li><img src="./img/SL4.jpg" alt="New York" class="d-block"></li>
                                    <ul>
                            </div>
                            <div class="carousel-item">
                                <ul class="uberator-caroudel">
                                    <li> <img src="./img/SL5.jpg" alt="Los Angeles" class="d-block"></li>
                                    <li> <img src="./img/SL6.jpg" alt="Chicago" class="d-block"></li>
                                    <li><img src="./img/SL7.jpg" alt="New York" class="d-block"></li>
                                    <ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="content-items">
                <div class="content-items-block">
                    <div class="content-items-child">
                        <div class="tieude-content-item">
                            <h2 class="tler">Khám phá sản phẩm Vietravel</h2>
                        </div>

                        <div class="list-items-contents">
                            <a href="">
                                <img src="./img/KP1.webp" alt="">
                            </a>
                            <div class="gioithieu-tour">
                                <h3>Tour Lễ 30/4 giá tốt cho Gia đình</h3>
                            </div>
                        </div>
                        <div class="list-items-contents">
                            <a href="">
                                <img src="./img/KP2.webp" alt="">
                            </a>
                            <div class="gioithieu-tour">
                                <h3>Tự hào nét Việt: Ưu đãi kích cầu du lịch trong nươc</h3>
                            </div>
                        </div>
                        <div class="list-items-contents">
                            <a href="">
                                <img src="./img/KP3.webp" alt="">
                            </a>
                            <div class="gioithieu-tour">
                                <h3>Đến Úc trượt tuyết mùa hè</h3>
                            </div>
                        </div>
                        <div class="list-items-contents">
                            <a href="">
                                <img src="./img/KP4.png" alt="">
                            </a>
                            <div class="gioithieu-tour">
                                <h3>[ MỚI ] Tour trải nghiệm độc lạ, sự kiện, thể thao</h3>
                            </div>
                        </div>
                        <div class="list-items-contents">
                            <a href="">
                                <img src="./img/KP5.webp" alt="">
                            </a>
                            <div class="gioithieu-tour">
                                <h3>Dưới bầu trời Tây Âu thơ mộng</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-items-block2">
                    <div class="content-items-child">
                        <h2 class="tler">Ưu đãi tour giờ chót</h2>
                        <div class="first">
                            <div class="Tour1">
                                <img src="./img/UD1.jpg" alt="">
                                <div class="phanthan">
                                    <div class="Phan1">
                                        <p style="font-size: 12px;">29/6/2023-4N3D-Giờ đi: 07:00</p>
                                        <a href="" style="font-size: 16px; color: #2D4271;"><B>Tây Ninh - Hành trình
                                                chinh phục nóc nhà Nam Bộ - Tặng vé tham quan 3 tuyến cáp treo Chùa Hang
                                                - Tâm An - Vân Sơn| Lễ 30/4</B></a>
                                    </div>
                                    <div class="Phan2">
                                        <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                            NDDNG264-002-290423VN</p>
                                        <p>Nơi Khởi Hành: <b>Đà Nẵng</b></p>
                                        <p><b style="color: #FD5056;font-size: 30px;">7,990,000₫</b></p>
                                    </div>
                                    <div class="Phan3">
                                        <button class="Gia"><a href="./DatHang.php"><i class="fa-solid fa-cart-shopping"></i>Đặt
                                                Ngay</a></button>
                                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                                    </div>
                                    <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">10</b></p> -->
                                </div>
                            </div>


                            <div class="Tour2">
                                <img src="./img/UD2.jpg" alt="">
                                <div class="phanthan">
                                    <div class="Phan1">
                                        <p style="font-size: 12px;">28/8/2023-4N3D-Giờ đi: 07:00</p>
                                        <a href="" style="font-size: 16px; color: #2D4271;"><B>Đà Nẵng - Huế - Đầm Lập
                                                An - La Vang - Động Phong Nha & Thiên Đường - KDL Bà Nà - Cầu Vàng -Sơn
                                                Trà - Hội An - Đà Nẵng (Khách sạn 4* trọn tour) | Ngày Hội Du
                                                Lịch</B></a>
                                    </div>
                                    <div class="Phan2">
                                        <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                            NDSGN1331-010-290423VU</p>
                                        <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                        <p><b style="color: #FD5056; font-size: 30px;">9,490,000₫</b></p>
                                    </div>
                                    <div class="Phan3">
                                        <button class="Gia"><a href="./DatHang.php"><i class="fa-solid fa-cart-shopping"></i>Đặt
                                                Ngay</a></button>
                                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                                    </div>
                                    <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">17</b></p> -->
                                </div>
                            </div>


                            <div class="Tour3">
                                <img src="./img/UD3.jpg" alt="">
                                <div class="phanthan">
                                    <div class="Phan1">
                                        <p style="font-size: 12px;">23/7/2023-2N1D-Giờ đi: 05:00</p>
                                        <a href="" style="font-size: 16px; color: #2D4271;"><B>Nhật Bản: Osaka - Kobe -
                                            Kyoto - Rừng tre Sagano - Nagoya - Tokyo - Núi Phú Sĩ - Oshino Hakkai -
                                                Vịnh Odaiba | Lễ Hội Ánh Sáng </B></a>
                                    </div>
                                    <div class="Phan2">
                                        <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                            NDSGN397-001-090523-V-7</p>
                                        <p>Nơi Khởi Hành: <b>Đà Nẵng</b></p>
                                        <p><b style="color: #FD5056;font-size: 30px;">6,990,000₫</b></p>
                                    </div>
                                    <div class="Phan3">
                                        <button class="Gia"><a href="./DatHang.php"><i class="fa-solid fa-cart-shopping"></i>Đặt
                                                Ngay</a></button>
                                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                                    </div>
                                    <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">12</b></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sua khuc nay ne -->
                <div class="content-items-block3">
                    <div class="content-items-child">
                        <div class="tieude-uudai">
                            <h2 class="tler">Gói ưu đãi đặc biệt</h2>
                        </div>

                        <div class="sale-content">
                            <div class="items-sale-contents sale1">
                                <img src="./img/UD4.jpg" alt="">
                            </div>
                            <div class="items-sale-contents2">
                                <div class="sale-trailer">
                                    <div class="sale-trailer-sale">
                                        <p>Vé máy bay + Khách sạn</p>
                                    </div>
                                    <h5><b>Vé máy bay + Khách sạn
                                            Phú Quốc: Dịch vụ vé máy bay + 2 đêm nghỉ dưỡng tại Vinoasis Phú Quốc 5 sao
                                            (Đã bao gồm Ăn sáng, Khám phá Vinpearl Safari + VinWonders - dịch vụ đón
                                            tiễn sân bay theo lịch khách sạn)</b></h5>
                                </div>
                                <div class="sale-icon">
                                    <ul class="star">
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                        <li><i class="ti-star"></i></li>
                                    </ul>
                                    <p>Vé máy bay khứ hồi + Phòng Standard + Ăn sáng + Xe đưa đón sân bay + Khám phá
                                        Vinpearl Safari + Trải nghiệm VinWonders không giới hạn</p>
                                </div>
                                <div class="sale-coment">
                                    <div class="iconnnn">
                                        <i class="ti-comment cs">
                                            <h2>10</h2>
                                        </i>
                                        <h5>Tuyệt vời</h5>
                                    </div>
                                    <div class="iconti">
                                        <i class="ti-truck"></i>
                                        <p>Bãi Dài, Gành Dầu, Phú Quốc, tỉnh Kiên Giang, Việt Nam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="items-sale-contents sale3">
                                <div class="sale3-item-block">
                                    <div class="sale-phan1">
                                        <h6><b>Giá chỉ từ</b></h6>
                                        <p style="color: #2D4271;"><B>6,890,000₫</B>/khách</p>
                                        <p style="color: #2D4271;">Ngày đi 21/05/2023</p>
                                    </div>
                                    <div class="Phan3 sss">
                                        <button class="Gia"><a href="./DatHang.php"><i class="fa-solid fa-cart-shopping"></i>Đặt
                                                Ngay</a></button>
                                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                                    </div>
                                    <p class="phan-footer">Khám phá Vinpearl Safari + Trải nghiệm VinWonders không giới
                                        hạn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-item-block4">
                    <div class="content-items-child">
                        <h2 class="tler">Điêm Đến Yêu Thích</h2>
                        <div class="list-content-child-tour">
                            <div class="list-img-tour limg1">
                                <i class="fa-solid fa-ship icon-tour"></i>
                               </div>
                            <div class="list-img-tour limg2">
                                <i class="fa-brands fa-d-and-d icon-tour"></i>
                                <img src="./img/NB1.jpg" alt="">
                            </div>
                            <div class="list-img-tour limg3">
                                <i class="fa-solid fa-mountain-city icon-tour"></i>
                                <img src="./img/NB2.jpg" alt="">

                            </div>
                         
                            <div class="list-img-tour limg4">
                                   <i class="fa-solid fa-utensils icon-tour" ></i>
                                <img src="./img/NB3.jpg" alt=""></div>        
                        </div>
                        <div class="list-content-child-tour">
                            <div class="list-img-tour limg5">
                                <i class="fa-solid fa-synagogue icon-tour"></i>
                                <img src="./img/NB4.jpg" alt=""></div>
                            <div class="list-img-tour limg6">
                                <i class="fa-solid fa-bridge icon-tour"></i>
                                <img src="./img/NB5.jpg" alt=""></div>
                            <div class="list-img-tour limg7">
                                <i class="fa-solid fa-champagne-glasses icon-tour"></i>
                                <img src="./img/NB6.jpg" alt=""></div>
                            <div class="list-img-tour limg8">
                                <i class="fa-solid fa-guitar icon-tour"></i>
                                <img src="./img/DN5.jpg" alt=""></div>   
                        </div>

                    </div>
                </div>
<div class="content-item-block5">
    <footer>
        <div class="footer-top">


            <div class="In">
                <div class="tieude">
                    <h2><b>Du lịch trong nước</b></h2>
                </div>

                <div class="in-uberator" >
                    <ul class="uberator phaaiii" style="width: 50%; " >
                        <li>Hà Nội</li>
                        <li>Hải Phòng</li>
                        <li>Hạ Long</li>
                        <li>Huế</li>
                        <li>Quảng Bình</li>
                        <li>Đà Nẵng</li>
                        <li>Quảng Nam</li>
                        <li>Nha Trang</li>
                    </ul>
                    <ul class="uberator" style=" width: 50%;">
                        <li>Đà Lạt</li>
                        <li>Phan Thiết</li>
                        <li>Bà Rịa-Vũng Tàu</li>
                        <li>Phú Quốc</li>
                        <li>Cần Thơ</li>
                        <li>Hà Tiên</li>
                        <li>Bắc Kạn</li>
                        <li>Hà Giang</li>
                    </ul>


                </div>

            </div>
            <div class="DongTour">
                <div class="tieude">
                    <h2><b>Dòng Tour</b></h2>
                </div>
                <div class="in-uberator">
                    <ul class="uberator">

                        <li>Cao Cấp</li>
                        <li>Tiêu Chuẩn</li>
                        <li>Tiết Kiệm</li>
                        <li>Giá Tốt</li>
                    </ul>
                </div>


            </div>
            <div class="LienHe">
                <div class="tieude">
                    <h2><b>Liên Hệ</b></h2>
                </div>
                <div class="in-uberator">
                    <ul class="uberator">
                        <li>Xã Nhị Bình, Huyện Châu Thành, TG</li>
                        <li>0393928815</li>
                        <li>y021101022@tgu.edu.vn</li>
                        <li>Từ 8.00-22.00 hằng ngày</li>
                    </ul>
                </div>


            </div>
            <div class="QR">
                <div class="tieude">
                    <h2><b>Ứng Dụng Di Động</b></h2>
                </div>



                <div class="in-uberator chanfoot" style="display: block;">
                    <div class="chage-footer1">
                        <div class="chage-footer-child " style="width: 45%;">

                            <ul class="QR-download" style="list-style-type: none;">
                        <li> <a href=""><img src="./img/play.png" alt=""></a></li>
                        <li><a href=""><img src="./img/ios.png" alt=""></a></li>
                    </ul>
                        </div>
                         
                    </div>
                   
                    <div class="chage-footer1">
                        <div class="chage-footer-child">
                          <ul class="QR-download" style="list-style-type: none; ">
                        <li>
                            <img src="./img/QR1.png" alt="">
                        </li>
                        <li><img src="./img/QR2.png" alt=""></li>
                        </div>
                   


                    </ul>

</div>

                </div>


            </div>

        </div>




        <div class="footer-bottom">
            <div class="ChungNhan itembot">
                <div class="tieude">
                    <h2><b>Chứng Nhận</b></h2>
                </div>
                <div class="in-uberator testthu">
                    <ul class="uberator-bottom" style="list-style-type: none;">
                        <li><img src="./img/chungnhan1.png" alt=""></li>
                        <li> <img src="./img/chungnhan2.png" alt=""></li>
                    </ul>

                </div>


            </div>
            <div class="ThanhToan itembot">
                <div class="tieude">
                    <h2><b>Chấp Nhận Thanh Toán</b></h2>

                </div>
<div class="footer-chagebottom">
<div class="footerrr">

<ul class="uberator-thanhtoan chung" style="list-style-type: none;">
                    <li><img src="./img/anh1.png" alt=""> </li>
                    <li> <img src="./img/anh2.png" alt=""></li>
                    <li><img src="./img/anh3.png" alt=""> </li>
                </ul>
                <ul class="uberator-thanhtoan chung" style="list-style-type: none;">
                    <li><img src="./img/anh4.png" alt=""></li>
                    <li> <img src="./img/anh5.png" alt=""></li>
                    <li> <img src="./img/anh6.png" alt=""></li>
                </ul>
                <ul class="uberator-thanhtoan chung" style="list-style-type: none;">
                    <li> <img src="./img/anh7.png" alt=""></li>
                    <li><i class="ti-money"></i></li>
                    <li> <img src="./img/anh8.png" alt=""></li>

                </ul>
</div>
 
</div>
               






            </div>

            <div class="ThongTin itembot">
                <div class="tieude">
                    <h2><b>Thông Tin</b></h2>
                </div>
                <div class="in-uberator">
                <ul class="uperator-bottom chung">
                    <li>Tạp Chí Du Lịch</li>
                    <li>Cẩm Nang Du Lịch</li>
                    <li>Tin Tức</li>
                    <li>SiteMap</li>
                    <li>FAQs</li>
                    <li>Chính Sách Riêng Tư</li>
                    <li>Thỏa Thuận Sử Dụng</li>
                </ul>
</div>


            </div>

            <div class="MXH itembot">
                <div class="tieude">
                    <h2><b>Mạng Xã Hội</b></h2>
                </div>
                <div class="in-uberator">
                    <ul class=" dm chung" style="list-style-type: none;">
                        <li> <i class="fa-brands fa-facebook-f"></i></li>
                        <li><i class="fa-brands fa-square-instagram"></i></li>
                        <li><i class="fa-brands fa-youtube"></i></li>
                        <li> <i class="fa-brands fa-tiktok"></i></li>
                        <li class="metnha"> <button> <i class="fa-solid fa-phone-volume "></i> 1900 1000</button>
                        </li>
                    </ul>



                </div>

            </div>

        </div>



    </footer>
</div>


            </div>

        </div>
        
    </div>
   
  
    <script src=
    "https://code.jquery.com/jquery-3.6.1.min.js" 
            integrity=
    "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" 
            crossorigin="anonymous">
        </script>
          
        <script>
            $(function () {
                $("#datepicker").datepicker({ 
                    autoclose: true, 
                    todayHighlight: true,
                    todayBtn : "linked",
                    title : "Chon ngày tháng trên Quantrimang.com"
                }).datepicker('update', new Date());
            });
        </script>
        <script src=
    "https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
            integrity=
    "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
            crossorigin="anonymous">
        </script>
        <script src=
    "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
            integrity=
    "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous">
        </script>
        <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
        </script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="./filejava/start.js"></script>
    <script src="./filejava/loading.js"></script>
    <script>
        $(window).on('load', function (event) {
            $('body').removeClass(".preloading")
            $('.loadi').delay(3000).fadeOut('fast');
        });
    </script>

</body>

</html>