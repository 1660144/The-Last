<?php

if (!isset($_SESSION["cart"])) {
	$_SESSION["cart"] = array();
}

function add_item($Id, $q) {
	if (array_key_exists($Id, $_SESSION["cart"])) {
		$_SESSION["cart"][$Id] += $q;
	} else {
		$_SESSION["cart"][$Id] = $q;
	}
}

function delete_item($Id) {
	unset($_SESSION["cart"][$Id]);
}

function update_item($Id, $q) {
	$_SESSION["cart"][$Id] = $q;
}

function get_total_items() {
	// $total = 0;
	// foreach ($_SESSION["cart"] as $Id => $q) {
	// 	$total += $q;
	// }

	// return $total;
}
function runQuery($query) {
	$result = mysqli_query($this->conn,$query);
	while($row=mysqli_fetch_assoc($result)) {
		$resultset[] = $row;
	}		
	if(!empty($resultset))
		return $resultset;
}

class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "shop_online";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>