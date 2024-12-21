<!-- 2.Kiểm tra điểm học sinh có đủ điều kiện tốt nghiệp
Một trường cấp 3 xét duyệt điểm tốt nghiệp của học sinh thi 3 môn toán, lý và hóa, nếu tổng điểm của 3 môn từ hơn hoặc bằng 15 điểm thì đậu. Trường hợp một trong ba môn bị 1 điểm sẽ bị rớt vì đó là điểm liệt. Hãy sử dụng lệnh if else để viết chương trình này.
Gợi ý: tương tự bài trên, tạo form và nhập 3 điểm toan ly hoa vao.
KIÊM TRA ĐIỂM VÀ HIỆN THỊ LỖI BÊN DƯỚI INPUT của mỗi the
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

        <?php
          
            $err1 = $err2 = $err3 = $msg =  "";
            $diem_toan= $diemly= $diem_hoa = "";
            $tong = 0;
            // kieemr tra form da nhap hay chuwa
            if(isset($_POST["submit"])){
                  //echo "dakick ";
                  //echo "<pre>";
                    $ms = 1;
                  if(empty($_POST["toan"])){
                    $err1 = "nhap diem toan";
                    $ms=2;
                  }
                  if(empty($_POST["ly"])){
                    $err2 = "nhap diem ly";
                    $ms=2;
                  } 
                  if(empty($_POST["hoa"])){
                    $err3 =  "nhap diem hoa";
                    $ms=2;
                  }
                  if($ms==1){
                    //echo "da thanh cong";
                     // Lấy giá trị từ form
                    $diem_toan = $_POST['toan'];
                    $diem_ly = $_POST['ly'];
                    $diem_hoa = $_POST['hoa'];
                    
                    $tong = $diem_toan + $diem_ly + $diem_hoa;
                    // echo $tong;
                    
                    if($diem_toan==1 || $diem_ly==1 || $diem_hoa ==1){
                      echo "da rot vi diem liet";
                     
                     
                   }else{
                          if($tong>=15){
                              echo "dadau";
                          }else{
                              echo "darot";
                          }
                       }
                     }
           
        }   
        ?>


            <form action="" method="POST">
                    <input type="text" name="toan"><br>
                    <p><?php echo $err1; ?></p>
                    <input type="text" name="ly"><br>
                    <p><?php echo $err2; ?></p>
                    <input type="text" name="hoa"><br>
                    <p><?php echo $err3; ?></p>
                    
                    <button type="submit" name="submit">click</button>
            </form>
 </body>
 </html>