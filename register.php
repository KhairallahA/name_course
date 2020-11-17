<?php
session_start();
$first_name = '';
$last_name = '';
$email = '';
$course = '';
$db = mysqli_connect('localhost','root','','alla');


if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // إرسال البيانات
    $sql = "INSERT INTO alla2 (First_name,Last_name,Email,Course)
    VALUES ('$first_name','$last_name','$email','$course')";
    mysqli_query($db,$sql);

    // جلسة
    $_SESSION['user'] = $first_name;

    // كعكة
    setcookie("user",$first_name);

    header("location: buildDB.php");
   
}

?>