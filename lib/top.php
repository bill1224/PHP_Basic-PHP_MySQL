<?php
// top를 실행할 때, require를 통해서 print.php의 모듈이 실행되는데
// 그 때 또다시 함수를 정의하게 된다 (동일 함수를 중복정의)
// 그렇게 되면, 모듈을 호출하는 부분에서 오류가 생기게 됨.
// require_once 를 사용해서 가장 먼저 호출될 때만 정의하고
// 그 이후 (top.php의 print.php 모듈을 호출하는 부분) 에는 호출하지 않게 됨
require_once('./lib/print.php'); ?>

<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title> <?php print_title();?> </title>
   </head>
   <body>
     <h1><a href="index_.php">WEB</a></h1>
     <ol>
       <?php print_list();?>
     </ol>
