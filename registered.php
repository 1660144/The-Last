<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang Chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="page ">
        <div class="head">
            
        <?php
                    require_once "head.php";
                   ?>   
        </div>

        <div class="search">
             <?php
                require_once "search.php";
            ?>  
        </div>
        <div class="menu">
            <?php
                require_once "menu.php";
            ?> 
        </div>
    </div>
    <div class="menu1 ">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" style="font-size:25px;color:#999"></i></a></li>
                <li>/</li>
                <li>Đăng Ký</li>
            </ul>
    </div>


    <div class="register container  ">
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3 form">
                <form action="#" method="post">
                    <h1>ĐĂNG KÝ</h1>
                    <br><br>
                    <div class="form-group text-left">
                        <label class="control-label " for="username">
                            Username
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fa fa-user"></span>
                            </div>
                            <input class="form-control" id="username" name="username" placeholder="Nhập Username" type="text" />
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <label class="control-label " for="Password">
                            Password
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fa fa-lock"></span>
                            </div>
                            <input class="form-control" id="password" name="password" placeholder="Nhập Password" type="password" />
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <label class="control-label " for="repass">
                            Nhập Lại Password
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fa fa-lock"></span>
                            </div>
                            <input class="form-control" id="repass" name="repass" placeholder="Nhập lại mật khẩu lần nữa"
                                type="password" />
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <label class="control-label " for="email">
                            Email
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <input class="form-control" id="email" name="email" placeholder="Email" type="text" />
                        </div>
                    </div>
                    <div class="form-group  text-left">
                        <label class="col-md-4 control-label">Captcha:</label>
                        <div class="g-recaptcha" data-sitekey="Add Your Site Key"></div>
                    </div>
                    <br>
                    <div class="form-group  text-left">
                        <label class="checkbox-inline"><input type="checkbox" requi#999="requi#999"> Tôi đồng ý với <a
                                href="#">Các Điều Khoản</a> &amp; <a href="#">Chính Sách Bảo Mật</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn  btn-block btn-lg" value="Đăng Ký">
                    </div>
                </form>
            </div>
        </div>
    </div><br>

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