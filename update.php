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
     <a href="create.php">create</a>
     <?php if (isset($_GET['id'])) { ?>
      <a href="update.php?id=<?= $_GET['id'];?>">update</a>
     <?php } ?>
       <form  action="update_process.php" method="post">
         <p>
           <input type="hidden" name="oldtitle" value="<?php print_title(); ?>">
           <!-- 업데이트 시 타이틀이 미리 작성된 형태로 만든다. -->
           <input type="text" name="title" value="<?php print_title(); ?>">
         </p>
         <p>
           <!-- 업데이트 시 디스크립션이 미리 작성된 형태로 만든다. -->
           <textarea name="desc" rows="8" cols="80">
           <?php print_description();?></textarea>
         </p>
         <p>
           <input type="submit">
   </body>
</html>
