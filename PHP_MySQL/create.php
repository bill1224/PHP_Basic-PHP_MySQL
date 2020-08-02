<!--
1 ) 보안 관련 정보를 추가 한다 .
  1.들어오는 정보의 관련한 보안
  2.출력하는 정보의 관련한 보안

-->


<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

$sql = "SELECT * FROM  topic LIMIT 1000";
$result = mysqli_query($conn, $sql);
$list = '';

while ($row = mysqli_fetch_array($result)) {
  $list= $list."<li><a href=\"index_.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array('title'=>'Welcome','description'=>'Hello WEB');

if(isset($_GET['id'])){
  // 1 ) mysqli_real_escape_string : 쿼리를 MySQL로 보내기 전에 항상 데이터를 안전하게 만드는 데 사용
  // 이를통해 SQL injection을(title 작성을 통해 id값을 삽입하는 것) 차단할 수 있다.
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM  topic WHERE id ={$filtered_id} LIMIT 1000";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article = array('title'=>$row['title'],'description'=>$row['description']);

  // 위의 내용들(리스트 항목생성, 페이지 이동시 title과desc 내용 표시)을
  // index_.php와 같게 create.php에도 적용시켰다.
}
?>

<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>WEB</title>
  </head>
  <body>
    <h1><a href="index_.php">WEB</a></h1>
    <ol>
      <?= $list ?>
    </ol>
    <h2>CREATE</h2>
    <form  action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="title">
      </p>
      <p>
        <textarea name="desc" rows="8" cols="80" placeholder="description"></textarea>
      </p>
      <p>
        <input type="submit">
  </body>
</html>
