<?php session_start(); ?>
<!-- Bắt đầu phiên làm việc -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
        <?php
        
            $err1= $err2="";
            if(isset($_POST["submit"])){
                //echo "dakick";
                if(empty($_POST["username"])){
                    $err1 = "da looix";
                }
                if(empty($_POST["pass"])){
                    $err2 = "da looix";
                }

                if(!empty($_POST["username"])){
                    $_SESSION['name'] = $_POST["username"];
                }
                if(!empty($_POST["pass"])){
                    $_SESSION['passs'] = $_POST["pass"];
                }
            }

        ?>
        <h1>
            <?php
            // Hiển thị thông tin nếu session 'name' đã được lưu
            if (isset($_SESSION['name'])) {
                echo 'Tên Đăng Nhập Là: ' .$_SESSION['name'];
            }
            echo "<pre>";
            if (isset($_SESSION['passs'])) {
                echo 'pass :: ' . $_SESSION['passs'];
            }
            ?>
        </h1>
        <form action="" method="POST">
            <input type="text" name="username" value="" placeholder="Nhập name" /><br/>
            <p><?php echo $err1; ?></p>
            <input type="text" name="pass" value="" placeholder="Nhập pass" /><br/>
            <p><?php echo $err2; ?></p>
           <button type="submit" name="submit">KICK</button>
           
        </form>

</body>
</html>