<?php
    require_once "./lib/db.php";
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
                                <table class="table table-striped ">                              
                                    <thead>
                                        <tr>
                                           
                                            <th>Tên Hãng</th>
                                            <th>Mã Hãng</th>
                                            <th></th>
                                            
                                    </thead>
                                    <?php
                                   $sql = "select * from hangsanxuat";
                                   $result = mysqli_query($conn, $sql);  
                                                             
                                   while($row = mysqli_fetch_array($result))
                                   {  
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?=$row["TenHang"]?></td>
                                            <td><?=$row["MaHang"]?></td>                                     
                                            <td>
                                                <a class="btn btn-default btn-xs" href="producer_edit.php?id=<?=$row["MaHang"]?>" >
                                                    <i class="fa fa-pencil" aria-hidden="true" style="width:15px;color:blue"></i>
                                                </a>
                                            
                                            <a class="btn btn-default btn-xs" href="producer_delete.php?id=<?=$row["MaHang"]?>" >
                                                    <i class="fa fa-times" aria-hidden="true" style="width:15px;color:red"></i>
                                                </a>
                                            </td>
                                          
                                        </tr>
                                    <?php
                                    }                               
                                    ?>                                    
                                    </tbody>                      
                                </table>  
                                <div class="text-right">
                                <a type="submit" class="btn btn-success" name="btnAdd" href="producer_add.php">
						            <span class="glyphicon glyphicon-check"></span>
						                Thêm hãng mới
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