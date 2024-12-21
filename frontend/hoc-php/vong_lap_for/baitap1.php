<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  //1.Vòng lặp for In ra các số chẵn từ 0 đến 100

   $tong = 0;
   $mang = [];
    for($i = 1; $i <= 100; $i++)
    {
        if($i %2 == 0){
            echo "$i la so chan";
           
          echo '<br/>';;
        }
        
        if($i %2 != 0){
           echo "$i la so le";
          echo '<br/>';;
        }
        echo '<br/>';;
        //echo $i;  
          
       $mang[]=$i;
    }
    echo '<br/>';;
    echo "<pre>";
    var_dump($mang);
  // 2. Vòng lặp for tìm phần tử lớn nhất trong mảng
    $max = 0;

// Duyệt qua mảng để tìm số lớn nhất
for ($i = 1; $i < count($mang); $i++) {
    if ($mang[$i] > $max) {
        $max = $mang[$i]; // Cập nhật số lớn nhất
    }
}

// In ra số lớn nhất
echo "Số lớn nhất trong mảng là: " . $max;


//3.Vòng lặp for in ra lần lượt các ký tự của chuỗi
echo "<pre>";
$name ="nguyen thanh hoang phong";

for($r = 0; $r<strlen($name);$r++){
  
    echo $name[$r]. "-";
}
echo "<pre>";
    //4.PHP - Vòng lặp for tính tổng
 
 // Giá trị n, có thể thay đổi tùy ý
$sum = 0.0; // Khởi tạo tổng ban đầu
$number_one = "";

if(isset($_POST["submit"])){
 // echo "dakick";
  $da_nhap = 1;
  // kiểm tra ô nhập có để trống hay ko
  if(empty($_POST["number"])){
      $err1 = "vui long nhap so";
      $da_nhap = 2;
  }
  if($da_nhap == 1){
      $number_one = $_POST["number"];
      echo $number_one;
    
  }
}

 for ($i = 1; $i <= $number_one; $i++) {
     $sum += 1 / $i; // Cộng thêm 1/i vào tổng
 }
echo "<pre>";
echo "Tổng S = 1 + 1/2 + 1/3 + ... + 1/ $number_one là: " . $sum;


?>
        <form action="" method="POST">
              <input type="text" name="number">
              <button type="submit" name="submit">click</button>
        </form>
</body>
</html>