<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/DiemDen.css">
    <link rel="stylesheet" href="./filecss/KhuyenMai.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./filejava/start.js">

    <title>Vietravel triển khai chương trình ưu đãi cùng VNPAY “Trúng deal to – Du lịch chẳng lo”</title>
</head>

<body class="preloading">
    <div class="loadi">
        <div class="loading">
            <img src="./img/cartoon-snail-loading-loading-gif-animation_2734139.png!bw700" alt="">
        </div>
    </div>
    <button id="switch-mode">
        <i class="bi bi-moon-stars-fill"></i>
    </button>
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


        <div class="KM">
            <div class="KM-left">
                <p><b class="head">Vietravel triển khai chương trình ưu đãi cùng VNPAY “Trúng deal to – Du lịch chẳng
                        lo”</b></p>
                <b><a href="">Tin tức du lịch </a>30/03/2023</b>
                <p>Với mong muốn mang đến nhiều quyền lợi hơn nữa cho khách hàng, Vietravel tiếp tục kết hợp cùng VNPAY
                    triển khai chương trình ưu đãi dành cho khách hàng mua tour thanh toán thành công qua dịch vụ
                    VNPAY-QR diễn ra từ nay đến hết 30/6/2023. Đây chính là lợi ích thiết thực mà Vietravel và VNPAY nỗ
                    lực mang đến khách hàng những tiện ích tốt nhất của xu hướng thanh toán hiện đại.</p>
                <p>Mùa hè này, Vietravel và VNPAY-QR đồng hợp tác mang đến cho Quý khách hàng chương trình khuyến mại
                    lớn nhằm mang đến những giải pháp thanh toán an toàn, thuận lợi, và gia tăng giá trị khi sử dụng mã
                    QR code.</p>
                <img src="./img/KM3.jpg" alt="">
                <p>Cơ hội mua tour trong và ngoài nước với mức giảm hấp dẫn đã đến rồi bạn ơi! Thanh toán dễ dàng, mua
                    sắm tiện lợi hơn tại Vietravel cùng VNPAY, bạn sẽ được giảm đến 200.000 đồng khi thanh toán qua
                    VNPAY-QR. Chương trình áp dụng cho các khách hàng đang sử dụng ứng dụng Mobile Banking của ngân hàng
                    hiện có tính năng QR Pay bao gồm: Vietcombank, BIDV, VietinBank, Agribank, IVB, Nam A Bank, BAOVIET
                    Bank, Eximbank, SCB, HDBank, ABBank, Vietbank, BIDC, Saigonbank, SeABank, OceanBank, Kienlongbank,
                    ví điện tử VNPAY. Đồng thời, áp dụng cho tất cả khách hàng thanh toán đơn hàng qua cổng VNPAY-QR
                    trên website: www.travel.com.vn và tại hệ thống trụ sở chính, chi nhánh Vietravel trên toàn quốc.
                </p>
                <p>Cụ thể chương trình ưu đãi như sau:</p>
                <p>+ Chương trình 1: Từ ngày 08/03 – 31/03/2023 hoặc đến khi hết ngân sách, nhập mã khuyến mãi
                    “VNPAYVT100” khi thanh toán qua cổng VNPAY-QR trên ứng dụng Mobile Banking hoặc Ví điện tử VNPAY sẽ
                    được giảm giá trực tiếp với số tiền là 50.000 đồng với mỗi giao dịch mua tour có hóa đơn từ 03 triệu
                    đồng trở lên và giảm giá trực tiếp với số tiền là 100.000 đồng cho hóa đơn thanh toán từ 06 triệu
                    đồng trở lên.</p>
                <p>+ Chương trình 2: Từ ngày 20/03 – 30/06/2023 hoặc đến khi hết ngân sách, giảm 200.000 đồng cho hóa
                    đơn từ 05 triệu đồng khi thanh toán qua VNPAY-QR code trên ứng dụng Mobile Banking hoặc trực tiếp
                    qua ví điện tử VNPAY, Mã giảm giá chia thành 3 đợt như sau: </p>
                <ul>
                    <li> Từ ngày 20/03 - 14/05/2023 hoặc đến khi hết ngân sách, nhập mã “VNPAYVT1” để được hưởng ưu đãi
                        giảm giá nêu trên. </li>
                    <li> Từ ngày 01/05 - 31/05/2023 hoặc đến khi hết ngân sách, nhập mã “VNPAYVT2” để được hưởng ưu đãi
                        giảm giá nêu trên.</li>
                </ul>
                
            </div>
            <div class="KM-right">
                <div class="XH">
                    <div class="Tweeter"><a href=""><i class="fa-brands fa-twitter"></i> Tweeter</a></div>
                    <div class="like"><a href=""><i class="fa-solid fa-thumbs-up"></i>Like</a></div>
                    <div class="share"><a href=""><i class="fa-solid fa-share"></i>Share</a></div>
                    <div class="save"><a href=""><i class="fa-solid fa-download"></i>Save</a></div>
                </div>
                <div class="TinMoi">
                    <p>Tin mới</p>
                    <ul>
                        <li><a href="">8 lưu ý khi du lịch Phượng Hoàng Cổ Trấn</a></li>
                        <li><a href="">Những trải nghiệm khi du lịch Phan Thiết - Mũi Né ai cũng nên thử một lần</a>
                        </li>
                        <li><a href="">Cùng Vietravel du lịch Campuchia kết hợp xem SEA Games 32 & cổ vũ đội tuyển U22
                                Việt Nam</a></li>
                        <li><a href="">Top 9 địa điểm du lịch Campuchia hot nhất năm 2023</a></li>
                        <li><a href="">Top những khách sạn nghỉ dưỡng Phan Thiết gần biển lý tưởng nhất mùa hè 2023</a>
                        </li>
                        <li><a href="">Trải nghiệm cuộc sống đầy sắc màu tại Sài Gòn</a></li>
                    </ul>

                    <p>Tin ngẫu nhiên</p>
                    <ul>
                        <li><a href="">Top những khách sạn nghỉ dưỡng Phan Thiết gần biển lý tưởng nhất mùa hè 2023</a>
                        </li>
                        <li><a href="">Top 9 địa điểm du lịch Campuchia hot nhất năm 2023</a></li>
                        <li><a href="">Những trải nghiệm khi du lịch Phan Thiết - Mũi Né ai cũng nên thử một lần</a>
                        </li>
                        <li><a href="">Trải nghiệm cuộc sống đầy sắc màu tại Sài Gòn</a></li>
                        <li><a href="">Cùng Vietravel du lịch Campuchia kết hợp xem SEA Games 32 & cổ vũ đội tuyển U22
                                Việt Nam</a></li>
                    </ul>
                </div>
            </div>
        </div>
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
        <script src="./filejava/start.js"></script>
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