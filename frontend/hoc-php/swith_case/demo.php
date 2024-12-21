<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
       $so_du =  $numberone =  $err1 = '';

            // kiem tra nut submit kick vao dc chưa
            if(isset($_POST["submit"])){
                //echo " da kick";
                // kiem tra nếu chưa nhập số thì báo lỗi
                $da_nhap = 1;
                if(empty($_POST["number"])){
                    $err1 = "vui long nhap so";
                    $da_nhap = 2;
                }
                if($da_nhap == 1){
                    $numberone = $_POST["number"];
                    //echo $numberone;
                    $so_du = $numberone % 7; 
                }
            } 

          
            echo "<pre>";
            echo $so_du;
            echo "<pre>";
            switch ($so_du){
                case 0:
                    echo " $so_du chia het cho 7";
                   
                default:
                    echo " $so_du ko / het cho 7";
                  
            }

        

    ?>
            <form action="" method="POST">

                

            <input type="text" name="number">
            <p><?php echo $err1; ?></p>
            <button type="submit" name="submit">click</button>
</form>
</body>
</html>