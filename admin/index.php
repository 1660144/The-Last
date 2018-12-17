<?php
    require_once "./lib/db.php";
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
                    <div class="admin-content-sidebar">                              
                          <?php
                                require_once "sidebar.php";
                          ?>               
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="admin-content-content">
                        <div class="head">
                            <div class="head-menu text-right">
                                <div class="head-img">
                                    <img src="img/ava.jpg" style="width: 50px;">
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
                                    <span class="caret"></span>
                                    <ul class="dropdown-menu">
                                            <li><a href="/The-last/index.php">Logout</a></li>  
                                    </ul>
                                </div>
                            </div>
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
                            <div class="content-head container">
                                <?php
                                    require_once "dashboard.php";
                                ?>
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