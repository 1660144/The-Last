<?php
    require_once "./lib/db.php";
?>
<div class="jumbotron text-left">
            <div class="row ">
                <div class="col-sm-3 col-xs-3">
                    <ul class="diachi">
                        <p>Liên hệ</p>
                        <li>

                            <span>123 District 1</span>
                        </li>
                        <li>

                            <span> <a href="#">thelast@gmail.com</a></span>
                        </li>
                        <li>

                            <i>123 456 789</i>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <ul class="thongtin">
                        <p>Thông tin hỗ trợ</p>
                        <li>
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="#">Chính sách bản hành</a>
                        </li>
                        <li>
                            <a href="#">Tuyển dụng</a>
                        </li>
                        <li>
                            <a href="#">Mua hàng - thanh toán Online</a>
                        </li>
                        <a href="#" class="atm-visa" title="Thẻ Visa">
                            <img src="img/atm-visa-v/visa.png">
                        </a>
                        <a href="#" class="atm-visa" title="Thẻ ZaloPay">
                            <img src="img/atm-visa-v/zalopay.png">
                        </a>

                        <a href="#" class="atm-visa" title="Thẻ Vietinbank">
                            <img src="img/atm-visa-v/vietibank.png">
                        </a>
                        <a href="#" class="atm-visa" title="Trả Góp">
                            <img src="img/atm-visa-v/tragop.png">
                        </a>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <ul class="thongtin">
                        <p>Danh Mục</p>
                        <?php
                            $sql = "SELECT *  from loaisanpham ";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result))
                            {                                                     
                        ?>
                        <li><a href="productbyCat.php?idlsp=<?php echo $row['MaLoaiSanPham'];?>">
                         <?php echo $row['TenLoaiSanPham'];?></a> <li>
                            <?php
                            }
                            ?>
                        <!-- <li>
                            <a href="#">
                                ĐIỆN THOẠI</a>
                        </li>
                        <li>
                            <a href="#">

                                TABLET
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                PHỤ KIỆN</a>
                        </li>
                        <li>
                            <a href="#">
                                LAPTOP</a>
                        </li>
                        <li>
                            <a href="#">
                                ÂM THANH</a>
                        </li> -->
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <ul class="thongtin">
                        <p>Cá Nhân</p>
                        <li>
                            <a href="store.php">
                                Cửa hàng</a>
                        </li>
                        <li>
                            <a href="cart.php">

                                Giỏ hàng của tôi
                            </a>
                        </li>
                        <li>
                            <a href="login.php">
                                Đăng nhập</a>
                        </li>
                        <li>
                            <a href="registered.php">
                                Đăng Ký Tài Khoản</a>
                        </li>
                        <li>
                            <a href="http://facebook.com"><i class="fa fa-facebook-square" style="font-size:25px"></i></a>
                            <a href="http://twitter.com"><i class="fa fa-twitter-square" style="font-size:25px"></i></a>
                            <a href="http://tumblr.com"><i class="fa fa-tumblr-square" style="font-size:25px"></i></a>
                            <a href="http://instagram.com"><i class="fa fa-instagram" style="font-size:25px"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>