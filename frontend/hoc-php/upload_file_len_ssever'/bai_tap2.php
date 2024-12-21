
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body>
    <?php // Xử Lý Upload
  
    // Nếu người dùng click Upload
    if (isset($_POST['uploadclick']))
    {
        // Nếu người dùng có chọn file để upload

        if (!empty($_FILES['avatar']['name']))
        {
		//    var_dump($_FILES['avatar']); //=> xem co gi trong nay
        //    exit;
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
        
            if($_FILES['avatar']){
                $x=1;
                $errror =$_FILES["avatar"]['error'];
                 $anhUpload = $_FILES['avatar']['size'];
                $type = $_FILES['avatar']['type'];
                //var_dump($type);
                 //var_dump($anhUpload);
                $mang_img = ['jpeg','jpg','png'];
                    
            
               $typee = explode('/', $type);

             //casch 2 laay name.png/jpeg/ ...
                        //$type_name = $_FILES['avatar']['name'];
                        // lây đuôi của ảnh 
                        //$type_name_duoi = explode('.', $type_name);
                        //var_dump($type_name_duoi);
                        //  exit;


            //    ///////////////////
               //var_dump ($typee);
              // exit;
                 $anhUpload < 1024 *1024;
                 if($anhUpload >1048576){
                      echo " ảnh quá 1mb";
                      $x=2;
                 }

                 if (!in_array($typee[1], $mang_img)) {
                    echo "Định dạng ảnh không hợp lệ";
                    $x = 2;
                }
                 if($errror>0){
                    echo "anh bi loi";
                    $x=2;
                 }
               
                 
                 if($x==1){
                    // move_uploaded_file: hàm upload file
                    move_uploaded_file($_FILES['avatar']['tmp_name'], './xx/'.$_FILES['avatar']['name']);
                    echo 'File Uploaded';
                }
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
?>
<form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="avatar"/>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form>

</body>
</html>
