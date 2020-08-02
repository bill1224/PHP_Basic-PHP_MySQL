<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

$filtered = array(
  'id' => mysqli_real_escape_string($conn,$_POST['id']),
  'title' => mysqli_real_escape_string($conn,$_POST['title']),
  'desc' => mysqli_real_escape_string($conn,$_POST['desc'])
);

$sql = "UPDATE topic SET title = '{$filtered['title']}', description = '{$filtered['desc']}'
        WHERE id = '{$filtered['id']}'";
$result = mysqli_query($conn, $sql);

if ($result === false) {
  echo "변경 실패";
  // C:\xampp\apache\logs 에 mysqli_error($conn)를 통한 DB오류 log 내용을 저장한다.
  echo mysqli_error($conn);
} else {
  echo "<script>alert(\"변경 성공\");</script>";
  echo "<script>window.location = 'index_.php?id=".$filtered['id']."'</script>";
}
 ?>
