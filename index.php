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
    <title>Trang Chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/page.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.im.css" type="text/css">
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
    <div class="page">
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
        <div class="banner">
        <?php
                require_once "banner.php";
            ?> 
        </div>

        <div class="sanphammoinhat">
            <div class="container-fluid">
                <h3 class="text-center">Sản Phẩm Mới Nhất</h3>      
		            <ul class="cols cols-5 ">
                    <?php
                        $sql2 = "select * from sanpham order by ngaynhap desc limit 0,10";
                        $result2 = mysqli_query($conn, $sql2);  
                                                  
                        while($row2 = mysqli_fetch_array($result2))
                        {                    
                    ?>                 
			            <li class="product">			    
                        <a href="product-detail.php?id=<?=$row2["Id"]?>&nsx=<?=$row2["NhaSanXuatId"]?>">
                                            <div class="panel-group">
                                                <div class="panel-heading">
                                                    <img src="<?=$row2["HinhAnh"]?>" class="img-responsive"
                                                        style="width:100%" alt="Image">
                                                </div>
                                                <div class="panel-body">
                                                    <b><?=$row2["MoTa"]?></b>
                                                </div>
                                                <div class="panel-footer">
                                                    <b style="color: red"><?php 
                                                        $number = $row2["Gia"];
                                                        $format_number_1 = number_format($number);
                                                        echo $format_number_1 . "đ";
                                                    ?></b>
                                                </div>
                                            </div>                                     				
				        <div class="clear"></div>	
                        </a>	
                        </li>          
                    <?php
                        }
                    ?>				
		            </ul>              
            </div>		
	    </div>
           
            <hr>
            <div class="sanphammoinhat">
            <div class="container-fluid">
                <h3 class="text-center">Sản Phẩm Bán Chạy Nhất</h3>      
		            <ul class="cols cols-5 ">
                    <?php
                        $sql2 = "select * from sanpham order by soluong desc limit 0,10";
                            $result2 = mysqli_query($conn, $sql2);                                          
                        while($row2 = mysqli_fetch_array($result2))
                        {                    
                    ?>
			            <li class="product">			    
                            <a href="product-detail.php?id=<?=$row2["Id"]?>&nsx=<?=$row2["NhaSanXuatId"]?>">
                                            <div class="panel-group">
                                                <div class="panel-heading">
                                                    <img src="<?=$row2["HinhAnh"]?>" class="img-responsive"
                                                        style="width:100%" alt="Image">
                                                </div>
                                                <div class="panel-body">
                                                    <b><?=$row2["MoTa"]?></b>
                                                </div>
                                                <div class="panel-footer">
                                                    <b style="color: red"><?php 
                                                        $number = $row2["Gia"];
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
                  
            </div>		
	    </div>
        <hr>
        <div class="sanphammoinhat">
            <div class="container-fluid">
                <h3 class="text-center">Sản Phẩm Xem Nhiều Nhất</h3>      
		            <ul class="cols cols-5 ">
                    <?php
                        $sql2 = "select * from sanpham order by luotxem desc limit 0,10";
                        $result2 = mysqli_query($conn, $sql2);  
                                                  
                        while($row2 = mysqli_fetch_array($result2))
                        {              
                            $id = $row2["Id"];      
                    ?>
			            <li class="product">			    
                            <a href="product-detail.php?id=<?php echo $id;?>&nsx=<?=$row2["NhaSanXuatId"]?>">
                                            <div class="panel-group">
                                                <div class="panel-heading">
                                                    <img src="<?=$row2["HinhAnh"]?>" class="img-responsive"
                                                        style="width:100%" alt="Image">
                                                </div>
                                                <div class="panel-body">
                                                    <b><?=$row2["MoTa"]?></b>
                                                </div>
                                                <div class="panel-footer">
                                                    <b style="color: red"><?php 
                                                        $number = $row2["Gia"];
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
                  
            </div>		
	    </div>
    <hr>
    <!-- thẻ thông tin liên hệ -->
    <div class="info">
        <?php
        require_once "infor.php";
        ?>
    </div>
    <!-- kết thúc thẻ thông tin liên hệ -->
    <!-- thẻ footer  -->
    <?php
        require_once "footer.php";
    ?>
    </div>
             </div>
    

</body>
</html>