<?php
require_once "./lib/db.php";
    session_start();
    if (!isset($_SESSION["dang_nhap_chua"])) {
		$_SESSION["dang_nhap_chua"] = 0;
	}


    if(isset($_POST["dangky"]))
    {
        $username= $_POST["userame"];
        $password = $_POST["password"];

        $sql = "select * from taikhoan where TenDangNhap = '$username' and MatKhau = '$password'";
       // $result = mysqli_query($conn, $sql);      
       $rs = load($sql);
		if ($rs->num_rows > 0) {
			$_SESSION["current_user"] = $rs->fetch_object();
			$_SESSION["dang_nhap_chua"] = 1;
			header("Location: index.php");
        } 
        else {
			echo '<script language="javascript">';
            echo 'alert("Tài khoản không tồn tại! Vui lòng đăng nhập lại")';
            echo '</script>';
		}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang Chủ</title>
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
            <?php require_once "menu.php";
            ?>
        </div>
    </div>
    <div class="menu1 ">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" style="font-size:25px;color:#999"></i></a></li>
                <li>/</li>
                <li>Đăng Nhập</li>
            </ul>
    </div>


    <div class="register container ">
        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3 form">
                <form action="" method="post">
                    <h1>ĐĂNG NHẬP</h1>
                    <br><br>
                    <div class="form-group text-left">
                        <label class="control-label " for="email">
                            Tên Đăng Nhập
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="fa fa-user"></span>
                            </div>
                            <input class="form-control" id="username" name="userame" placeholder="Nhập Username" type="text" />
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
                        <label class="checkbox-inline "><input type="checkbox" require="require">Remember me</label>
                    </div>
                    <div class="form-group">
                        <a href="index.php">
                            <input type="submit" class="btn btn-block btn-lg" name="dangky" value="Đăng Ký">
                        </a>
                    </div>
                    <div class="form-group text-left">
                        <label class="checkbox-inline ">
                            <input type="checkbox" require="require"><a href="#">Quên Mật Khẩu</a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div><br>
    <div class="info">
    <?php
        require_once "infor.php";
        ?>
    </div>
    <!-- kết thúc thẻ thông tin liên hệ -->


    <footer class="container-fluid text-center">
        <p style="color:white">&copy; 2018 MOBILE STORE | Design by team The Last</p>
    </footer>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span>To Top</a>
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