<?php
// Khai báo biến số trong php

$sinhvien = 'ss'; //đúng
$_sinh_vien = 'nguyen thanh hoang phong'; //đúng
$sinh_vien90 = '123'; //đúng
//$90sinhvien = ''; //sai
// echo : in  ra manf hinhf 

// echo $sinhvien;
// echo $_sinh_vien;

// echo $sinh_vien90;

// define("SDT", "0399265172");
// echo SDT;

//. Kiểu dữ liệu INT
//Chữ INT là viết tắt của chữ INTEGER, là một kiểu dữ liệu dạng số và có thể ở viết ở nhiều cơ số khác nhau.

$thap_phan = 0123; // Số thập phân
$so_am = -123; // Số âm
$bat_phan = 0127; // số bát phân
$thap_luc_phan = 0x1A; // và số thập lục phân

//echo $bat_phan;


//Ép dữ liệu sang kiểu INT
//Cú Pháp: (int)$ten_bien;

$tuoi = '98'; // biến tuổi là một chuỗi có giá trị bằng '98'
$tuoi1 = (int)$tuoi; // lúc này biến $tuoi là một kiểu int có giá trị 98

// echo $tuoi1;


//Việc chuyển đổi này trong PHP đôi khi lại không cần thiết vì các kiểu dữ liệu trong php tự động chuyển các biến sang các kiểu thích hợp để thực hiện phép tính, tuy nhiên sau khi thực hiện tính toán thì biến đó sẽ tự chuyển lại kiểu dữ liệu ban đầu.
$a = '123';  // Biến $a là kiểu chuỗi có giá trị bằng '123'
$b = 123; // Biến $b là kiểu INT có giá trị bằng 123
$c = $a + $b;

// echo $c;

// var_dump(is_int($c)); // hàm is_int($tenbien) dùng để kiểm tra một biến có phải là kiểu INT hay không
//  var_dump(is_int($a)); // kết quả là false vì biến $a là kiểu string



$a = 'a123'; // biến $a có giá trị là chuỗi 'a123'
$a = (int)$a; // chuyển $a sang kiểu INT
// echo $a; // kết quả xuất ra màn hình là số 0
//Chạy đoạn lệnh này các bạn sẽ thấy kết quả ra số 0. Tại sao? 
//vì bạn thấy biến $a có ký tự đầu tiên không phải ở dạng số nên nó sẽ tự động cắt bỏ tất cả những ký tự 
// đằng sau ký tự a nên chuỗi này rỗng, mà giá trị rỗng chuyển sang kiểu INT có giá trị bằng không.



//6. Kiểu dữ liệu boolean

//Dây là một kiểu dữ liệu đơn giản nhất trong các kiểu dữ liệu trong PHP, 
// nó chỉ chứa 2 giá trị là đúng hoặc sai (TRUE hoặc FALSE). 
//Để tạo biến kiểu boolean thì  bạn gán giá trị cho nó là TRUE hoặc FALSE. 
//Lưu ý  TRUE, FALSE  không phân biệt hoa thường, nghĩa là bạn gõ thế nào cũng được miễn là đúng.


$is_admin = false; // biến $admin là kiểu boolean có gái trị là false


//.Kiểu mảng (array)
$mang = [];

// js: 
// mang: dung push de dua vao , key tu dong tao ra, bat dau = 0
// object: xxx[..] = ... orr xxx.key = ... 
//     key do minh tao ra 

// cu phap dua data vao mang 
    $mang[] = "hoc 1";
    $mang[] = "hoc 2";
$mang[] = 1111;

$mang[] = 222;

// mang 2 chieu co key chinh la info key trong la name va city
$mang["info"]["name"] = "baovic";
$mang["info"]["city"] = "da nang";

/// tao mang da chieu
$mang = [
    ["name" => "nguyen van a",
    "email" => "â@gmail.com",
    "sdt" => "4444444"],

    ["name" => "nguyen van b",
    "email" => "â@gmail.com",
    "sdt" => "4444444"],
    
    ["name" => "nguyen van c",
    "email" => "â@gmail.com",
    "sdt" => "4444444"],
];

// dat key laf dt va index la ss
$mang["dt"] = "ss";

echo "<pre>";
// echo "<pre>"; : xuong dong 
var_dump($mang); // in mang ra 

echo $mang[3];
echo "<pre>";
echo $mang["info"]['name'];
//  var_dump ( dung de hien thi chi tiet thong tin ve mot bien)
$sinhvien = [];
$sinhvien["ten1"]= 'nguyen van a';

$sinhvien["ten2"]='nguyen van b';
echo '<pre>' ; //giup mảng hiển thị xuống dóng
var_dump($sinhvien);
echo  $sinhvien["ten2"];
?>


