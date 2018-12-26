<?php
    require_once "./lib/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản Phẩm</title>
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
                                <h2>Sản Phẩm</h2>
                                <hr>                      
                                <table class="table table-striped ">                              
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Hình Ảnh</th>
                                            <th>Giá</th>
                                            <th>Ngày Nhập</th>                                            
                                            <th>Số lượng bán</th>
                                            <th>Loại sản phẩm</th>
                                            <th>Hãng sản xuất</th>
                                            <th></th>
                                            <th></th>
                                    </thead>
                                    <?php
                                    $limit = 15;       
                       
                                    $current_page = 1;
                                    if (isset($_GET["page"])) {
                                        $current_page = $_GET["page"];
                                    }
            
                                    $next_page = $current_page + 1;
                                    $prev_page = $current_page - 1;
            
                                    $c_sql = "select count(*) as num_rows from sanpham";
                                    $c_rs = load($c_sql);
                                    $c_row = $c_rs->fetch_assoc();
                                    $num_rows = $c_row["num_rows"];
                                    $num_pages = ceil($num_rows / $limit);
            
                                    if ($current_page < 1 || $current_page > $num_pages) {
                                        $current_page = 1;
                                    }
            
                                    // $offset = 0;
                                    $offset = ($current_page - 1) * $limit;
                                    $sql = "SELECT * FROM sanpham  limit $offset, $limit";
                                    $rs = load($sql);
                                    while ($row = $rs->fetch_assoc()) 
                                   {  
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?=$row["Id"]?></td>
                                            <td><?=$row["TenSP"]?></td>
                                            <td><img src="<?=$row["HinhAnh"]?>" style="width:30%;"></td>
                                            <td><?=$row["Gia"]?></td>
                                            <td><?=$row["NgayNhap"]?></td>
                                           
                                            <td><?=$row["SoLuong"]?></td>
                                            <td><?=$row["LoaiSP"]?></td>
                                            <td><?=$row["NhaSanXuatId"]?></td>
                                            <td>
                                                <a class="btn btn-default btn-xs" href="product_edit.php?id=<?=$row["Id"]?>" >
                                                    <i class="fa fa-pencil" aria-hidden="true" style="width:15px;color:blue"></i>
                                                </a>
                                            </td>
                                            <td>
                                            <a class="btn btn-default btn-xs" href="product_delete.php?id=<?=$row["Id"]?>" >
                                                    <i class="fa fa-times" aria-hidden="true" style="width:15px;color:red"></i>
                                                </a>
                                            </td>
                                          
                                        </tr>
                                    <?php
                                    }                               
                                    ?>                                    
                                    </tbody>                                               
                                </table>  
                                <div class="phantrang text-right">     
                <ul class="pagination">
					<li class="disabled">
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">«</span>
						</a>
					</li>
					<?php for ($i = 1; $i <= $num_pages; $i++) : ?>
						<li class="<?php if ($i == $current_page) echo 'active' ?>">
							<a href="?page=<?= $i ?>"><?= $i ?></a>
						</li>
					<?php endfor; ?>

					
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">»</span>
						</a>
					</li>
				</ul>         
                    
                </div>     
            
                                <div class="text-right">
                                <a type="submit" class="btn btn-success" name="btnAdd" href="product_add.php">
						            <span class="glyphicon glyphicon-check"></span>
						                Thêm mới
                                </a>  
                                </div>                        
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