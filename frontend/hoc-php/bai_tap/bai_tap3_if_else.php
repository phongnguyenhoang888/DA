<!-- 3.Xếp hạng năng lực của học sinh cuối năm
Một trường trung học phổ thông muốn viết chương trình kiểm tra năng lực của học sinh để xét học lực, trường có tổng cộng 6 môn như sau:
Toán
Lý
Hóa
Tiếng Anh
Văn
Lích Sử
Điểm trung bình được tính dựa vào tổng của 6 môn và chia cho 6, và sẽ xếp loại dựa vào yêu cầu sau:
Điểm trung bình bé hơn 5 là học sinh yếu
Điểm trung bình trong khoảng 5 -> 6,4 là học sinh trung bình
Điểm trung bình trong khoảng 6,5 -> 7,9 là học sinh khá
Điểm trung bình lớn hơn 7,9 là học sinh giỏi
Nếu một trong 6 môn dưới 4 điểm thì xếp loại yếu. Lưu ý là phải kiẻm tra thang điểm của mỗi môn phải nằm trong khoảng từ 0 -> 10.
 -->
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
          
            $err1 = $err2 = $err3 = $err4 = $err5 = $err6= $err_total= $msg =  "";
            $total = 0;
            $diem_toan= $diemly = $diem_hoa = $diem_TA= $diem_van= $diem_lichsu ="";
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
                  if(empty($_POST["tienganh"])){
                    $err4 =  "nhap diem TA";
                    $ms=2;
                  }
                  if(empty($_POST["van"])){
                    $err5 =  "nhap diem van";
                    $ms=2;
                  }
                  if(empty($_POST["lichsu"])){
                    $err6 =  "nhap diem lichsu";
                    $ms=2;
                  }
                  }
                  if($ms==1){
                    //echo "da thanh cong";
                     // Lấy giá trị từ form
                    $diem_toan = $_POST['toan'];
                    $diem_ly = $_POST['ly'];
                    $diem_hoa = $_POST['hoa'];
                    $diem_TA = $_POST['tienganh'];
                    $diem_van = $_POST['van'];
                    $diem_lichsu = $_POST['lichsu'];
                    
                    $tong = ($diem_toan + $diem_ly + $diem_hoa + $diem_TA +$diem_van + $diem_lichsu)/6 ;
                    //echo $tong;
                    
                    if($diem_toan<4 || $diem_ly<4 || $diem_hoa<4 ||$diem_TA<4 || $diem_van<4 || $diem_lichsu<4){
                      echo "hanh kiem yeu";
                     
                   }else{
                          if($tong<5){
                              echo "HAnh kiem YEU" .$tong;
                             
                          }elseif($tong>5 && $tong<6.4){
                              echo "hanh kiem TB" .$tong;
                          }elseif($tong>6.5 && $tong <7.9){
                              echo "hanh kiem KHOA" .$tong;
                          } else{
                              echo "HANH KIEM TOT" .$tong;
                          }
                       }
                     }
            
          
        ?>


            <form action="" method="POST">
                    <label for="">diem toan</label>
                    <input type="text" name="toan"><br>
                    <p><?php echo $err1; ?></p>
                    <label for="">diem ly</label>
                    <input type="text" name="ly"><br>
                    <p><?php echo $err2; ?></p>
                    <label for="">diem hoa</label>
                    <input type="text" name="hoa"><br>
                    <p><?php echo $err3; ?></p>
                    <label for="">diem TA</label>
                    <input type="text" name="tienganh"><br>
                    <p><?php echo $err4; ?></p>
                    <label for="">diem van</label>
                    <input type="text" name="van"><br>
                    <p><?php echo $err5; ?></p>
                    <label for="">diem lich_su</label>
                    <input type="text" name="lichsu"><br>
                    <p><?php echo $err6; ?></p>
                    
                    <button type="submit" name="submit">click</button>
            </form>
 </body>
 </html>