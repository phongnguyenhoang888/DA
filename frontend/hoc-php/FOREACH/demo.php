<?php

    $sinh_Vien =  [
        ["sv1" => "nguyen van a"],
        ["sv2" => "nguyen van b"],
        ["sv3" => "nguyen van c"],
        ["sv4" => "nguyen van d"],
        ["sv5" => "nguyen van e"],
        ["sv6" => "nguyen van f"],

    ];


    foreach ($sinh_Vien as $sinhvien) {
        // Mỗi $sinhvien là một mảng liên kết, bạn cần duyệt qua nó để lấy giá trị
        foreach ($sinhvien as $key => $ten) {
            echo $ten . "<br>";
        }
    };


        
?>