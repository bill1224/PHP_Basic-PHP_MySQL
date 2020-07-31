<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>니 아이디 : <?=$_SESSION['u_id'];  ?></h1>
    <h1>니 이메일 : <?=$_SESSION['email']; ?></h1>
    <h1>니 비번 : <?=$_SESSION['pwd']; ?></h1>

  </body>
</html>
