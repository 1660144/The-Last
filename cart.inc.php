<?php

if (!isset($_SESSION["giohang"])) {
	$_SESSION["giohang"] = array();
}

// function add_item($Id, $q) {
// 	if (array_key_exists($Id, $_SESSION["cart"])) {
// 		$_SESSION["cart"][$Id] += $q;
// 	} else {
// 		$_SESSION["cart"][$Id] = $q;
// 	}
// }

// function delete_item($Id) {
// 	unset($_SESSION["cart"][$Id]);
// }

// function update_item($Id, $q) {
// 	$_SESSION["cart"][$Id] = $q;
// }

	function get_total_items() {
		$total = 0;
		foreach ($_SESSION["giohang"] as $k => $v) {
			$total += 1;
		}
		return $total;
	}
	
?>