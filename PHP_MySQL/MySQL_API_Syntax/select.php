<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

// 불러오는 데이터 수를 LIMIT을 통해 제한할 수 있다.
$sql = "SELECT * FROM  topic LIMIT 1000";
// mysqli_query는 전송에 실패 했을 때 query가 SELECT, SHOW, DESCRIBE or EXPLAIN라면
// false가 아닌 mysqli_result의 Object를 return한다.
// https://www.php.net/manual/en/class.mysqli-result.php
$result = mysqli_query($conn, $sql);

// mysqli_result객체의 내부 값에 접속 할 때 -> 를 이용한다.
// PHP의 객체 내부의 값에 접속 할 때는 . 아니라 ->를 쓰는 것 같다..?
var_dump($result->num_rows);

 ?>
