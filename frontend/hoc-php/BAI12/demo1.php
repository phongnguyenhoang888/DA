<?php
//
        echo "Nam nói\"Cậu ấy đang ăn tối\" ";
        echo "<pre>";
        echo "addcslashes (str, char_list)";
        echo "<pre>";
        // addcslashes ($str, $char_list)
        //Hàm này sẽ thêm dấu gạch chéo (\) đằng trước những ký tự trong chuỗi $str mà ta liệt kê ở $char_list.
    //demo
    echo "<pre>";
    // liet ke cac ky tu thuong a..z;
    echo (addcslashes('hello.net HELLO.NET', 'a..z'));
    echo "<pre>";
    // liet ke cac ky tu HOA A..Z;
    echo (addcslashes('hello.net HELLO.NET', 'A..Z')); 
    echo "<pre>";
    // liet ke het tat ca  a..zA..Z;
    echo (addcslashes('hello.net HELLO.NET', 'a..zA..Z')); 

    echo "<pre>";
    echo "explode ( delimiter , string)";
    echo "<pre>";
    //explode ( $delimiter , $string)
    // Hàm này sẽ chuyển một chuỗi $string thành một mảng các phần tử với ký tự tách mảng là $delimiter.
 
    // <strong>// Chuỗi cần chuyển<br />
    $str = 'hello.net is a website free for you';
        echo $str;
        echo "<pre>";
    // Mỗi khoảng trắng sẽ là một phần tử trong mảng<br />
    var_dump(explode(' ', $str));
      
    echo "<pre>";
    //implode($delimiter, $piecesarray);
    //  Hàm này ngược với hàm explode, nó chuyển một mảng $piecesarray thành chuỗi và mỗi phần tử cách nhau bởi chuỗi $delimiter
    echo implode(' ', array(
        'hellp',
        'xin',
        'chào',
        'các',
        'bạn'
    )); 

    // /
    echo "<pre>";
    //ord ( $string )
    //Hàm này trả về mã ASCII của ký tự đầu tiên trong chuỗi $string.

    echo ord ('Ab');

//===? HÀM ĐẾM KÝ TỰ CHUỖI
    echo "<pre>";
    //strlen($string)
    //Hàm này đếm số ký tự của chuỗi $string.
    echo strlen('hello.net');
    
    echo "<pre>";
    //str_word_count($str)
    //Hàm này trả về số từ trong chuỗi $str.
    echo str_word_count('not ko lllo các  bạn ');
    echo str_word_count('hello xin chào các bạn');

// ===> MÃ HÓA
    //  ==> md5( $str)
    //Hàm này mã hóa chuỗi thành một dãy 32 ký tự (mã hóa md5). 12345
    // demo==>
    echo md5("nguyen thanh hoang phong");

    //sha1($string)
    // Hàm này mã hóa chuỗi thành một dãy 40 ký tự (mã hóa sha1)
    // demo ==>
    echo "<pre>";
    echo sha1("nguyen thanh hoang phong");

// ===> strtolower($str); Chuyển tất cả các ký tự chuỗi $str sang chữ thường
    // DEMO
    echo "<pre>";
    echo strtolower("NGUYEN THANH HOANG PHONG");
    echo "<pre>";
// ===> strtoupper($string ); Chuyển tất cả các ký tự chuỗi $str sang chữ hoa
    // DEMO
    echo "<pre>";
    echo strtoupper("nguyen thanh hoang phong");
    echo "<pre>"; 
// ===> ucfirst( $string ) Chuyển ký tự đầu tiên chuỗi $string sang chữ hoa
    // DEMO
    echo "<pre>";
    echo ucfirst("nguyen thanh hoang phong");
    echo "<pre>"; 
// ===> lcfirst() Chuyển ký tự đầu tiên chuỗi $string sang chữ thường
    //demo
    echo "<pre>";
    echo lcfirst("Nguyen thanh hoang phong");  
    
// ==>trim($string, $ky_tu);Xóa ký tự $ky_tu nằm ở đầu và cuối chuỗi $str, nếu ta không nhập $ky_tu thì mặc định nó hiểu là xóa khoảng trắng.
    echo trim(' hello.net ');
    // kết quả: 'hello.net'
    
    echo trim('hello.neth');
    // kết quả: 'hello.net'

// 
//==> ltrim($string, $ky_tu);
// Tương tự như trim nhưng chỉ xóa bên trái

//==>rtrim($string, $ky_tu)
// Tương tự như trim nhưng chỉ xóa bên phải

//==> nl2br($string)
// Chuyển các ký tự xuống dòng “\n” thành thẻ



//===> Chuyển một mảng hoặc mội đối tượng (classs) sang chuỗi dạng JSON
    $mang = [
        ["name"=>"nguyen thanh hoang phong",
         "age"=>"21",
         "adress"=>"quang nam",
        ]
    ];
    // chuyển đổi mảng sang dạng JSON
    $jsonString = json_encode($mang);
    echo "<pre>";
    echo $jsonString;
    echo "<pre>";
    var_dump($mang);
?>