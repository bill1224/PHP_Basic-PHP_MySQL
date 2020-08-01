<?php
include "db_info.php";
include "password.php";

$id = $_POST['u_name'];
$pwd = $_POST['pwd'];
session_start();

if(!($id == NULL || $pwd == NULL)){
  $sql = "SELECT * FROM sign_up WHERE u_name ='$id'";
  $result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_array($result);
  $hash_pwd = $row['pwd'];
  if($result->num_rows < 1) {
    echo "<script>alert(\"DOESN'T EXISTS\");</script>";
    //echo "<script>window.location = 'log_up.php'</script>";
  }
  if(password_verify($pwd, $hash_pwd)){
      $_SESSION['u_name'] = $row['u_name'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['pwd'] = password_hash($row['pwd'],PASSWORD_DEFAULT);
      //header("Location:um.php");
  } else {
    echo "<script>alert(\"WRONG ID OR PWD\");</script>";
    //echo "<script>window.location = 'log_up.php'</script>";
  }

} else {
  echo "<script>alert(\"NO VALUES\");</script>";
  //echo "<script>window.location = 'log_up.php'</script>";
}










?>
