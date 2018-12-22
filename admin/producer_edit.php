<?php
    require_once "./lib/db.php";
	$show_alert = 0;
	$id = $_GET["id"];

	if (!isset($_GET["id"])) {
		header('Location: producer.php');
	}

	if (isset($_POST["btnUpdate"])) {
		$u_id = $_POST["txtId"];
		$u_name = $_POST["txtTenH"];

		$u_sql = "update hangsanxuat set TenHang = '$u_name' where MaHang = $u_id";
		write($u_sql);
		$show_alert = 1;
	}

	if (isset($_POST["btnDelete"])) {
		$d_id = $_POST["txtId"];
		$d_sql = "delete from hangsanxuat where Id = $d_id";
		write($d_sql);
		header('Location: producer.php');
	}


	
	$sql = "SELECT * from hangsanxuat join loaisanpham on LoaiSanPham = MaLoaiSanPham  WHERE MaHang = $id";
	$rs = load($sql);
	$name = "";
	while ($row = $rs->fetch_assoc()) {
		$mh = $row["MaHang"];
		$th = $row["TenHang"];
		$ml = $row["TenLoaiSanPham"];
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhà Sản Xuất</title>
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
                    <div class="admin-content-sidebar">                              
                          <?php
                                require_once "sidebar.php";
                          ?>               
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="admin-content-content">
                        <div class="head">
                        <?php require_once "head.php"
                            ?>
                        </div>
                        <!-- kết thúc thẻ head -->
                        <div class="menu container-fluid">
                            <ul>
                                <li>
                                    <a href="index.php"></i>
                                        Dashboard </a>
                                </li>
                                <li>
                                    <a>/</a>
                                </li>
                                <li>
                                    <a href="#">BlankPage</a>
                                </li>
                            </ul>
                        </div>
                        <!-- kết thúc thẻ content -->
                        <div class="content">
                            <div class="content-head">
                                <div class="content-content">
                                <h2>Nhà Sản Xuất</h2>
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
						<label for="txtId">Mã Hãng</label>
						<input type="text" class="form-control" id="txtId" name="txtId" readonly value="<?= $mh ?>">
					</div>
					<div class="form-group">
						<label for="txtTenH">Tên Hãng</label>
						<input type="text" class="form-control" id="txtTenH" name="txtTenH"  value="<?= $th ?>">
					</div>
					<div class="form-group">
						<label for="txtL">Loại Sản Phẩm</label>
						<input type="text" class="form-control" id="txtL" name="txtL" readonly value="<?= $ml ?>">
					</div>
					<a class="btn btn-primary" href="producer.php" role="button" title="Về thôi">
						<span class="glyphicon glyphicon-backward"></span>
					</a>
					<button type="submit" class="btn btn-success" name="btnUpdate">
						<span class="glyphicon glyphicon-check"></span>
						Chỉnh sửa
					</button>
					<button type="submit" class="btn btn-danger" name="btnDelete">
						<span class="glyphicon glyphicon-remove"></span>
						Xoá luôn
					</button>
					</form>
                                </div>                
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