<?php
    require_once "./lib/db.php";
    session_start();
    if (!isset($_SESSION["dang_nhap_chua"])) {
		$_SESSION["dang_nhap_chua"] = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sản Phẩm Thep Loại</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css">
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
            
             if (!isset($_SESSION["dang_nhap_chua"])) {
                 $_SESSION["dang_nhap_chua"] = 0;
             }
                require_once "menu.php";
            ?> 
        </div>
        <div class="menu1 ">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home" style="font-size:25px;color:#999"></i></a></li>
                    <li>/</li>
                    <li>Sản phẩm</li>
                </ul>
        </div>
        <hr>
        <div class="sanpham">
            <div class="container ">
                <div class="row ">
                    <div class="col-sm-3 text-left">
                        <div class="danhmuc">
                            <p>Loại Sản Phẩm</p>                   
                            <ul>
                                <?php 
                                     $sql ="SELECT * from loaisanpham";
                                     $result = mysqli_query($conn, $sql);
                                     while($row = mysqli_fetch_array($result))
                                     {
                                         $id = $row["MaLoaiSanPham"];
                                         
                                ?>
                                <li><a href="productbyCat.php?idlsp=<?php echo $id;?>">
                                <?=$row["TenLoaiSanPham"]?>
                                
                            </a></li>  
                            <?php
                                 }
                                 ?>                      
                            </ul>                                                       
                        </div>
                        <div class="danhmuc">
                            <p>Hãng Sản Xuất</p>                   
                            <ul>
                                    <?php
                                        $sql1 = "select * from hangsanxuat";
                                        $result1 = mysqli_query($conn, $sql1);
                                        while($row1 = mysqli_fetch_assoc($result1))
                                        {
                                    ?>
                                    <li>
                                        <a href="productbyProducer.php?id=<?=$row1["MaHang"]?>"><i class="fa fa-angle-right"></i>
                                            <?=$row1["TenHang"]?>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>                                                     
                        </div>
                    </div>       
                    <div class="col-sm-9 ">                
                    <ul class="cols cols-5 ">
                    <?php    
                        $limit = 8;
                        $lsp=$_GET['idlsp'];
						$current_page = 1;
						if (isset($_GET["page"])) {
							$current_page = $_GET["page"];
						}

						$next_page = $current_page + 1;
						$prev_page = $current_page - 1;

						$c_sql = "select count(*) as num_rows from sanpham WHERE sanpham.LoaiSP=$lsp";
						$c_rs = load($c_sql);
						$c_row = $c_rs->fetch_assoc();
						$num_rows = $c_row["num_rows"];
						$num_pages = ceil($num_rows / $limit);

						if ($current_page < 1 || $current_page > $num_pages) {
							$current_page = 1;
						}

						// $offset = 0;
						$offset = ($current_page - 1) * $limit;
						$sql = "SELECT * FROM sanpham WHERE sanpham.LoaiSP=$lsp  ORDER BY RAND()  limit $offset, $limit";
						$rs = load($sql);
						while ($row = $rs->fetch_assoc()) :
                        // $lsp=$_GET['idlsp'];
                        // $sql=" SELECT * FROM sanpham WHERE sanpham.LoaiSP=$lsp";
                        // $result1 = mysqli_query($conn, $sql);
                        // while($row = mysqli_fetch_assoc($result1))
                                    
                    ?>
			            <li class="product">			    
                        <a  href="product-detail.php?id=<?=$row["Id"]?>&nsx=<?=$row["NhaSanXuatId"]?>">
                                            <div class="panel-group">
                                                <div class="panel-heading">
                                                    <img src="<?=$row["HinhAnh"]?>" class="img-responsive"
                                                        style="width:100%" alt="Image">
                                                </div>
                                                <div class="panel-body">
                                                    <b><?=$row["MoTa"]?></b>
                                                </div>
                                                <div class="panel-footer">
                                                    <b style="color: red"><?php 
                                                        $number = $row["Gia"];
                                                        $format_number_1 = number_format($number);
                                                        echo $format_number_1 . "đ";
                                                    ?></b>
                                                </div>
                                            </div>
                                        </a> 			
				        <div class="clear"></div>				
                        </li>	
                        <?php
                        endwhile;
                        ?>			
		            </ul>                   
                    </div>   
                </div>
                <!-- kết thúc thẻ row -->

                <!-- Phân trang -->
                <div class="phantrang text-right">     
                <ul class="pagination">
					<li class="disabled">
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">«</span>
						</a>
					</li>
					<?php for ($i = 1; $i <= $num_pages; $i++) : ?>
						<li class="<?php if ($i == $current_page) echo 'active' ?>">
							<a href="?page=<?= $i ?>&idlsp=<?php echo $lsp?>"><?= $i ?></a>
						</li>
					<?php endfor; ?>

					<!-- <li class="active">
						<a href="#">
							1
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li> -->
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">»</span>
						</a>
					</li>
				</ul>                           
                </div>
                <!-- kết thúc thẻ phân trang -->
            </div>
        </div>
        <!-- kết thúc thẻ sản phẩm -->
        <hr>
        <div class="info">
        <?php
        require_once "infor.php";
        ?>
            </div>
            <!-- kết thúc thẻ thông tin liên hệ -->
        <footer class="container-fluid text-center">
            <p style="color:white">&copy; 2018 MOBILE STORE | Design by team The Last</p>
        </footer>
    </div>
    
</body>

</html>