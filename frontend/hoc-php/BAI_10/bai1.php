<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php

                    // 1: kiem tra so 7 co nam trong mang ko'
                    
                    $number = [];
                    $err1= $err2= $err3= $err4= $err5= $err6= $err7 ="";
                    if(isset($_POST["submit"])){
                      if(empty($_POST["number1"])){
                        $err1 = "vui long nhap so";
                      }
                      if(empty($_POST["number2"])){
                        $err2 = "vui long nhap so";
                      }
                      if(empty($_POST["number3"])){
                        $err3 = "vui long nhap so";
                      }
                      if(empty($_POST["number4"])){
                        $err4 = "vui long nhap so";
                      }
                      if(empty($_POST["number5"])){
                        $err5 = "vui long nhap so";
                      }
                      if(empty($_POST["number6"])){
                        $err6 = "vui long nhap so";
                      }
                      if(empty($_POST["number7"])){
                        $err7 = "vui long nhap so";
                      }

                    //    lay so tu form
                      if(!empty($_POST["number1"])){
                        $number[] = $_POST["number1"];
                      }
                      if(!empty($_POST["number2"])){
                        $number[] = $_POST["number2"];
                      }
                      if(!empty($_POST["number3"])){
                        $number[] = $_POST["number3"];
                      }
                      if(!empty($_POST["number4"])){
                        $number[] = $_POST["number4"];
                      }
                      if(!empty($_POST["number5"])){
                        $number[] = $_POST["number5"];
                      }
                      if(!empty($_POST["number6"])){
                        $number[] = $_POST["number6"];
                      }
                      if(!empty($_POST["number7"])){
                        $number[] = $_POST["number7"];
                      }
                      
                    }
                    // vong lap for
                   
                        // for($i=0;$i<=count($number);$i++){
                        //     if ($i == 7) {
                        //         echo"Số 7 có trong các số bạn đã nhập.";
                        //         break;
                        //     }else {
                        //         echo"Số 7 không có trong các số bạn đã nhập.";
                        //         break;
                        //     }
                        // }
                    
                  
                        echo "<br>";

                    // vong lap foreach
                    
                    foreach ($number as $key => $value) {
                        if ($value == 7) {
                            echo"Số 7 có trong các số bạn đã nhập VÀ ĐỨNG VỊ TRÍ ." .$key;
                            break;
                    }
                        
                    else {

                        echo"Số 7 không có trong các số bạn đã nhập.";
                        
                    }
                }
              
           

                    // echo "<pre>";
                    // var_dump($number);
            ?>


            <form action="" method="POST">
                    <label for="">so thu nhat</label> <br>
                    <input type="text" name="number1"> <br>
                    <p><?php echo $err1; ?></p>
                    <label for="">so thu hai</label> <br>
                    <input type="text" name="number2"><br>
                    <p><?php echo $err2; ?></p>
                    <label for="">so thu ba</label> <br>
                    <input type="text" name="number3"><br>
                    <p><?php echo $err3; ?></p>
                    <label for="">so thu 4</label> <br>
                    <input type="text" name="number4"><br>
                    <p><?php echo $err4; ?></p>
                    <label for="">so thu 5</label> <br>
                    <input type="text" name="number5"><br>
                    <p><?php echo $err5; ?></p>
                    <label for="">so thu 6</label> <br>
                    <input type="text" name="number6"><br>
                    <p><?php echo $err6; ?></p>
                    <label for="">so thu 7</label> <br>
                    <input type="text" name="number7"><br>
                    <p><?php echo $err7; ?></p>
                    <br>
                    <button type="submit" name="submit">click</button> 
            </form> 
</body>
</html>