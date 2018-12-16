<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* .admin-head li{
            list-style: none !important;
        } */
    </style>
</head>

<body>
    <div class="admin-page">
        <div class="admin-content">
            <div class="row">
                <div class="col-sm-2">
                    <div class="admin-content-sidebar">
                        <h2 class="text-center"><i class="fa fa-buysellads text-left" style="font-size:40px;"
                                aria-hidden="true"></i>
                            ADMIN</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-tachometer" style="font-size:18px;" aria-hidden="true"></i>
                                    Dashboard</a>

                                </a>
                            </li>
                            <li>
                                <a href="#collapse1" data-toggle="collapse" data-parent="#accordion"><i class="fa fa-list"
                                        style="font-size:18px;"></i>
                                    </i>Quản lý sản phẩm
                                </a>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <ul>
                                        <li>
                                            <a href="product.html">Sản phẩm</a>
                                        </li>
                                        <li>
                                            <a href="category.html">Loại sản phẩm</a>
                                        </li>
                                        <li>
                                            <a href="producer.html">
                                                Nhà Sản Xuất
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="order.html"><i class="fa fa-shopping-cart" style="font-size:18px"></i>
                                    Quản lý đơn hàng
                                </a>
                            </li>
                            <li>
                                <a href="../index.html"><i class="fa fa-sign-out" style="font-size:18px"></i></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="admin-content-content">
                        <div class="head">
                            <div class="head-menu text-right">
                                <div class="head-img">
                                    <img src="img/ava.jpg" style="width: 50px;">
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
                                    <spnan class="caret"></spnan>
                                    <ul class="dropdown-menu">
                                        <li><a href="../index.html">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- kết thúc thẻ head -->
                        <div class="menu container-fluid">
                            <ul>
                                <li>
                                    <a href="index.html"></i>
                                        Dashboard </a>
                                </li>
                                <li>
                                    <a>/</a>
                                </li>
                                <li>
                                    <a href="#">Sản Phẩm</a>
                                </li>
                            </ul>
                        </div>
                        <!-- kết thúc thẻ content -->
                        <div class="content container-fluid">
                            <div class="content-content">
                                <h2>Sản Phẩm</h2>
                                <hr>
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên Loại Sản Phẩm</th>
                                            <th>Số Lượng</th>            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Samsung Galaxy S6</td>
                                            <td>12.799.000đ</td>                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Samsung Galaxy S6</td>
                                            <td>12.799.000đ</td>                                           
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Samsung Galaxy S6</td>
                                            <td>12.799.000đ</td>                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--kết thúc row  -->
        </div>
        <!-- ket thuc row -->

        <div class="footer text-center">
            <p style="color:white">&copy; 2018 MOBILE STORE | Design by team The Last</p>
        </div>
    </div>

</body>

</html>