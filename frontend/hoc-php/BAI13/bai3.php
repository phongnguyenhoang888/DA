<?php

$chuoi_so = "1, 2, 3, 5, 4, 6, 8, 7, 11, 9, 10, 13, 12, 14, 15, 17, 16, 18, 20, 21, 19, 22, 23";

    

    

    echo "<pre>";
    // gán $chuoi_so  thành 1 mảng 
   $chuyen_thanh_mang = explode(', ', $chuoi_so);

   // Sắp xếp mảng theo thứ tự tăng dần
    sort($chuyen_thanh_mang);

    // Hiển thị mảng đã sắp xếp
    echo "<pre>";
    echo "Mảng đã sắp xếp: ";
    var_dump($chuyen_thanh_mang);
    echo "</pre>";

    // tinhs tổng trong mảng
    $tong = array_sum($chuyen_thanh_mang);
    // tính số phần tử trong mảng
    $phan_tu_mang = count($chuyen_thanh_mang);
    
    echo $tong;
    echo "<pre>";
    echo $phan_tu_mang;
    echo "<pre>";

    $tong_tb =$tong/$phan_tu_mang;
     echo $tong_tb;
     echo "<pre>";

  echo "<pre>";
    // Lấy 5 phần tử nhỏ nhất
    $nho_nhat_1 = array_slice($chuyen_thanh_mang, 0, 5);

    // Lấy 5 phần tử lớn nhất
    $lon_nhat_1 = array_slice($chuyen_thanh_mang, -5);

    $nho_nhat = implode(" ",$nho_nhat_1);
    echo $nho_nhat;
    echo "<pre>";
    $lon_nhat = implode(" ",$lon_nhat_1);
    echo $lon_nhat;
   

?>