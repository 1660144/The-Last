<?php
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "Shop_Online");
    mysqli_query($conn, "Set NAMES 'utf8'");
?>