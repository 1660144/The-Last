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
            <?php
                require_once "menu.php";
            ?>
        </div>
    </div>
    <div class="menu1 ">
        <ul>
            <li><a href="index.php"><i class="fa fa-home" style="font-size:25px;color:#999"></i></a></li>
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
                                <input type="button" class="btn">
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
                                <input type="button" class="btn">
                                    <i class="fa fa-trash" style="font-size:20px; color:red"></i>
                                </input>
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
        <?php
            require_once "infor.php";
        ?>
    </div>
    <!-- kết thúc thẻ thông tin liên hệ -->
    <?php
        require_once "footer.php";
    ?>
    </div>
</body>

</html>