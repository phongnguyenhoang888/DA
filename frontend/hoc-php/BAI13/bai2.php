<?php

    $mang = [
        "mau1"=> "blue",
        "mau2"=>"red",
        "mau3"=>"black",

    ];
    echo "<pre>";   
    echo "mang ban đầu"; 
    echo "<pre>";
    var_dump($mang);
    echo "<pre>";

    echo " mang chư thường";
    echo "<pre>";
    $mang = array_map("strtolower", $mang);
    var_dump($mang);

    echo " mang chư hoa";
    echo "<pre>";
    $mang = array_map("strtoupper", $mang);
    var_dump($mang);
?>