<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/DiemDen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="./filejava/start.js">
    
    <title>Du Lịch Miền Bắc</title>
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
        <div class="content">
            <div class="left testhu">
                <div>
                    <h2 style="color: #2D4271;">Lọc Kết Quả</h2>
                </div>
                <div class="left-text">
                    <h3 >Miền Bắc</h3>
                </div>

                <div>
                    <h4 style="color: #2D4271;">Loại Hình Tour</h4> <br>
                    <select name="LoaiTour" id="">
                        <option value="----------">------Tất Cả-----</option>
                        <option value="Trọn Gói">Tour Trọn Gói</option>
                        <option value="Gia Đình">Tour Gia Đình</option>
                    </select>
                </div>


                <div>
                    <h4 style="color: #2D4271;">Điểm Đi</h4> <br>
                    <select name="Điểm Đến">
                        <option selected="" value="0">--Chọn điểm đến--</option>
                        <option value="99">An Giang</option>
                        <option value="53">Bà Rịa - Vũng Tàu</option>
                        <option value="130">Bắc Kạn</option>
                        <option value="206">Bạc Liêu</option>
                        <option value="33">Bắc Ninh</option>
                        <option value="188">Bến Tre</option>
                        <option value="94">Bình Định</option>
                        <option value="367">Bình Dương</option>
                        <option value="369">Bình Phước</option>
                        <option value="194">Bình Thuận</option>
                        <option value="47">Buôn Ma Thuột</option>
                        <option value="137">Cà Mau</option>
                        <option value="56">Cần Thơ</option>
                        <option value="129">Cao Bằng</option>
                        <option value="192">Côn Đảo</option>
                        <option value="45">Đà Lạt</option>
                        <option value="42">Đà Nẵng</option>
                        <option value="341">Đắk Nông</option>
                        <option value="187">Điện Biên</option>
                        <option value="52">Đồng Nai</option>
                        <option value="199">Đồng Tháp</option>
                        <option value="108">Nghệ An</option>
                        <option value="135">Hà Giang</option>
                        <option value="32">Hạ Long</option>
                        <option value="361">Hà Nam</option>
                        <option value="29">Hà Nội</option>
                        <option value="59">HÀ TIÊN</option>
                        <option value="195">Hà Tĩnh</option>
                        <option value="30">Hải Phòng</option>
                        <option value="363">Hòa Bình</option>
                        <option value="380">HÒN SƠN</option>
                        <option value="39">Huế</option>
                        <option value="193">Kiên Giang</option>
                        <option value="48">Kon Tum</option>
                        <option value="37">Lạng Sơn</option>
                        <option value="38">Lào Cai</option>
                        <option value="214">Long An</option>
                        <option value="232">Nam Định</option>
                        <option value="44">Nha Trang</option>
                        <option value="35">Ninh Bình</option>
                        <option value="106">Ninh Thuận</option>
                        <option value="49">Pleiku</option>
                        <option value="51">Phan Thiết</option>
                        <option value="54">Phú Quốc</option>
                        <option value="34">Phú Thọ</option>
                        <option value="121">Phú Yên</option>
                        <option value="41">Quảng Bình</option>
                        <option value="198">Quảng Ngãi</option>
                        <option value="43">Quảng Nam</option>
                        <option value="196">Quảng Ninh</option>
                        <option value="40">Quảng Trị</option>
                        <option value="141">Quy Nhơn</option>
                        <option value="58">Sóc Trăng</option>
                        <option value="134">Sơn La</option>
                        <option value="203">Tây Ninh</option>
                        <option value="55">Tiền Giang</option>
                        <option value="197">TP. Hồ Chí Minh</option>
                        <option value="213">Trà Vinh</option>
                        <option value="377">Tuyên Quang</option>
                        <option value="233">Thái Bình</option>
                        <option value="133">Thanh Hóa</option>
                        <option value="57">Vĩnh Long</option>
                        <option value="202">Vĩnh Phúc</option>
                        <option value="231">Yên Bái</option>
                    </select>
                </div>

                <div class="NgayDi">
                    <h4 style="color: #2D4271;">Số Ngày</h4>
                    <div>
                        <button class="btn_ngaydi1 daaaa" onclick="clikthongbao()">1-3 Ngày</button>
                        <button  class="btn_ngaydi2 daaaa"  onclick="clikthongbao1()">4-7 Ngày</button>
                    </div>
                    <div>
                        <button  class="btn_ngaydi3 daaaa"  onclick="clikthongbao2()">8-14 Ngày</button>
                        <button  class="btn_ngaydi4 daaaa"  onclick="clikthongbao3()">Trên 14 ngày</button>
                    </div>
                </div>

                <div class="NgayDi">
                    <h4 style="color: #2D4271;">Ngày Đi</h4>
                    <input type="date" id="myDate">
                    <script>
                        // Lấy ngày hiện tại
                        var today = new Date();

                        // Định dạng ngày theo chuẩn ISO 8601
                        var isoDate = today.toISOString().substring(0, 10);

                        // Gán giá trị cho input type date
                        document.getElementById("myDate").value = isoDate;
                    </script>
                </div>

                <div class="SoNguoi">
                    <h4 style="color: #2D4271;">Loại Phòng</h4>
                    <div>
                        <button  class="btn_ngaydi5 daaaa"  onclick="clikthongbao4()">1-2 Sao</button>
                        <button class="btn_ngaydi6 daaaa"  onclick="clikthongbao6()">3 Sao</button>
                    </div>
                    <div>
                        <button class="btn_ngaydi7 daaaa"  onclick="clikthongbao5()">4 Sao</button>
                        <button class="btn_ngaydi8 daaaa"  onclick="clikthongbao7()">5 Sao</button>
                    </div>
                </div>


                <div class="LoaiTour">
                    <h4 style="color: #2D4271;">Dòng Tour</h4>
                    <div>
                        <button class="btn_ngaydi9 daaaa"  onclick="clikthongbao8()">Cao Cấp</button>
                        <button class="btn_ngaydi10 daaaa"  onclick="clikthongbao9()">Tiêu Chuẩn</button>
                    </div>
                    <div>
                        <button class="btn_ngaydi11 daaaa"  onclick="clikthongbao10()">Tiết Kiệm</button>
                        <button class="btn_ngaydi12 daaaa"  onclick="clikthongbao11()">Giá Tốt</button>
                    </div>
                </div>

            </div>

            <div class="right testhu">
                <h1 style="color: #2D4271; text-align: center;">Du lịch Miền Bắc</h1>
                <hr>
                <p>Miền Bắc Việt Nam gồm Tây Bắc, Đông Bắc và đồng bằng Sông Hồng, là cái nôi văn hóa lịch sử hàng ngàn năm của Việt Nam. Thiên nhiên và cảnh đẹp hùng vĩ, 4 mùa xuân hạ thu đông, miền Bắc luôn là điểm hẹn hấp dẫn cho ta trở lại nhiều lần.</p>

                <div class="first">
                    <div class="Tour1">
                        <img src="./img/MB1.jpg" alt="">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">05/05/2023 - 7N6Đ - Giờ đi: 17:45</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Tây Bắc: Hà Nội - Nghĩa Lộ - Tú Lệ - Mù Cang Chải - Sapa - Fansipan - Lai Châu - Điện Biên - Sơn La - Mộc Châu Island</a></B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN1731-059-050523VU</p>
                                <p>Nơi Khởi Hành: <b>Hà Nội</b></p>
                                <p><b style="color: #FD5056;">12,990,000₫</b></p>
                            </div>

                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                            </div>
                            <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">10</b></p> -->
                        </div>
                    </div>


                    <div class="Tour2">
                        <img src="./img/MB2.jpg" alt="">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">04/05/2023 - 4N3Đ - Giờ đi: 17:45</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Đông Bắc: Hà Nội - Hà Giang - Lũng Cú - Đồng Văn - Mã Pí Lèng - Mèo Vạc - Cao Bằng - Thác Bản Giốc - Hồ Ba Bể </a></B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN1521-029-050523VU-V</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                <p><b style="color: #FD5056;">10,790,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                            </div>
                            <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">17</b></p> -->
                        </div>
                    </div>


                    <div class="Tour3">
                        <img src="./img/HN3.jpg" alt="">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">23/7/2023-2N1D-Giờ đi: 05:00</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Liên Tuyến Trung Bắc: Đà Nẵng-
                                        Động Phong Nha & Thiên Đường - Hà Nội </B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN397-001-090523-V-7</p>
                                <p>Nơi Khởi Hành: <b>Đà Nẵng</b></p>
                                <p><b style="color: #FD5056;">6,990,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                            </div>
                            <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">12</b></p> -->
                        </div>
                    </div>
                </div>


                <div class="second">
                    <div class="Tour4">
                        <img src="./img/MB3.jpg" alt="" width="100%">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">12/6/2023-3N2D-Giờ đi:1:00</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Sapa - Fansipan - Hà Nội - Yên Tử - Hạ Long - Ninh Bình - Tràng An - Bái Đính - Tuyệt Tịnh Cốc</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN187-028-090523VN-V</p>
                                <p>Nơi Khởi Hành: <b>SaPa</b></p>
                                <p><b style="color: #FD5056;">8,990,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="Tour5">
                        <img src="./img/MB4.jpg" alt="" width="100%">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">09/12/2023 - 6N5Đ - Giờ đi: 17:45</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Miền Bắc: Hà Nội - Suối Giàng - Tú Lệ - Mù Cang Chải - Sơn La - Mộc Châu - Mai Châu</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDLUXSGN102-004-0905</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                <p><b style="color: #FD5056;">25,990,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                            </div>
                        </div>
                    </div>


                    <div class="Tour6">
                        <img src="./img/MB5.jpg" alt="" width="100%">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">1/6/2023-5N4D-Giờ đi: 15:00</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Đông Bắc: Hà Nội - Hà Giang - Đồng Văn - Mã Pí Lèng - Cột Cờ Lũng Cú - Đi Thuyền Sông Nho Quế</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN168-005-100523VN-V</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                <p><b style="color: #FD5056;">11,000,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="./chitiet.php">Xem chi tiết</a></button>
                            </div>
                        </div>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
  $(window).scroll(function(){
      if($(this).scrollTop()){
          $(".header-above").addClass('sticky');
      }
      else{
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