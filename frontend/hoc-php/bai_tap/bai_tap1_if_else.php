<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
</head>
<body>
    <?php
        $err1 ="";
        $msg = "";
        $number = "";
        if(isset($_POST["submit"])){
          //  echo "dakick ";
            // kiem tra number nhap chua
            if(empty($_POST["number"])){
                echo "vui long nhap so";
                
            }
            if(!empty($_POST["number"])){
               // Lấy giá trị từ form
                $number = $_POST['number'];
                //echo $number;
                if($number % 7 == 0){
                    echo "/ het cho 7";
                }else{
                    echo "ko / het cho 7";
                }
            }
        }
    ?>

    <p><?php echo $msg; ?></p>
    <form action="" method="POST">

      

            <input type="text" name="number">
            <p><?php echo $err1; ?></p>
            <button type="submit" name="submit">click</button>
    </form>
</body>
</html>