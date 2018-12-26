<?php
		require_once "./lib/db.php";
		session_start();
		require_once "cart.inc.php";
		$db_handle = new DBController();
		
		
		
		if (!isset($_SESSION["dang_nhap_chua"])) {
			$_SESSION["dang_nhap_chua"] = 0;
		}
	
		if(!empty($_GET["action"])) 
		{
			switch($_GET["action"]) 
			{
				case "add":
					if(!empty($_POST["soluong"])) 
					{
						$productByCode = $db_handle->runQuery("SELECT * FROM sanpham WHERE Id= '" . $_GET["id"] . "' ");
						$itemArray = array($productByCode[0]["Id"]=>array('Id'=>$productByCode[0]["Id"], 'MaSP'=>$productByCode[0]["MaSP"], 'TenSP'=>$productByCode[0]["TenSP"], 'soluong'=>$_POST["soluong"], 'Gia'=>$productByCode[0]["Gia"], 'HinhAnh'=>$productByCode[0]["HinhAnh"]));
						

						if(!empty($_SESSION["giohang"])) 
						{
							if(in_array($productByCode[0]["Id"],array_keys($_SESSION["giohang"]))) 
							{
								foreach($_SESSION["giohang"] as $k => $v) 
								{
										if($productByCode[0]["Id"] == $k) 
										{
											if(empty($_SESSION["giohang"][$k]["soluong"]))
											{
												$_SESSION["giohang"][$k]["soluong"] = 0;
											}
											$_SESSION["giohang"][$k]["soluong"] += $_POST["soluong"];
										}
								}
							} 
							else
							{
								$_SESSION["giohang"] = array_merge($_SESSION["giohang"],$itemArray);
							}
						} else 
						{
							$_SESSION["giohang"] = $itemArray;
						}
					}
				break;
				case "remove":
					if(!empty($_SESSION["giohang"])) 
					{
						
						foreach($_SESSION["giohang"] as $k => $v) 
						{
								echo " " + $k;
								if($_GET["id"] == $k)
									unset($_SESSION["giohang"][$k]);	
								if(empty($_SESSION["giohang"]))
									unset($_SESSION["giohang"]);
						}
					}
				break;
				case "empty":
					unset($_SESSION["giohang"]);
				break;	
			}
		}
	

?>
<html lang="en">

<head>
    <title>Giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css" type="text/css">
    <link rel="shortcut icon"  href="favicon1.ico"/>
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
            <li><a href="index.php"><i class="fa fa-home" style="font-size:25px;color:#999"></i></a></li>
            <li>/</li>
            <li>Giỏ Hàng</li>
        </ul>
    </div>
    <hr>
    <div class="cart">
        <p style="font-size:25px">GIỎ HÀNG </p>
        <hr>
		<?php
			if($_SESSION["dang_nhap_chua"] == 0)
			{
				echo "Bạn chưa đăng nhập! Vui lòng đăng nhập hoặc tạo tài khoản để mua hàng";
			}
			else{

		?>
        <div class="row">
            <div class="col-sm-8 col-xs-8 ">
				<?php
					if(isset($_SESSION["giohang"])){
						$total_quantity = 0;
						$total_price = 0;
				?>	
                <table class="table table-striped ">
                    <thead>
						<tr>
							<th>Sản phẩm</th>
							<th>Tên Sản Phẩm</th>
							<th>Giá</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>		
						<?php
							foreach ($_SESSION["giohang"] as $item)
							{
								$item_price = $item["soluong"]*$item["Gia"];
						?>
						<tr>
							<td><img src="<?=$item["HinhAnh"]?>" /></td>
							<td><?php echo $item["TenSP"]; ?></td>														
							<td style="color:red"><?php 
									
									$format_number_1 = number_format($item["Gia"]);
									echo $format_number_1 . "đ"; ?>
							</td>
							<td><?php echo $item["soluong"]; ?></td>
							<td style="color:red;"><b><?php 
									$format_number_1 = number_format($item_price);
									echo $format_number_1 . "đ"; ?>
									</b>
							</td>			
							<td><a href="cart.php?action=remove&id=<?=$item["Id"] ?>" class="btnRemoveAction"><i class="fa fa-trash" style="color:red"></i></a></td>
						</tr>	
						<?php				
							$total_quantity += $item["soluong"];
							$total_price += ($item["Gia"]*$item["soluong"]);
						}
						?>
					
						<tr>
								<td colspan="2" align="right">Total:</td>
								<td align="right"><?php echo $total_quantity; ?></td>
								<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
								<td></td>
						</tr>
							
						</div>
					</tbody>
                </table>
				<?php
						} else {
						?>
						<div class="no-records">Giỏ hàng của bạn đang trống</div>
						<?php 
						}
						?>
				
            </div>
			<!-- kết thúc row -->
        </div>
		<?php
			}
		?>
    </div>
    </div>
    <hr>
    <div class="info">
        <?php
            require_once "infor.php";
        ?>
    </div>
    <!-- kết thúc thẻ thông tin liên hệ -->
    <div>
    <?php
        require_once "footer.php";
    ?>
    </div>
    
</body>

</html>