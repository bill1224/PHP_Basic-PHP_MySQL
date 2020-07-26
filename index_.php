<?php
function print_title(){
  // ID 값이 URL에 있다면, h2내에 ID값을 적고, 없으면 Welcome로 대체한다.
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_list(){
   // 파일이 추가되면 자동으로 목록을 추가하는 리스트를 만든다.
   // 문법 내용은 PHP_Syntax의 4번 항목
   $list = scandir('./data');
   for ($i=0; $i <count($list) ; $i++) {
     if($list[$i] != "." && $list[$i] != "..")
     echo "<li><a href=\"index_.php?id=$list[$i]\">$list[$i]</a></li>\n";
   }
}
function print_description() {
  // ID 값과 동일한 파일명을 찾고 있다면, 내용을 불러오고, 없으면 Hello PHP로 대체한다.
  if(isset($_GET['id'])){
 // 문법 내용은 PHP_Syntax의 5번 항목
  echo file_get_contents("data/".$_GET['id']);
 } else {
   echo "Hello PHP";
 }
}
?>

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
     <h2>
       <?php print_title(); ?>
     </h2>
       <?php print_description(); ?>
   </body>
</html>
