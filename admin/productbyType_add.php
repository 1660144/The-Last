<?php
	require_once './lib/db.php';
	$show_alert = 0;
	if (isset($_POST["btnSave"])) {		
        $name = $_POST["txtTenL"];     
		$sql = "insert into loaisanpham(TenLoaiSanPham) values('$name')";
		write($sql);
		$show_alert = 1;	
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
						<h3 class="panel-title">Thêm loại sản phẩm</h3>
					</div>
					<div class="panel-body">
					<?php if ($show_alert == 1) : ?>
				<div class="alert alert-success" role="alert">
					<strong>Well done!</strong> You successfully read this important alert message.
				</div>
			<?php endif; ?>
						<form class="form-horizontal" method="POST" >
							
							<div class="form-group">
								<label for="txtTenL" class="col-sm-2 control-label">Tên Loại Sản Phẩm</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="txtTenL" name="txtTenL" placeholder="XiaoMi">
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