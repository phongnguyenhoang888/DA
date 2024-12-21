<?php


    //sắp xếp một liên kết mảng như sau theo thứ tự tăng dần và giảm dần của khóa và giá trị và 
    //in ra đoạn text như hình ảnh sau: 


    $mang =[ 
        "hoang"=>"31",
        "nam"=>"29",    
        "tuan"=>"25",
        "tuan1"=>"43"
        
    ];
    echo "<pre>";
   // 
   asort($mang);

   //  var_dump($mang);
   echo "1. Sắp xếp theo value";
    
   
   foreach($mang as $key =>$value){
    
    echo "<pre>";
    //echo $key;
    //echo $value;
     echo "tuoi cua $key"."là ".$value;  
   }
//– sắp xếp các mảng liên kết theo thứ tự tăng dần, theo key.
echo "<pre>";
    echo "2. Sắp xếp theo KEy";
   ksort($mang);
  //var_dump($mang);
  foreach ($mang as $key =>$value){
    echo "<pre>";
    echo "tuoi cua $key"."là ".$value;
  }
// sắp xếp các mảng liên kết theo thứ tự giảm dần, theo value
echo "<pre>";
  echo "3. sắp xếp giảm dần theo value";
  arsort($mang); // sắp xếp giảm dần theo value trong mảng
  foreach($mang as $key => $value){
    echo "<pre>";
    echo "tuoi cua $key"."là ".$value;
  }
// sắp xếp các mảng liên kết theo thứ tự giảm dần, theo KEY
echo "<pre>";
  echo "3. sắp xếp giảm dần theo key";
  krsort($mang); // sắp xếp giảm dần theo value trong mảng
  foreach($mang as $key => $value){
    echo "<pre>";
    echo "tuoi cua $key"."là ".$value;
  }
?>