<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

$sql = "SELECT * FROM  topic LIMIT 1000";
$result = mysqli_query($conn, $sql);
$list = '';
// mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수
// mysqli_fetch_array는 순번을 키로 하는 일반 배열과
// 컬럼명을 키로 하는 연관배열 둘 모두 값으로 갖는 배열을 리턴
// _row : 일반배열, _assoc : 연관배열, _array : 일반 배열 + 연관배열;
while ($row = mysqli_fetch_array($result)) {
  // list 변수에 <li> 태그 내용만 담아내 html 내부에서 echo 를 수행시킴
  // $row는 연관배열의 형태로 title의 key 값 내부에 작성한 title의 실제 value 값이 담긴다.
  // 링크 형태로 list를 제공하기 위해서 <a> 태그를 사용해 id를 get방식으로 설정하였다.
  $list= $list."<li><a href=\"index_.php?id={$row['id']}\">{$row['title']}</a></li>";
}

?>

<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>WEB</title>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <?= $list ?>
    </ol>
    <a href="create.php">create</a>
    <h2>Welcome</h2>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit
  </body>
</html>
