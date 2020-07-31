<?php
include "db_info.php";

$id = $_POST['u_id'];
$pwd = $_POST['pwd'];
session_start();

if(!($id == NULL || $pwd == NULL)){
  $sql = "SELECT * FROM sign_up2 WHERE u_id ='$id'";
  $result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_array($result);

  if($result->num_rows < 1) {
    echo "<script>alert(\"DOESN'T EXISTS\");</script>";
    echo "<script>window.location = 'log_up.php'</script>";
  }
  if($id == $row['u_id'] && $pwd == $row['pwd']){
      $_SESSION['u_id'] = $row['u_id'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['pwd'] = password_hash($row['pwd'],PASSWORD_DEFAULT);
      header("Location:um.php");
  } else {
    echo "<script>alert(\"WRONG ID OR PWD\");</script>";
    echo "<script>window.location = 'log_up.php'</script>";
  }

} else {
  echo "<script>alert(\"NO VALUES\");</script>";
  echo "<script>window.location = 'log_up.php'</script>";
}










?>
