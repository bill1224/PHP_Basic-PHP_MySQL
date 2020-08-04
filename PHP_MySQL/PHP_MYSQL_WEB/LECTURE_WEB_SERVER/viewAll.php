<?php
include "./lib/db.php";
include "./lib/list.php";
$userid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/list.css"/>
  </head>
  <body>
    <h1>VIEW ALL</h1>
    <?= $list; ?>
    <?php
    $sql = mq("select * from member, writing where member.u_count= writing.u_count AND member.u_count = writing.u_count");
    while($row = $sql->fetch_array()){
      $filtered = array(
        'title' => htmlspecialchars($row['title']),
        'description' => htmlspecialchars($row['description']),
        'file' => htmlspecialchars($row['file']),
        'userid' => htmlspecialchars($row['userid'])
      ); ?>
      <table class="list" cellpadding="5" border="1" align="center">
      <tr class="tltle">
          <th>Title</th>
          <th>Contents</th>
          <th>Image</th>
          <th>Writer</th>
      </tr>
      <tr class="value">
        <td><p><?= $filtered['title'] ?></p></td>
        <td><p><?= $filtered['description'] ?></p></td>
        <td><p><img src="./file/<?= $filtered['file'] ?>" alt="이미지 없음"></p></td>
        <td><p><?= $filtered['userid'] ?></p></td>
      </tr>
      </table>
      <?php   }  ?>
  </body>
</html>
