<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/thuexe.css">
    <link rel="stylesheet" href="./filejava/start.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Thuê Máy Bay</title>
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
        <div class="main-content">
        <div class="logo-content">
            <img id="img" src="./img/thuemaybay.jpg" alt="">
        </div>
        <div class="menu-car">
            <h1>MENU MAY BAY</h1>
            <hr width="100%">
            <h2>Xin Hay Dua Ra Lua Chon</h2>
            <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn" onclick="filterSelection('nature')"> MÁY BAY THƯỜNG</button>
                <button class="btn" onclick="filterSelection('cars')"> TRỰC THĂNG</button>
                <button class="btn" onclick="filterSelection('people')"> TIÊM KíCH</button>
              </div>
              <div class="row">
                <div class="column nature">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/jetstar.jpg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                      <h2>JETSTAR  </h2>
                      <p>Giá Thuê : <b>900.000 Đ</b></p>
                   </div>
                  </div>
                </div>
                <div class="column nature">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/vnairline.jpg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                    <h2>VN AIRLINES</h2>
                    <p>Giá Thuê : <b>1.200.000 Đ </b></p>
                   </div>
                  </div>
                </div>
                <div class="column nature">
                  <div class="content">
                  <div class="img-content">
                     <img src="./img/vietjet-air.png" alt=""  style="width:100%">
                  </div>
                  <div class="text-content">
                    <h2>VIETJET AIRLINES</h2>
                    <p>Giá Thuê : <b>800.000 Đ</b></p>
                  </div>
                  </div>
                </div>
                
                <div class="column cars">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/VN-8650.jpeg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                    <h2>VN-8650</h2>
                    <p>Giá Thuê : <b>700.000 Đ</b></p>
                   </div>
                  </div>
                </div>
                <div class="column cars">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/VH-8641.jpg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                    <h2>VN-8641</h2>
                    <p>Giá Thuê : <b>900.000 Đ</b></p>
                   </div>
                  </div>
                </div>
                <div class="column cars">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/NAVY.jpg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                    <h2>NAVY</h2>
                    <p>Giá Thuê : <b>1.500.000 Đ </b></p>
                   </div>
                  </div>
                </div>
              
                <div class="column people">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/PL-1.jpg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                    <h2>MiG-31</h2>
                    <p>Giá Thuê : <b>900.000 Đ</b></p>
                   </div>
                  </div>
                </div>
                <div class="column people">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/PL-2.jpg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                    <h2> Su-34</h2>
                    <p>Giá Thuê : <b>700.000 Đ</b></p>
                   </div>
                </div>
                </div>
                <div class="column people">
                  <div class="content">
                    <div class="img-content">
                      <img src="./img/PL-3.jpg" alt=""  style="width:100%">
                   </div>
                   <div class="text-content">
                    <h2>Tu-22M3</h2>
                    <p>Giá Thuê : <b>500.000 Đ</b></p>
                   </div>
                  </div>
                </div>
              <!-- END GRID -->
              </div>
              <div class="trailer-car">
<h1>Lựa Chọn Máy Bay</h1>
<ul class="uperator-trailer-car">
<li class="list-menu_cars">Jetstar Airwways  được cho là hãng hàng không giá rẻ đầu tiên của Việt nam, trụ sở chính tại sân bay Quốc tế Tân Sơn Nhất – Thành phố Hồ Chí Minh. Jetstar có chỉ số yêu thích từ người dùng tại Việt Nam cực cao (lên tới 80.7% và chỉ xếp sau hãng hàng không quốc gia Vietnam Airlines).</li>
<li class="list-menu_cars"> Vietnam Airlines là cổ đông chiếm tỷ lệ cổ phần lớn nhất trong Pacific Airlines với tỷ lệ nắm giữ cổ phần là 98%. Hãng cũng nắm giữ 49% cổ phần của Cambodia Angkor Air, hãng hàng không quốc gia Campuchia, và 100% cổ phần của VASCO, một hãng bay nhỏ chuyên bay ở khu vực Nam Bộ.

    Hãng đã đạt được danh hiệu 4 sao theo tiêu chuẩn của Skytrax. [5]Vào ngày 10 tháng 6 năm 2010, Vietnam Airlines đã chính thức gia nhập liên minh SkyTeam, trở thành hãng hàng không đầu tiên của Đông Nam Á gia nhập liên minh này </li>
<li class="list-menu_cars">Vietjet Air hay Vietjet, là hãng hàng không tư nhân đầu tiên của Việt Nam. Không chỉ vận chuyển hàng không, Vietjet còn cung cấp các nhu cầu tiêu dùng hàng hoá và dịch vụ thông qua các ứng dụng công nghệ thương mại điện tử. Vietjet là thành viên chính thức của Hiệp hội Vận tải Hàng không Quốc tế (IATA) với Chứng nhận An toàn Khai thác (IOSA).</li>
</ul>
              </div>
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
    <script src="./filejava/loading.js"></script>
    <!-- them duoi nay -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <script>
            var change = 1 ;
            changeimg = function(){
  var imgs = ["./img/thuemaybay.jpg","./img/thuemaybay1.jpg","./img/thuemaybay2.jpg","./img/thuemaybay3.jpg"];
  document.getElementById('img').src = imgs[change];
  change++;
  if(change == 4){
      change = 0 ;
  }
}
setInterval(changeimg,3000);
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