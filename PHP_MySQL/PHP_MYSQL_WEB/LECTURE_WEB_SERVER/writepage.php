<?php
include "./db.php";
$var = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WRITE</h1>

    <form  action="write_process.php" enctype="multipart/form-data" method="post">
      <p>
        <input type="hidden" name="userid" value="<?=$var?>">
      </p>
      <p>
        <input type="text" name="title" placeholder="title">
      </p>
      <p>
        <textarea name="description" rows="8" cols="80" placeholder="description"></textarea>
      </p>
      <p>
        <input type="file" name="lo_image_link" value="1">
      </p>
        <input type="submit">
    </form>
    <p><a href="./movie_info.php">돌아가기</a></p>
  </body>
</html>
