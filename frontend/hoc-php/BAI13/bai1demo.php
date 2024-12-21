<?php

$chuoi_so = "1, 2, 3, 5, 4, 6, 8, 7, 11, 9, 10, 13, 12, 14, 15, 17, 16, 18, 20, 21, 19, 22, 23";

// Chuyển đổi chuỗi thành mảng
$chuyen_thanh_mang = explode(', ', $chuoi_so);

// Sắp xếp mảng theo thứ tự tăng dần
sort($chuyen_thanh_mang);

// Hiển thị mảng đã sắp xếp
echo "<pre>";
echo "Mảng đã sắp xếp: ";
var_dump($chuyen_thanh_mang);
echo "</pre>";

?>
