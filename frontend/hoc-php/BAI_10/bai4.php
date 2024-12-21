<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- //Kiểm tra xem các số từ 1 đến 1000 có số nào chia hết cho 40 không, nếu có thi in ra những số đó. -->
     <?php
        $mang=[];
        for($i=1;$i<=1000;$i++){
            $mang[]=$i;

        }
        echo "<pre>";
        foreach ($mang as $value){
            if($value %40 == 0){
                echo "<br>";
                echo $value;
                
            }
        }

     ?>
</body>
</html>