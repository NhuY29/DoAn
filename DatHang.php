<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./filecss/DatHang.css">
    <link rel="stylesheet" href="./filejava/start.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./filejava/dathang.js">
    <title>Đặt Hàng</title>
</head>

<body>
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

        <div class="header-above">
            <div class="imglogo-header">
                <a href="./star.php"><img src="./img/logo.png" alt="" class="photo"></a>
            </div>



            <div class="menu-left-div">
                <ul class="menu-left ">
                    <li class="list-menu">
                        <h3 onclick="menudulich()">Du Lịch <i class="fa-solid fa-angle-down"></i> </h3>

                    </li>
                    <!-- <li class="list-menu"><a href=""><b>Liên Hệ</b></a></li> -->
                    <!-- <li class="list-menu"><h3 onclick="menutintuc()">Vận Chuyển <i class="fa-solid fa-angle-down"
                                onclick="menutintuc()"></i></h3>
                        <ul class="ubertor-news menunone">
                            <li class="list-news"><a href="thuexe.html">Thuê Xe </a></li>
                            <li class="list-news"><a href="">Vé Máy Bay</a></li>
                        </ul>
                    </li> -->
                    <li class="list-menu">
                        <h3 onclick="menukhuyenmai()">Khuyến Mãi <i class="fa-solid fa-angle-down"></i></h3>
                    </li>
                    <li class="list-menu"><a href="./LienHe.php">
                            <h3>Liên Hệ</h3>
                        </a></li>
                    <li class="list-menu"><a href="./TravelPlus.php">
                            <h3>VietTravelPlus</h3>
                        </a> </li>
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
                    <!-- <li class="logOn list-menu"><a href="./DangNhap.html" target="_parent"><i
                                class="fa-regular fa-user"></i></a></li> -->
                </ul>
            </div>


        </div>
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

        <div class="content-items-block3">
            <div class="content-items-child">
                <div class="sale-content">
                    <div class="items-sale-contents sale1">
                        <img src="./img/UD4.jpg" alt="">
                    </div>
                    <div class="items-sale-contents2">
                        <div class="sale-trailer">
                            <div class="sale-trailer-sale">
                                <p>Vé máy bay + Khách sạn</p>
                            </div>
                            <h2><b>Vé máy bay + Khách sạn
                                    Phú Quốc: Dịch vụ vé máy bay + 2 đêm nghỉ dưỡng tại Vinoasis Phú Quốc 5 sao
                                    (Đã bao gồm Ăn sáng, Khám phá Vinpearl Safari + VinWonders - dịch vụ đón
                                    tiễn sân bay theo lịch khách sạn)</b></h2>
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

                                </i>
                                <h2>10</h2>
                                <h3>Tuyệt vời</h3>
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
                                <h3><b>Giá chỉ từ</b></h3>
                                <p style="color: #2D4271; margin-bottom: 10px; margin-top: 10px;">
                                    <B>6,890,000₫</B>/khách
                                </p>
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
        <div class="chude">
            <p><b>Quý khách có ghi chú lưu ý gì, hãy nói với chúng tôi !</b></p>
        </div>
        <div class="chia">
            <div class="Form_mua">
                <div class="class-from"></div>
                <form action="NEXTMAIL.PHP" class="from2" onsubmit="return send()" method="post">

                    <label for="HoTen">Họ Tên <span class="Do">(*)</span>:</label>
                    <input type="text1" minlength="1" maxlength="30" required name="hoten">
                    <label for="SDT">Di Động <span class="Do">(*)</span></label>
                    <input type="tel" pattern="[0-9]{10}" required name="didong" class="didong">
                    <label for="DiaChi">Địa Chỉ</label>
                    <input type="text1" class="dai" name="diachi">
                    <label for="Email">Email<span class="Do">(*)</span></label>
                    <input type="email" name="email">
            </div>


            <div class="BenTraiForm">
                <div class="BenTraiForm_top">
                    <div>
                        <label class="checker">
                            Hút thuốc
                            <input type="checkbox" class="note-more" value="hút thuốc">
                        </label>
                    </div>
                    <div>
                        <label class="checker">
                            Phòng tầng cao
                            <input type="checkbox" class="note-more" value="phòng tầng cao">
                        </label>
                    </div>
                    <div>
                        <label class="checker">
                            Trẻ em hiếu động
                            <input type="checkbox" class="note-more" value="trẻ em hiếu động">
                        </label>
                    </div>
                </div>
                <div class="BenTraiForm_below">
                    <div>
                        <label class="checker">
                            Ăn chay
                            <input type="checkbox" class="note-more" value="ăn chay">
                        </label>
                    </div>
                    <div>
                        <label class="checker">
                            Người khuyết tật
                            <input type="checkbox" class="note-more" value="có người khuyết tật">
                        </label>
                    </div>
                    <div>
                        <label class="checker">
                            Phụ nữ có thai
                            <input type="checkbox" class="note-more" value="phụ nữ có thai">
                        </label>
                    </div>
                </div>
                <div class="BenTraiForm_other">
                    <div>
                        <label class="checker">
                            Không có
                            <input type="checkbox" class="note-more" value=" Không có">
                        </label>
                    </div>
                </div>
                <!-- <div class="GhiChuThem">  <textarea name="" id="" cols="20" rows="20" placeholder="Thêm ghi chú cho chúng tôi..."></textarea></div> -->
            </div>
        </div>
    </div>

    <div class="nutDK">
        <input type="submit" name="btns">
    </div>
    </form>
    </div>

    <footer>
        <div class="footer-top">


            <div class="In">
                <div class="tieude">
                    <h2><b>Du lịch trong nước</b></h2>
                </div>

                <div class="in-uberator">
                    <ul class="uberator phaaiii" style="width: 50%; ">
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
    <script src="./filejava/start.js"></script>
    <script src="./filejava/dathang.js"></script>
    <!-- them duoi nay -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $(".header-above").addClass('sticky');
                }
                else {
                    $(".header-above").removeClass('sticky');
                }

            });
        });
    </script>
    <script>
        $(window).on('load', function (event) {
            $('body').removeClass(".preloading")
            $('.loadi').delay(3000).fadeOut('fast');
        });
    </script>
    <script>
        const body = document.body;
        const switch_mode = document.querySelector('#switch-mode i');
        // Load mode 
        let mode = localStorage.getItem('darkmode');
        if (mode == 'true') {
            body.classList.add('dark');
            switch_mode.className = "bi bi-brightness-high-fill";
        }
        switch_mode.addEventListener('click', () => {
            switch_mode.classList.toggle('bi-moon-stars-fill');
            switch_mode.classList.toggle('bi-brightness-high-fill');
            let mode = body.classList.toggle('dark');
            // save mode 
            localStorage.setItem('darkmode', mode);
        });
    </script>
</body>

</html>