

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

            $err1 = $err2= $err3="";
            $name="";

            $mk="";
            $mk2="";

            if(isset($_POST["login"])){
                $x=1;
                if(empty($_POST["username"])){
                    $err1 = "chua nhap user name";
                    $x=2;
                }else{
                    $name = $_POST["username"];
                }
                if(empty($_POST["pass"])){
                    $err2 = "chua nhap pass";
                   $x=2;    
                    
                }else{
                     $mk = $_POST["pass"];
                }

                if(empty($_POST["pass2"])){
                    $err3 = "chua nhap lai pass2";
                    $x=2;
                }else{
                    $mk2 = $_POST["pass2"];

                };

                if($x=1 && $mk != $mk2){
                    echo "mat khau ko trung vs mat khau";
                    //exit;
                   
                }else{
                    echo 'dang nhap thanh cong';
                    $_SESSION["username_login"] = $name;
                    $_SESSION["pass_login"]= $mk;
                };
                
            };
    

    ?>



    <form action="" method="POST">
        <label for="">user name</label><br>
        <input type="text" name="username"><br>
        <p><?php echo $err1; ?></p>
        
        <label for="">pass</label><br>
        <input type="text" name="pass"><br>
        <p><?php echo $err2; ?></p>
        <label for="">nhap lai pass</label><br>
        <input type="text" name="pass2"><br>
        <p><?php echo $err3; ?></p>
        <br>
        <button type="submit" name="login">Dang Ky</button><br>
        <button type="submit" name="login"><a href="login.php">toi trang lo gin</a></button><br>
    </form>
    
</body>
</html>