<div>
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
<br><br>
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
<br><br>
<div class="timkiemtheogia">
<p>Chọn mức giá</p> 
    
        <ul>
            <li><a href="productbyPrice.php?price=1">100.000đ -- 1.000.000đ</a></li>
            <li><a href="productbyPrice.php?price=2">1.000.000đ -- 5.000.000đ</li>
            <li><a href="productbyPrice.php?price=3">5.000.000đ -- 10.000.000đ</li>
            <li><a href="productbyPrice.php?price=4">10.000.000đ -- 20.000.000đ</li>
        </ul>
  
</div>