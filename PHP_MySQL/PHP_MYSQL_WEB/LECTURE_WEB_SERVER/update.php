<?php
include "./lib/db.php";
$num = $_GET['id'];
$sql = mq("select * from writing where write_num ='".$num."'");
$row = $sql->fetch_array();

?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>UPDATE</h1>

    <form  action="./process/update_process.php" enctype="multipart/form-data" method="post">
      <p>
        <input type="hidden" name="write_id" value="<?=$num?>">
      </p>
      <p>
        <input type="hidden" name="id" value="<?=$row['u_count']?>">
      </p>
      <p>
        <input type="text" name="title" value="<?=$row['title']?>">
      </p>
      <p>
        <textarea name="description" rows="8" cols="80" ><?=$row['description']?></textarea>
      </p>
      <p>
        <input type="file" name="lo_image_link" value="1">
      </p>
        <input type="submit">
    </form>
    <p><a href="./viewAll.php">돌아가기</a></p>
  </body>
</html>
