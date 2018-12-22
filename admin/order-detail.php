<?php
     require_once './lib/db.php';
     $show_alert = 0;
     $id = $_GET["id"];

     

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
                                <h2>Chi tiết Đơn Hàng</h2>
                                <hr>
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Hình Ảnh</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>                                                          
                                           
                                        </tr>
                                    </thead>                                 
                                    <tbody>
                                    <?php
                                        $sql = "select * from chitietdonhang join sanpham on chitietdonhang.MaSP = sanpham.MaSP where DatHangId = $id";
                                        $result = mysqli_query($conn, $sql);
                                        $i = 0;
                                        $rs = load($sql);
                                        if ($rs->num_rows > 0)
                                        {
                                            while($row = mysqli_fetch_array($result))
                                            {
                                    ?>   
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$row["TenSP"]?></td>
                                            <td><img src="<?=$row["HinhAnh"]?>" style="width:30%;"></td>
                                            <td><?=$row["Gia"]?></td>                 
                                            <td><?=$row["SL"]?></td>                                     
                                        </tr>
                                    <?php
                                            $i = $i + 1;
                                            }  
                                        }   
                                        else
                                        {
                                    ?>
                                        <div class="">
                                            <h2>Không có sản phẩm nào</h2>
                                            <div>
                                     <?php       
                                        }                          
                                    ?>     
                                    </tbody>
                                </table>
                                
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