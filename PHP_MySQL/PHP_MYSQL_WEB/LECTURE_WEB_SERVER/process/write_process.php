<?php
include "../lib/db.php";

$title = $_POST['title'];
$desc = $_POST['description'];
$tmpfile = $_FILES['lo_image_link']['tmp_name'];
$o_name = $_FILES['lo_image_link']['name'];
$filename = iconv("UTF-8","EUC-KR",$_FILES['lo_image_link']['name']);
$folder = "../file/".$filename;
$vall = move_uploaded_file($tmpfile,$folder);

$u_id = $_POST['userid'];

$sql = mq("select * from member where userid='".$u_id."'");
$member = $sql->fetch_array();

if(isset($title)&&isset($desc)&&isset($u_id)){
$sql = mq("insert into writing (title,description,file,u_count) values('".$title."','".$desc."','".$o_name."','".$member['u_count']."')");
 echo "<script>alert('OK.')</script>";
 echo "<script>window.location = '../viewAll.php'</script>";
} else {
  echo mysqli_error($db);
	echo "<script>alert(\"NO.\");</script>";
	echo "<script>window.location = '../writepage.php'</script>";
}



 ?>
