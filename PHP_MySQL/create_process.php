<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

$sql = "INSERT INTO topic (title, description, created)
        VALUES ('{$_POST['title']}','{$_POST['desc']}',NOW())";
$result = mysqli_query($conn, $sql);

if ($result === false) {
  echo "저장 실패";
  // C:\xampp\apache\logs 에 mysqli_error($conn)를 통한 DB오류 log 내용을 저장한다.
  error_log(mysqli_error($conn));
} else {
  echo "저장 성공 <br><a href='index_.php'>돌아가기</a>";
}
 ?>
