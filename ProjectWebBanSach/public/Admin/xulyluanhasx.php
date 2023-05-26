<?php
if(isset($_POST['create']))
{
    require '../inc/myconnect.php';
    $name = $_POST['name'];
    $sql="INSERT INTO  nhaxuatban (Ten) 
    VALUES ('$name')";//câu lệnh chèn $name vào cột Ten của bảng nhaxuatban 
    // echo  $mk;
    if (mysqli_query($conn, $sql)) {
        header('Location: qlynhasx.php');//header dùng để chuyển hướng sang trang qlynhasx.php
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

 ?>
 //themnhasx.php
 