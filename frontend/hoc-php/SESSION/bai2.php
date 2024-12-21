<?php
// Khởi động session
session_start();

$err1= $err2=  $err3="" ;
$email = $pass = $city = "";
$demo = [];
// Kiểm tra xem người dùng đã submit form chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra input email
    $x=1;
    if (empty($_POST["email"])) {
        $err1= "Email không được để trống.";
        $x=2;
    } else {
        $email = $_POST["email"];
    }

    // Kiểm tra input pass
    if (empty($_POST["pass"])) {
        $err2 = "Password không được để trống.";
        $x=2;
    } else {
        $pass = $_POST["pass"];
    }

    // Kiểm tra input city
    if (empty($_POST["city"])) {
        $err3 = "City không được để trống.";
        $x=2;
    } else {
        $city = $_POST["city"];
    }
  
    if($x==1){
        $demo = [
            'email' => $email,
            'pass' => $pass,
            'city' => $city,
        ];
    }

        // Lưu vào session thành một mảng hai chiều

        $_SESSION['form'][] = $demo;
    
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Form nhập thông tin</h1>
    <form action="" method="POST">
      
        <label for="email">Email:</label>
        <input type="text" name="email" >
        <p><?php echo $err1; ?></p>
        <br><br>

       
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
        <p><?php echo $err2; ?></p>
        <br><br>

        
        <label for="city">City:</label>
        <input type="text" name="city" id="city" >
        <p><?php echo $err3; ?></p>
        <br><br>

       
        <button type="submit">Submit</button>
    </form>

    <br>
 
</body>
</html>
