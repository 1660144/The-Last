<?php

require_once './lib/db.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "delete from loaisanpham where MaLoaiSanPham = $id";
	write($sql);
	header('Location: productbyType.php');
}

?>