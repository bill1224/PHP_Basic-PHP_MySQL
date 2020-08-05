<?php
include "../lib/db.php";
$num = $_GET['id'];

if(isset($num)) {
$sql = mq("select * from writing where write_id ='".$num."'");
$row = $sql->fetch_array();
var_dump($row['file']);
unlink('../file/'.$row['file']);
$sql = mq("delete from writing where write_id ='".$num."'");
 echo "<script>alert('OK.')</script>";
 echo "<script>window.location = '../viewAll.php'</script>";
} else {
  echo mysqli_error($db);
	echo "<script>alert(\"NO.\");</script>";
	echo "<script>window.location = '../writepage.php'</script>";
}



 ?>
