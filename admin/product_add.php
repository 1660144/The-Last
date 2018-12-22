<?php
	require_once './lib/db.php';

	$show_alert = 0;


	// if (isset($_POST["btnUpdate"])) {
	// 	$u_id = $_POST["txtCatID"];
	// 	$u_name = $_POST["txtCatName"];
	// 	$u_sql = "update sanpham set TenSP = '$u_name' where Id = $u_id";
	// 	write($u_sql);
	// 	$show_alert = 1;
	// }

	// if (isset($_POST["btnDelete"])) {
	// 	$d_id = $_POST["txtCatID"];
	// 	$d_sql = "delete from sanpham where Id = $d_id";
	// 	write($d_sql);
	// 	header('Location: product.php');
	// }


	//$id = $_GET["id"];
	// $sql = "select * from sanpham where Id = $id";
	// $rs = load($sql);
	// $name = "";
	// while ($row = $rs->fetch_assoc()) {
	// 	$name = $row["TenSP"];
	// }

	// if (isset($_POST["btnAdd"])) {
	// 	$name = $_POST["txtCatName"];
	// 	$sql = "insert into sanpham(TenSP) values('$name')";
	// 	write($sql);

	// 	$show_alert = 1;
	// }
	$show_alert = 0;
	if (isset($_POST["btnSave"])) {
		$ma = $_POST["txtMaSP"];
		$name = $_POST["txtTenSP"];
		$mota = $_POST["txtMoTa"];
		$soluong = $_POST["txtSoLuong"];	

		$loai = $_POST["selLoai"];
		

		$gia = $_POST["txtGia"];
		$xx = $_POST["txtXX"];
		$nn = $_POST["txtNN"];

		$nsx = $_POST["selNSX"];
	

		
		//$sql = "insert into sanpham(MaSP, TenSP, LoaiSP, NhaSanXuatId, XuatXu, MoTa, NgayNhap, SoLuong, HinhAnh, Gia) values('$ma', '$name', '$loai' , '$nsx', '$xx',  '$mota', '$nn', $soluong, $gia )";
		$sql = "insert into sanpham(MaSP, TenSP, LoaiSP, NhaSanXuatId, XuatXu, MoTa, NgayNhap, SoLuong, Gia, HinhAnh) values('$ma', '$name',  $loai, $nsx,'$xx', '$mota','$nn', $soluong, $gia,  )";
		
		$id = write($sql);
		$show_alert = 1;

		$f = $_FILES["fuMain"];
		if ($f["error"] > 0) 
		{

		} else {

		mkdir("imgs/$id");

		$tmp_name = $f["tmp_name"];
		
		$name = $f["name"];
	
		$destination = "imgs/$id/oppo-r17-pro.jpg1_-600x600.jpg";

		move_uploaded_file($tmp_name, $destination);
	}
	
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Thêm Sản Phẩm</title>
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
					<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Sản phẩm mới</h3>
					</div>
					<div class="panel-body">
					<?php if ($show_alert == 1) : ?>
				<div class="alert alert-success" role="alert">
					<strong>Well done!</strong> You successfully read this important alert message.
				</div>
			<?php endif; ?>
						<form class="form-horizontal" method="POST" >
							<div class="form-group">
								<label for="txtMaSP" class="col-sm-2 control-label">Mã Sản phẩm</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtMaSP" name="txtMaSP" placeholder="SPxxx">
								</div>
							</div>
							<div class="form-group">
								<label for="txtTenSP" class="col-sm-2 control-label">Tên Sản phẩm</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtTenSP" name="txtTenSP" placeholder="iPhone X">
								</div>
							</div>

							<div class="form-group">
								<label for="txtMoTa" class="col-sm-2 control-label">Mô tả</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtMoTa" name="txtMoTa" placeholder="Điện thoại">
								</div>
							</div>
							<div class="form-group">
								<label for="txtSoLuong" class="col-sm-2 control-label">Số Lượng</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtSoLuong" name="txtSoLuong" placeholder="100">
								</div>
							</div>
							<div class="form-group">
								<label for="txtGia" class="col-sm-2 control-label">Giá</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtGia" name="txtGia" placeholder="30,000,000">
								</div>
							</div>
							<div class="form-group">
								<label for="txtXX" class="col-sm-2 control-label">Xuất Xứ</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtXX" name="txtXX" placeholder="Việt Nam">
								</div>
							</div>
							<div class="form-group">
								<label for="txtNN" class="col-sm-2 control-label">Ngày Nhập</label>
								<div class="col-sm-10">
									<input type="date" class="form-control" id="txtNN" name="txtNN" >
								</div>
							</div>
							<div class="form-group">
								<label for="selNSX" class="col-sm-2 control-label">Nhà Sản Xuất</label>
								<div class="col-sm-10">
									<select id="selNSX" name="selNSX" class="form-control">
										<?php 
											$sql = "select * from hangsanxuat";
											$rs = load($sql);
											while ($row = $rs->fetch_assoc()) :
										?>
											<option value="<?= $row["MaHang"] ?>"><?= $row["TenHang"] ?></option>
										<?php endwhile; ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="selLoai" class="col-sm-2 control-label">Loại</label>
								<div class="col-sm-10">
									<select id="selLoai" name="selLoai" class="form-control">
										<?php 
											$sql = "select * from loaisanpham";
											$rs = load($sql);
											while ($row = $rs->fetch_assoc()) :
										?>
											<option value="<?= $row["MaLoaiSanPham"] ?>"><?= $row["TenLoaiSanPham"] ?></option>
										<?php endwhile; ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="txtFullDes" class="col-sm-2 control-label">Chi tiết</label>
								<div class="col-sm-10">
									<textarea rows="6" id="txtFullDes" name="txtFullDes" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="fuMain" class="col-sm-2 control-label">Ảnh lớn</label>
								<div class="col-sm-10">
									<input type="file" class="form-control" id="fuMain" name="fuMain">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button name="btnSave" type="submit" class="btn btn-success">
										<span class="glyphicon glyphicon-ok"></span>
										Lưu
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
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