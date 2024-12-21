<?php
    $them_so_vao_mang = [];
        for($i=1; $i <=100; $i++){
            //echo $i. "<br>" ; 
            echo "<pre>";
            $them_so_vao_mang[] =$i;
        }
        
       // var_dump($them_so_vao_mang);

      // In ra nội dung của mảng
        // foreach
            foreach ($them_so_vao_mang as $key => $value) {
                echo $key . " ".$value."<br>";
            };

        // vong lap for
        // chus thich 
        // $i la key trong mang 
        // $them_so_vao_mang[$i] la value trong mang
        for ($i = 0; $i < count($them_so_vao_mang); $i++) 
        {
            echo $i . " " . $them_so_vao_mang[$i] . "<br>";
        }
?>
