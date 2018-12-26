<?php
require_once "cart.inc.php";

// session_start();
// if (!isset($_SESSION["cart"])) {
// 	$_SESSION["cart"] = array();
// }

if (isset($_POST["btnAddItemToCart"])) {
	$Id = $_POST["txtID"];
	$q = $_POST["txtSL"];
	
	add_item($Id, $q);

	// if (array_key_exists($proId, $_SESSION["cart"])) {
	// 	$_SESSION["cart"][$proId] += $q;
	// } else {
	// 	$_SESSION["cart"][$proId] = $q;
	// }

	// print_r($_SESSION["cart"]);
	if (isset($_SERVER['HTTP_REFERER'])) {
	    $url = $_SERVER['HTTP_REFERER'];
	    header("location: $url");
	}
}