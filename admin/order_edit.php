<?php
     require_once './lib/db.php';
     $show_alert = 0;
     $id = $_GET["id"];

     if (isset($_POST["btnUpdate"])) {
		$u_id = $_POST["txtId"];
		$u_tt = $_POST["txtTT"];
        echo $u_id;
		$u_sql = "update dathang set TinhTrang = '$u_tt' where Id = $id";
		write($u_sql);
		$show_alert = 1;
    }

    $sql = "SELECT * from dathang WHERE Id = $id";
	$rs = load($sql);
	while ($row = $rs->fetch_assoc()) {
		$user = $row["UserId"];
		$tt = $row["TinhTrang"];
		$ng= $row["NgayDuKienGiaoHang"];
	}

?>
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
    <div class="admin-page container-fluid">
        <div class="admin-content">
            <div class="row">
                <div class="col-sm-2">
                    <?php
                    require_once "sidebar.php";
                    ?>
                </div>
                <div class="col-sm-10">
                    <div class="admin-content-content">
                        <div class="head">
                            <?php
                            require_once "head.php";
                            ?>
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
                                    <a href="#">Quản lý đơn hàng</a>
                                </li>
                            </ul>
                        </div>
                        <!-- kết thúc thẻ content -->
                        <div class="content container-fluid">
                            <div class="content-content">
                                <h2>Đơn Hàng</h2>
                                <hr>
                                <?php 
                                    if ($show_alert == 1) : 
                                     
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <?php endif; ?>
                                <form method="post" action="" name="frmEdit">
                                    <div class="form-group">
                                        <label for="txtId">Mã người đặt hàng</label>
                                        <input type="text" class="form-control" id="txtId" name="txtId" readonly value="<?=$user ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtTT">Tình Trạng</label>
                                        <input type="text" class="form-control" id="txtTT" name="txtTT"  value="<?=$tt  ?>">
                                    </div>
                                    <button type="submit" class="btn btn-success" name="btnUpdate">
                                        <span class="glyphicon glyphicon-check"></span>
                                        Chỉnh sửa
                                    </button>
                                </form>
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