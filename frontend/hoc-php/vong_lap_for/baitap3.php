<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/// tao mang da chieu
$mang = [
    ["name" => "nguyen van a",
    "email" => "â@gmail.com",
    "sdt" => "4444444"],

    ["name" => "nguyen van b",
    "email" => "â@gmail.com",
    "sdt" => "4444444"],
    
    ["name" => "nguyen van c",
    "email" => "â@gmail.com",
    "sdt" => "4444444"],
];


echo "<pre>";
var_dump($mang); 


$student = array(
    array(
        "name" =>"nguyen van cuong1",
        "email" => "nguyenv@gmail.com",
        "sdt" => "03999222",
    ),
    array(
        "name" =>"nguyen van cuong2",
        "email" => "nguyenv@gmail.com",
        "sdt" => "03999222",
    ),
    array(
        "name" =>"nguyen van cuong3",
        "email" => "nguyenv@gmail.com",
        "sdt" => "03999222",
    ),
);
echo "<pre>";
print_r($student);



?>
<table>
<thead>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>sdt</th>

    </tr>
    <tbody>
       
         <?php
            // vong lap for
            
           for($i=0; $i<count($student);$i++){  
        ?>
           <tr>
            <td><?php echo $student[$i]["name"] ?></td>
            <td><?php echo $student[$i]["email"] ?></td>
            <td><?php echo $student[$i]["sdt"] ?></td>
           </tr>
        <?php
            }
        ?> 


        <?php
            // cong lap foreach
            foreach ($mang as $key=> $value) {
          ?>
           <tr>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["email"] ?></td>
            <td><?php echo $value["sdt"] ?></td>
           </tr>
          <?php
            }
        ?>
            <!-- // for ($i = 0; $i < count($mang); $i++) {
            //     echo "<tr>";
            //     echo "<td>" . $mang[$i]['name'] . "</td>";
            //     echo "<td>" . $mang[$i]['email'] . "</td>";
            //     echo "<td>" . $mang[$i]['sdt'] . "</td>";
            //     echo "</tr>";
            // }
            
         -->
        
    </tbody>

</thead>
</table>

</body>
</html>