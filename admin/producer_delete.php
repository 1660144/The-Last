<?php

require_once './lib/db.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "delete from hangsanxuat where MaHang = $id";
	write($sql);
	header('Location: producer.php');
}

?>