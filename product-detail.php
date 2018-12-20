<?php
    require_once "./lib/db.php";
    session_start();
    if (!isset($_SESSION["dang_nhap_chua"])) {
		$_SESSION["dang_nhap_chua"] = 0;
    }
    $Id = $_REQUEST["id"];

    $sql = "Update SanPham Set LuotXem = LuotXem + 1 Where Id=$Id";
    $rs = write($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chi tiết sản phẩm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css" type="text/css">
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
     <div class="cart">
       <?php
       $id = $_GET["id"];
       
        $sql = "SELECT * from sanpham join hangsanxuat on hangsanxuat.MaHang=sanpham.NhaSanXuatId join loaisanpham on loaisanpham.MaLoaiSanPham=sanpham.LoaiSP WHERE sanpham.id=$id";
        $result  = mysqli_query($conn,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            
       ?>

        <h3><?php echo $row ["MoTa"];?></h3>
        <hr>
        <div class="row">
            <div class="col-sm-5 col-xs-5">
                <img src="<?=$row["HinhAnh"]?>" class="img-thumbnail" style="width:500px">
            </div>
            <div class="col-sm-7 col-xs-7">
                <table class="table table-borderless">
                    <tr>
                        <td>Giá bán: </td>
                        <td><b style="color: red;font-size:20px;"><?php 
                                $number = $row["Gia"];
                                $format_number_1 = number_format($number);
                                echo $format_number_1 . "đ";
                         ?></b></b></td>
                    </tr>
                    <tr>
                        <td>Số lượt xem:</td>
                        <td><?=$row["LuotXem"]?></td>
                    </tr>
                    <tr>
                        <td>Số lượng:</td>
                        <td><?=$row["SoLuong"]?></td>
                    </tr>
                    <tr>
                        <td>Mô tả: </td>
                        <td><?=$row["MoTa"]?></td>
                    </tr>
                    <tr>
                        <td>Nhà Sản Xuất: </td>
                        <td><?=$row["TenHang"]?></td>
                    </tr>
                    <tr>
                        <td>Loại:</td>
                        <td><?=$row["TenLoaiSanPham"]?></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="addtocart text-left">
                                <input type="button" class="btn " value="ADD TO CART">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>          
        </div>
        <?php
        }
        ?>
    </div>
        <!-- kết thúc row -->
        <hr>
        <div class="conntent">
            <div class="container">
                <h3 class="text-center">Sản Phẩm Cùng Loại</h3><br>
                <ul class="cols cols-5 ">
                    <?php
                        $id = $_GET["id"];
                        $sql = "SELECT * FROM sanpham as sp1 join sanpham as sp2 on sp1.LoaiSP = sp2.LoaiSP WHERE sp1.Id = $id ORDER BY RAND() limit 0,5";
                        $result = mysqli_query($conn, $sql);  
                                                  
                        while($row = mysqli_fetch_array($result))
                        {                    
                    ?>
			            <li class="product">			    
                            <a href="product-detail.php?id=<?=$row["Id"]?>&nsx=<?=$row["NhaSanXuatId"]?>">
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
                        }
                    ?>				
		            </ul>
            </div><br>
            <div class="container">
                <h3 class="text-center">Sản Phẩm Cùng Nhà Sản Xuất</h3><br>
                <ul class="cols cols-5 ">
                    <?php
                        $id = $_GET["nsx"];
                        $sql = "SELECT * FROM sanpham  WHERE NhaSanXuatId = $id limit 0,5";
                        $result = mysqli_query($conn, $sql);  
                                                  
                        while($row = mysqli_fetch_array($result))
                        {                    
                    ?>
			            <li class="product">			    
                            <a href="product-detail.php?id=<?=$row["Id"]?>&nsx=<?=$row["NhaSanXuatId"]?>">
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
                        }
                    ?>				
                    </ul>
                <div>
            </div>
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