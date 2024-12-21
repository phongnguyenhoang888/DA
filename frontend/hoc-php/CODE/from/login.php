
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
   session_start();
    $err1= $err2 ='';
   $name = $mk="";
   
   if(isset($_POST["dang_nhap"])){
    $x=1;
    //echo "kick";
    if(empty($_POST["username"])){
        $err1 ="chua nhap username";
        $x=2;
    }
    if(!empty($_POST["username"])){
        $name = $_POST["username"];
    }
    if(empty($_POST["pass"])){
        $err2 ="chua nhap pass";
        $x=2;

    }if(!empty($_POST["pass"])){
        $mk = $_POST["pass"];
    };  

    if($name == $_SESSION['username_login'] && $mk == $_SESSION['pass_login']){
        echo "lodin thanh cong";
    }else{
        echo "login ko thanh cong";
    }
   }
    
?>


<h1>
            <?php
            
            // Hiển thị thông tin nếu session 'name' đã được lưu
            if (isset($_SESSION['username_login'])) {
                echo 'Tên Đăng Nhập Là: ' .$_SESSION['username_login'];
            }else{
                echo "name chuwa co";
            }
            echo "<pre>";
            if (isset($_SESSION['pass_login'])) {
                echo 'pass :: ' . $_SESSION['pass_login'];
            }
            ?>
        </h1>
    <form action="" method="POST">
        <label for="">user name</label><br>
        <input type="text" name="username"><br>
        <p><?php echo $err1;?></p>
        <label for="">pass</label><br>
        <input type="text" name="pass"><br>
        <p><?php echo $err2;?></p>
        <br>
        <button type="submit" name="dang_nhap">Dang nhap</a></button><br>
        <br>
        <button type="submit" name="login"><a href="register.php">toi trang register</a></button><br>

    </form>
</body>
</html>