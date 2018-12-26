<?php
    require_once "./lib/db.php";
   
    require_once "cart.inc.php";
    
?>
<div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">

        <?php 
            if ($_SESSION["dang_nhap_chua"] == 0) 
            {			
        ?>
            <li> <a href="registered.php"><i class="fa fa-user-o" style="width:15px;"></i>
                Đăng Ký</a></li>
            <li> <a href="login.php"><i class="fa fa-sign-in" style="width:15px;"></i>
                 Đăng Nhập</a></li>
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i>
                     Giỏ hàng</a></li>
		
        <?php
        }
        else
        {
        ?>
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> 
                 Giỏ hàng (<?= get_total_items() ?>)</a></li>
		    <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><?= $_SESSION["current_user"]->TenHienThi ?></b> <span class="caret"></span></a>
			    <ul class="dropdown-menu">
				    <li><a href="#">Thông tin cá nhân</a></li>
				    <li><a href="#">Đổi mật khẩu</a></li>
				    <li role="separator" class="divider"></li>
				    <li><a href="logout.php">Thoát</a></li>
			    </ul>
            </li>
        <?php
        } 
        ?>
    </ul>
    
    </div>

