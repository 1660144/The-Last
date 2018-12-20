
<?php
    require_once "./lib/db.php";
   
?>
<nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <i class="fa fa-home" style="font-size:25px"></i>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <?php
                                $sql = "Select * from loaisanpham";
                                $result = mysqli_query($conn, $sql);  
                                                  
                                while($row = mysqli_fetch_array($result))
                                {
                                      $id = $row["MaLoaiSanPham"];
                                      
                            ?>
                            <li class="dropdown">                              
                                <a class="dropdown-toggle" data-toggle="dropdown" href="productbyCat.php?id=<?php echo $id;?>">                
                                  <?=$row["TenLoaiSanPham"]?>
                                  
                                    <span class="caret"></span>
                                </a>   
                                <ul class="dropdown-menu">
                                    <?php                   
                                        $sql1 = "select * from hangsanxuat where hangsanxuat.LoaiSanPham = " .$id;
                                        $result1 = mysqli_query($conn, $sql1);
                                        while($row1 = mysqli_fetch_assoc($result1))
                                        {
                                    ?>                                
                                    <li><a href="productbyProducer.php?id=<?=$row1["MaHang"]?>"><?=$row1["TenHang"]?></a></li>                                    
                                    <?php
                                        }
                                    ?>
                                </ul>                        
                            </li>  
                            <?php
                                }
                            ?>                                            
                        </ul>
                    </div>
                </div>
            </nav>