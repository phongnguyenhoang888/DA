<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        $err1= $err2 = $err3 ="";
        $a= $b= $c= $max= "";
        //$mang = [];
        if(isset($_POST["submit"])){
           // echo "dakick";
            if(empty($_POST["number1"])){
                $err1 = "chua nhap so";
            }
            if(empty($_POST["number2"])){
                $err2 = "chua nhap so";
            }
            if(empty($_POST["number3"])){
                $err3 = "chua nhap so";
            }
            // lay so tu form
            if(!empty($_POST["number1"])){
                //$mang[] = $_POST["number1"];
                $a = $_POST["number1"];
            }
            if(!empty($_POST["number2"])){
                //$mang[] = $_POST["number2"];
                $b = $_POST["number2"];
            }
            if(!empty($_POST["number2"])){
                //$mang[] = $_POST["number3"];
                $c = $_POST["number3"];
            }
            
            //var_dump($mang);
        }
         if($a > $b && $a > $c){
            $max = $a;
         }elseif($b> $a && $b > $c){
            $max = $b;
         }else{
            $max =$c;

         }
        //echo $a.$b.$c;
         echo "so lon nhat trong ba so: ".$max;


    ?>

    <form action="" method="POST">
        <label for="">so1</label><br>
        <input type="text" name="number1"><br>
        <p><?php echo $err1 ?></p>

        <label for="">so2</label><br>
        <input type="text" name="number2"><br>
        <p><?php echo $err2 ?></p>
        <label for="">so3</label><br>
        <input type="text" name="number3"><br>
        <p><?php echo $err3 ?></p>
        <br>
        <button type="submit" name="submit">CLIK</button>
    </form>
</body>
</html>