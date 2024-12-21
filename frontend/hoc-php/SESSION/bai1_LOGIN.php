<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        <?php
            $name1 =$_SESSION["name"];
            $pass1 = $_SESSION["passs"];
           // echo $name1;
            $name_LOGIN= $PASS_LOGIN="";
            $err1= $err2= "";
            $msg1= $msg2 ="";
            if(isset($_POST["login"])){
                if(empty($_POST["username"])){
                    $err1 = "da looix";
                }
                if(!empty($_POST["username"])){
                    $name_LOGIN =$_POST["username"];
                }
                if(empty($_POST["pass"])){
                    $err2 = "da looix";
                }
                if(!empty($_POST["username"])){
                    $PASS_LOGIN =$_POST["pass"];
                }
                //  kieemr tra name va pass co trong SS ko
                if(isset($_SESSION["name"]) && isset($_SESSION["passs"])){
                    if($name_LOGIN == $name1 && $PASS_LOGIN == $pass1){
                        echo "login thannh cong";
                    }else{
                        echo "kiem tra lai mk va name";
                    }
                }else{
                    echo "ban chua dang ky ";
                }

        }
           
        ?>
        
        <form action="" method="POST">
            <input type="text" name="username" value="" placeholder="Nhập name" /><br/>
            <p><?php echo $err1; ?></p>
            <input type="text" name="pass" value="" placeholder="Nhập pass" /><br/>
            <p><?php echo $err2; ?></p>
           <button type="submit" name="login">đăng nhập</button>
        </form>
</body>
</html>
