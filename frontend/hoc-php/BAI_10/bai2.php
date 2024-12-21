<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $mang_luu = [];
            for($i=1; $i <= 100;$i++){
                $mang_luu []= $i;
            }
            echo "<pre>";
            //echo "<br>";
            //var_dump($mang_luu);

            foreach($mang_luu as $vitri_cuaso => $value){
                if($value % 3 == 0){
                    echo "<pre>";
                    echo  $value. " ". "dung vi tri" ." ".$vitri_cuaso;
                }
            }
    
    ?>
</body>
</html>