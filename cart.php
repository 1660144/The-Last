<?php
      session_start();
      if (!isset($_SESSION["dang_nhap_chua"])) {
          $_SESSION["dang_nhap_chua"] = 0;
      }
?>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="page ">
        <div class="head">
            <div class="row text-center">
                <!-- <div class="col-sm-6 col-xs-6">
                    
                </div> -->
                <div class="col-sm-4 col-xs-4 col-sm-offset-6 text-center">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="registered.html">
                                <i class="fa fa-user" style="font-size:15px"></i>
                                Đăng Ký
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="glyphicon glyphicon-log-in"></i>
                                Đăng nhập</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 col-xs-2">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="cart.html">
                                <i class="fa fa-shopping-cart" style="font-size:15px"></i>
                                Giỏ hàng
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="search">
            <div class="container">
                <div class="row text-center">
                    <div class=" height col-sm-4 ">
                        <i class="fa fa-phone" style="font-size:25px"></i>
                        <i>Call: 0123 456 789</i>
                    </div>
                    <div class="height col-sm-4">
                        <a href="index.html" style="font-size:45px; color:black"><b>MOBILE STORE</b></a>
                    </div>
                    <div class="col-sm-4">
                        <div class="search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control " placeholder="Bạn muốn tìm gì..." requi#999>
                                    <div class="input-group-btn">
                                        <button type="button" class="btn" style="background-color: #999">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <i class="fa fa-home" style="font-size:25px"></i>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ĐIỆN THOẠI
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Xem tất cả</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">APPLE</a></li>
                                    <li><a href="#">SAMSUNG</a></li>
                                    <li><a href="#">ASUS</a></li>
                                    <li><a href="#">OPPO</a></li>
                                    <li><a href="#">HUAWEI</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">TABLET<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Xem tất cả</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Ipad Pro</a></li>
                                    <li><a href="#">Ipad 9.7</a></li>
                                    <li><a href="#">Ipad Air</a></li>
                                    <li><a href="#">Ipad Mini</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PHỤ KIỆN<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Xem tất cả</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Phụ Kiện Iphone,Ipad</a></li>
                                    <li><a href="#">Sạc Dự Phòng</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">LAPTOP<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Xem tất cả</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">MACBOOK</a></li>
                                    <li><a href="#">DELL</a></li>
                                    <li><a href="#">HP</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ÂM THANH<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Xem tất cả</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Loa</a></li>
                                    <li><a href="#">Tai Nghe</a></li>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">Bose</a></li>
                                    <li><a href="#">Anker</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="menu1 ">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" style="font-size:25px;color:#999"></i></a></li>
            <li>/</li>
            <li>Giỏ Hàng</li>
        </ul>
    </div>
    <hr>
    <div class="cart">
        <p style="font-size:25px">GIỎ HÀNG </p>
        <hr>
        <div class="row">
            <div class="col-sm-8">

                <table class="table table-striped w-auto ">
                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>Giá</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>
                        <tr class="table-info ">
                            <td>1</td>
                            <td>
                                <a href="#">
                                    <img src="img/dienthoai/samsung/samsung2.jpg" style="width: 30%">
                                </a>
                            </td>
                            <td>Samsung</td>
                            <td>
                                
                                    <div class="quality">
                                        <button class="btn" type="button" style="background-color:#cccccc">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input type="text" value="1" size="1px;" class="form-control">
                                        <button class="btn" type="button" style="background-color:#cccccc">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                
                            </td>
                            <td>
                                19.699.000đ
                            </td>
                            <td>
                                <intput type="button" class="btn">
                                    <i class="fa fa-trash" style="font-size:20px; color:red"></i>

                            </td>

                        </tr>
                        <tr class="table-info ">
                            <td>1</td>
                            <td>
                                <a href="#">
                                    <img src="img/dienthoai/samsung/samsung2.jpg" style="width: 30%">
                                </a>
                            </td>
                            <td>Samsung</td>
                            <td>
                                <div class="quality">
                                    <button class="btn" type="button" style="background-color:#cccccc">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input type="text" value="1" size="1px;" class="form-control">
                                    <button class="btn" type="button" style="background-color:#cccccc">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                19.699.000đ
                            </td>
                            <td>
                                <intput type="button" class="btn">
                                    <i class="fa fa-trash" style="font-size:20px; color:red"></i>
                                </intput>
                            </td>
                        </tr>
                    </tbody>
                    <!--Table body-->
                </table>
            </div>
            <div class="col-sm-4">
                <table class="table table-hover table-striped">
                    <tr>
                        <td>Thành Tiền: </td>
                        <td>
                            <b style="font-size:30px;color:#999" class="text-right">19.699.000đ</b>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="info">
        <div class="jumbotron text-left">
            <div class="row ">
                <div class="col-sm-3 col-xs-3">
                    <ul class="diachi">
                        <p>Liên hệ</p>
                        <li>

                            <span>123 District 1</span>
                        </li>
                        <li>

                            <span> <a href="#">thelast@gmail.com</a></span>
                        </li>
                        <li>

                            <i>123 456 789</i>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <ul class="thongtin">
                        <p>Thông tin hỗ trợ</p>
                        <li>
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="#">Chính sách bản hành</a>
                        </li>
                        <li>
                            <a href="#">Tuyển dụng</a>
                        </li>
                        <li>
                            <a href="#">Mua hàng - thanh toán Online</a>
                        </li>
                        <a href="#" class="atm-visa" title="Thẻ Visa">
                            <img src="img/atm-visa-v/visa.png">
                        </a>
                        <a href="#" class="atm-visa" title="Thẻ ZaloPay">
                            <img src="img/atm-visa-v/zalopay.png">
                        </a>

                        <a href="#" class="atm-visa" title="Thẻ Vietinbank">
                            <img src="img/atm-visa-v/vietibank.png">
                        </a>
                        <a href="#" class="atm-visa" title="Trả Góp">
                            <img src="img/atm-visa-v/tragop.png">
                        </a>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <ul class="thongtin">
                        <p>Danh Mục</p>
                        <li>
                            <a href="#">
                                ĐIỆN THOẠI</a>
                        </li>
                        <li>
                            <a href="#">

                                TABLET
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                PHỤ KIỆN</a>
                        </li>
                        <li>
                            <a href="#">
                                LAPTOP</a>
                        </li>
                        <li>
                            <a href="#">
                                ÂM THANH</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <ul class="thongtin">
                        <p>Cá Nhân</p>
                        <li>
                            <a href="product.html">
                                Cửa hàng</a>
                        </li>
                        <li>
                            <a href="cart.html">

                                Giỏ hàng của tôi
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                Đăng nhập</a>
                        </li>
                        <li>
                            <a href="registered.html">
                                Đăng Ký Tài Khoản</a>
                        </li>
                        <li>
                            <a href="http://facebook.com"><i class="fa fa-facebook-square" style="font-size:25px"></i></a>
                            <a href="http://twitter.com"><i class="fa fa-twitter-square" style="font-size:25px"></i></a>
                            <a href="http://tumblr.com"><i class="fa fa-tumblr-square" style="font-size:25px"></i></a>
                            <a href="http://instagram.com"><i class="fa fa-instagram" style="font-size:25px"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- kết thúc thẻ thông tin liên hệ -->
    <footer class="container-fluid text-center">
        <p style="color:white">&copy; 2018 MOBILE STORE | Design by team The Last</p>
    </footer>
    </div>
    <script>
        $('.navbar .dropdown').hover(function () {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
        });
    </script>
</body>

</html>