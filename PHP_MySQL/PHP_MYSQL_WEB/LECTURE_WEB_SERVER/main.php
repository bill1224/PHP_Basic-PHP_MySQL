<?php
include "./db.php";
$userid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    </style>
  </head>
  <body>
    <h1>VIEW</h1>
    <?php
    $sql = mq("select * from member, writing where member.u_count= writing.u_count AND member.u_count = writing.u_count");
    while($row = $sql->fetch_array()){
      $filtered = array(
        'title' => htmlspecialchars($row['title']),
        'description' => htmlspecialchars($row['description']),
        'file' => htmlspecialchars($row['file']),
        'userid' => htmlspecialchars($row['userid'])
      ); ?>
      <table width="1000" cellpadding="5" cellspacing="2" border="1" align="center" style="table-layout:fixed;">
      <tr>
        <td><p> 제목 : <?= $filtered['title'] ?></p></td>
        <td><p> 내용 : <?= $filtered['description'] ?></p></td>
        <td><p> 이미지 : <?= $filtered['file'] ?></p></td>
        <td><p> 작성자 : <?= $filtered['userid'] ?></p></td>
      </tr>
      </table>
      <?php   }  ?>
      <p><a href="./movie_info.php">돌아가기</a></p>
  </body>
</html>
