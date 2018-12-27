<?php
    require_once "./lib/db.php";
    session_start();
    require_once "cart.inc.php";
   
    if (!isset($_SESSION["dang_nhap_chua"])) {
		$_SESSION["dang_nhap_chua"] = 0;
    }
    
    $name = $_GET["name"];
    if (isset($_POST["btnLuu"]))
    {
 
        $u_name = $_POST["txtUsername"];
        $u_pass = $_POST["txtPassword"];
        $u_email = $_POST["txtEmail"];
        $u_tenht = $_POST["txtUser"];
        $u_sdt = $_POST["txtPhone"];
        $u_dc = $_POST["txtAdd"];
        $u_sql = "update taikhoan set TenDangNhap = '$u_name', Email = '$u_email',DiaChi = '$u_dc',  TenHienThi = '$u_tenht', MatKhau = '$u_pass', DienThoai = $u_sdt where TenHienThi like '$name'";
		write($u_sql);
		$show_alert = 1;
    }

        $name=$_GET["name"];
        $sql = "select * from taikhoan where TenHienThi like '$name' ";
        $rs = load($sql);
        while ($row = $rs->fetch_assoc()) {
            $ma = $row["MaTaiKhoan"];
            $tdn = $row["TenDangNhap"] ;    
            $mk = $row["MatKhau"] ;
            $email = $row["Email"] ;
            $tht = $row["TenHienThi"] ;
            $sdt = $row["DienThoai"] ;
            $dc = $row["DiaChi"] ;       
        }
        
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thông tin người dùng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css" type="text/css">
    <link rel="shortcut icon"  href="favicon1.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         ul.cols.cols-5 {
    clear: both;
    display: block;
    background: #fff;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    flex: 1 100%;
    margin-bottom: 15px;
} 
ul.cols {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
}
/* ul, ol {
    list-style: none;
} */
ul.cols-5 > li {
    width: 20%;
}
.lt-product-group ul.cols li {
    background: #fff;
    border: solid 1px #eee;
    position: relative;
    border-left: none;
    border-top: none;
    height: 290px;
} 
ul.cols > li {
    box-sizing: border-box;
    display: block;
    float: left;
} 
/* ul.cols li a:hover{
    text-decoration: none;
}*/

    </style>
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
        <div class="personal-infor">
            <div class="row">
                <div class="col-sm-4 col-xs-4 ">
                    <ul>
                        <a href=""><li class="text-center"><img class="img-thumbnail" src="img/avatar.png" style="width:50%;" ></li></a>
                        <a href=""><li><i class="fa fa-home" style="font-size:25px"> </i>
                        Người dùng</li>
                        </a>
                        <a href=""><li><i class="fa fa-user" style="font-size:20px;"></i>
                        
                        Địa chỉ</li></a>
                        <a href=""><li><i class="fa fa-shopping-cart"style="font-size:20px;"></i>
                        Giỏ hàng</li>
                        </a>


                    </ul>
                </div>
                <div class="col-sm-8 col-xs-8">
                    <?php 
                        if ($show_alert == 1) :                                 
                    ?>
					<div class="alert alert-success" role="alert">
						<strong>Success!</strong> Cập nhập thông tin thành công.
					</div>
					<?php endif; ?>
                    <h2>Thông tin người dùng</h2>
                    <hr>
                    <form method="post">
                        <div class="form-group">
                            <label for="txtId">Mã</label>
                            <input type="text"  class="form-control" id="txtId" name="txtId" readonly value="<?=$ma?>">
                        </div>
                        <div class="form-group">
                            <label for="txtUsername">Tên đăng nhập</label>
                            <input type="text"  class="form-control" id="txtUsername" name="txtUsername"  value="<?=$tdn?>">
                        </div>
                        <div class="form-group">
                            <label for="txtPassword">Mật khẩu</label>
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword"   value="<?=$mk?>">
                        </div>
                        <div class="form-group">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail"  value="<?=$email?>">
                        </div>
                        <div class="form-group">
                            <label for="txtUser">Tên Hiển Thị</label>
                            <input type="text" class="form-control" id="txtUser" name="txtUser"  value="<?=$tht?>">
                        </div>
                        <div class="form-group">
                            <label for="txtPhone">Số Điện Thoại </label>
                            <input type="text" class="form-control" id="txtPhone" name="txtPhone"   value="<?=$sdt?>">
                        </div>
                        <div class="form-group">
                            <label for="txtAdd">Địa Chỉ</label>
                            <input type="text" class="form-control" id="txtAdd" name="txtAdd"   value="<?=$dc?>">
                        </div>
                        <div>   
                            <button type="submit" class="btn btn-success" name="btnLuu">
                                <span class="glyphicon glyphicon-check"></span>
                                Lưu
                            </button>            
                        </div>
                    </div>
                        </form>
                </div>
            <!-- kết thúc row -->  
        </div><br><br>
        <!-- kết thúc content -->
        <div class="info">
               <?php
                require_once "infor.php"?>
               ?>
         </div>
            <!-- kết thúc thẻ thông tin liên hệ -->


        <footer class="container-fluid text-center">
            <p style="color:white">&copy; 2018 MOBILE STORE | Design by team The Last</p>
        </footer>
    </div>
    
</body>

</html>