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
         <a href="productbyProcuder.php?id=<?=$row1["MaHang"]?>"><i class="fa fa-angle-right"></i>
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
<p>Gía sản phẩm</p> 
    
        <ul>
            <li>100.000đ -- 100.000đ</li>
            <li>1.000.000đ -- 5.000.000đ</li>
            <li>5.000.000đ -- 10.000.000đ</li>
            <li>5.000.000đ -- 10.000.000đ</li>
        </ul>
  
</div>