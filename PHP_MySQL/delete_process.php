<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

$id = mysqli_real_escape_string($conn,$_POST['id']);

$sql = "DELETE FROM topic WHERE id = '{$id}'";
$result = mysqli_query($conn, $sql);

if ($result === false) {
  echo "삭제 실패";
  // C:\xampp\apache\logs 에 mysqli_error($conn)를 통한 DB오류 log 내용을 저장한다.
  echo mysqli_error($conn);
} else {
  echo "<script>alert(\"삭제 성공\");</script>";
  echo "<script>window.location = './index_.php'</script>";
}
 ?>
