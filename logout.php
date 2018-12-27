<?php
session_start();
if (isset($_SESSION["dang_nhap_chua"])) {
	unset($_SESSION["dang_nhap_chua"]);
	unset($_SESSION["current_user"]);
	unset($_SESSION["giohang"]);
}

header('Location: index.php');