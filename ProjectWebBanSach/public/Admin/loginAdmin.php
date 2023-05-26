<?php
session_start();
$kq = "";
if(isset($_POST['dnhapadmin']))//isset dùng để kiểm tra biến đã được khai báo hay chưa
{

    require '../inc/myconnect.php';//kết nối đến MySQL
    $tk = $_POST['email'];
    $mk = $_POST['password'];
    $sql="SELECT * FROM loginadmin  where tendangnhap = '$tk'  and matkhau = '$mk'  ";//thiết lập câu truy vấn chọn tendangnhap, matkhau ở bảng loginadmin
    $result = $conn->query($sql);//chạy truy vấn và đặt dữ liệu vào một biến tên $result
    // echo  $mk;
    if($result->num_rows > 0){//hàm num_rows()sẽ kiểm tra xem có nhiều hơn 0 hàng được trả về hay không.
        while($row = $result->fetch_assoc()) {//while()lặp lặp qua tập kết quả, hàm fetch_assoc()sẽ đặt tất cả kết quả vào một mảng kết hợp
            $_SESSION['tendangnhap'] = $row["tendangnhap"];
            header('Location: index.php');// nếu kiểm tra đúng sẽ điều hướng sang trang index
            $row = $result->fetch_assoc();  
        }         
    }
    else
    {
        $kq ="Thông tin không đúng vui lòng kiềm tra lại";// nếu sai gửi thông báo cho admin
    }

}
?>