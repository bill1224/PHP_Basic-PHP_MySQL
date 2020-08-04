<?php
	include "../db.php";
	include "./password.php";

	$userid = $_POST['userid'];
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];

if(isset($userid)&&isset($userpw)&&isset($username)&&isset($age)&&isset($sex)){
$sql = mq("insert into member (userid,userpw,name,age,sex) values('".$userid."','".$userpw."','".$username."','".$age."','".$sex."')");
 echo "<script>alert('회원가입이 완료되었습니다.')</script>";
 echo "<script>window.location = 'index.php'</script>";
} else {
	echo "<script>alert(\"필요사항을 기입하지 않았습니다.\");</script>";
	echo "<script>window.location = 'member.php'</script>";
}
?>
