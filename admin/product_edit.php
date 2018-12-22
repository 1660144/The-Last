<?php
	require_once './lib/db.php';

	$show_alert = 0;
	$id = $_GET["id"];

	if (!isset($_GET["id"])) {
		header('Location: product.php');
	}

	if (isset($_POST["btnUpdate"])) {
		$u_id = $_POST["txtId"];
		$u_name = $_POST["txtTenSP"];
		$u_nn = $_POST["txtNN"];
		$u_mt = $_POST["txtMoTa"];
		$u_xx = $_POST["txtXX"];
		$u_sl = $_POST["txtSoLuong"];
		
		$u_sql = "update sanpham set TenSP = '$u_name', NgayNhap = '$u_nn', MoTa = '$u_mt', XuatXu = '$u_xx', SoLuong = '$u_sl' where Id = $u_id";
		write($u_sql);
		$show_alert = 1;
	}

	if (isset($_POST["btnDelete"])) {
		$d_id = $_POST["txtId"];
		$d_sql = "delete from sanpham where Id = $d_id";
		write($d_sql);
		header('Location: product.php');
	}


	
	$sql = "SELECT * from sanpham join hangsanxuat on hangsanxuat.MaHang=sanpham.NhaSanXuatId join loaisanpham on loaisanpham.MaLoaiSanPham=sanpham.LoaiSP WHERE sanpham.id = $id";
	$rs = load($sql);
	$name = "";
	while ($row = $rs->fetch_assoc()) {
		$name = $row["TenSP"];
		$gia = $row["Gia"];
		$mt = $row["MoTa"];
		$nn = $row["NgayNhap"];
		$sl = $row["SoLuong"];
		$lsp = $row["TenLoaiSanPham"];
		$nsx = $row["TenHang"];
		$xx = $row["XuatXu"];
	}

	// if (isset($_POST["btnAdd"])) {
	// 	$name = $_POST["txtCatName"];
	// 	$sql = "insert into categories(CatName) values('$name')";
	// 	write($sql);

	// 	$show_alert = 1;
	// }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh sửa sản phẩm</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/admin.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class=" admin-page container-fluid">
		<div class="admin-content">
            <div class="row">
                <div class="col-md-2">
                    <div class="admin-content-sidebar">                              
                          <?php
                                require_once "sidebar.php";
                          ?>               
                    </div>
                </div>
		
				<div class="col-md-10">
					<div class="admin-content-content">
						<div class="head">
                            <?php require_once "head.php"
                            ?>
						</div>
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
								<?php if ($show_alert == 1) : ?>
					<div class="alert alert-success" role="alert">
						<strong>Well done!</strong> You successfully read this important alert message.
					</div>
					<?php endif; ?>
					<form method="post" action="" name="frmEdit">
						<div class="form-group">
						<label for="txtId">#</label>
						<input type="text" class="form-control" id="txtId" name="txtId" readonly value="<?= $id ?>">
					</div>
					<div class="form-group">
						<label for="txtTenSP">Tên Sản Phẩm</label>
						<input type="text" class="form-control" id="txtTenSP" name="txtTenSP"  value="<?= $name ?>">
					</div>
					<div class="form-group">
						<label for="txtNN">Ngày nhập</label>
						<input type="text" class="form-control" id="txtNN" name="txtNN" value="<?= $nn ?>">
					</div>
					<div class="form-group">
						<label for="txtMoTa">Mô tả</label>
						<input type="text" class="form-control" id="txtMoTa" name="txtMoTa"  value="<?= $mt ?>">
					</div>
					<div class="form-group">
						<label for="txtXX">Xuất Xứ</label>
						<input type="text" class="form-control" id="txtXX" name="txtXX"  value="<?= $xx ?>">
					</div>
					<div class="form-group">
						<label for="txtSoLuong">Số Lượng</label>
						<input type="text" class="form-control" id="txtSoLuong" name="txtSoLuong"  value="<?= $sl ?>">
					</div>
					<div class="form-group">
						<label for="selNSX">Hãng Sản Xuất</label>
						<input type="text" class="form-control" id="selNSX" name="selNSX" readonly value="<?= $nsx ?>">
					</div>
					<div class="form-group">
						<label for="selLoai">Loại Sản Phẩm</label>
						<input type="text" class="form-control" id="selLoai" name="selLoai" readonly value="<?= $lsp ?>">
					</div>
					<a class="btn btn-primary" href="product.php" role="button" title="Về thôi">
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
		</div>
	</div>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function() {
		    $('#txtCatName').focus();
		});
	</script>
</body>
</html>