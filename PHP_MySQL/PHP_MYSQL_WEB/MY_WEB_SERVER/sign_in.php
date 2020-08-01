<?php
include "db_info.php";
include "password.php";

$u_name = $_POST['u_name'];
$pwd = password_hash($_POST['pwd'],PASSWORD_DEFAULT);
$email = $_POST['email'];
$b_day = $_POST['b_day'];
$gender = $_POST['gender'];


if($id == NULL || $u_name == NULL || $pwd == NULL || $email == NULL || $b_day == NULL || $gender == NULL){
  echo "X"."<br>";
  echo "<a href = sign_up.php>back to page</a>"."<br>";
} else {
  echo "Good"."<br>";
}
$check = "SELECT * FROM sign_up where u_name = '$id'";
$result = mysqli_query($mysqli,$check);
  if($result->num_rows == 1){
    echo "used ID"."<br>";
    echo "<a href = sign_up.php>back to page</a>"."<br>";
    exit();
  } else {
    echo "OK"."<br>";
 }
$sql = "INSERT INTO sign_up (u_name, pwd, email, b_day, gender)
        VALUES ('$u_name','$pwd','$email','$b_day','$gender')";
$result = mysqli_query($mysqli,$sql);
if($result){
  echo "sign ip successfully"."<br>";
  header("Location:log_up.php");
} else {
  echo "error occured"."<br>";
  error_log(mysqli_error($mysqli));
}



 ?>
