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
     <!-- html문은 php문 밖으로 제외시키고 } 부분을
         html문으로 묶어 if문에 포함되게 했다.
        메인페이지에는 업데이트가 뜨지 않도록 만든다. -->
     <?php if (isset($_GET['id'])) { ?>
      <!-- <\?php echo 의 형태로 적어야 하는 경우에는 (주석처리 때문에 이스케이프 넣음)
           아래와 같은 <\?=의 형식으로 적어도 된다.
           업데이트 시에는 업데이트 페이지로 이동했을 때, 해당 ID값을 가져가게 한다. -->
      <a href="update.php?id=<?= $_GET['id'];?>">update</a>
      <!-- 삭제시에는 delete라는 다른 페이지가 필요하지 않다. -->
      <form  action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?php print_title();?>">
        <input type="submit" name="submit" value="delete">
      </form>
     <?php } ?>
     <h2>
       <?php print_title(); ?>
     </h2>
       <?php print_description(); ?>
   </body>
</html>
