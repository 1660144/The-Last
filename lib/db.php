<?php

$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "shop_online");
mysqli_query($conn, "Set NAMES 'utf8'");

    define("HOST", "127.0.0.1");
    define("DB", "shop_online");
    define("UID", "root");
    define("PWD", "");



    function load($sql) {
        $cn = new mysqli(HOST, UID, PWD, DB);
        if ($cn->connect_errno) {
            die("FAILED");
        }
    
        // echo $cn->host_info . "\n";
        $cn->query("set names 'utf8'");
        $rs = $cn->query($sql);
        return $rs;
    }
    function write($sql) {
        $cn = new mysqli(HOST, UID, PWD, DB);
        if ($cn->connect_errno) {
            die("FAILED");
        }
    
        $cn->query("set names 'utf8'");
        $cn->query($sql);
        
    }
   
?>