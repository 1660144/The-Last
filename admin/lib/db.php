<?php
    define("HOST", "127.0.0.1");
    define("DB", "shop_online");
    define("UID", "root");
    define("PWD", "");

    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "Shop_Online");
    mysqli_query($conn, "Set NAMES 'utf8'");

    function write($sql) {
        $cn = new mysqli(HOST, UID, PWD, DB);
        if ($cn->connect_errno) {
            die("FAILED");
        }
    
        $cn->query("set names 'utf8'");
        $cn->query($sql);
        
    }
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
    
?>