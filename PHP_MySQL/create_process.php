<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

// 1 ) 사용자가 입력한 값이 직접 삽입되는 부분으로
// 사용자가 입력한 내용을 mysqli_real_escape_string를 통해 필터링한다.
$filtered = array(
  'title' => mysqli_real_escape_string($conn,$_POST['title']),
  'desc' => mysqli_real_escape_string($conn,$_POST['desc'])
);

$sql = "INSERT INTO topic (title, description, created)
        VALUES ('{$filtered['title']}','{$filtered['desc']}',NOW())";
$result = mysqli_query($conn, $sql);

if ($result === false) {
  echo "저장 실패";
  // C:\xampp\apache\logs 에 mysqli_error($conn)를 통한 DB오류 log 내용을 저장한다.
  error_log(mysqli_error($conn));
} else {
  echo "저장 성공 <br><a href='index_.php'>돌아가기</a>";
}
 ?>
