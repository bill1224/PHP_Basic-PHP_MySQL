<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title></title>
 </head>
 <body>
 <h1><a href="index_.php">WEB</a></h1>
 <ol>
 <?php
  // 파일이 추가되면 자동으로 목록을 추가한다.

  //scandir(파일경로)를 통해 파일 목록을 read 한다.
  // node.js 의 readdir(파일경로, function(err,filelist){})
  $list = scandir('./data');
  /*
   scandir을 통해 배열이 생성되고 0,1 index는 현재, 상위 디렉터리 내용을 포함한다.
    var_dump($list);
  { [0]=> string(1) "."
    [1]=> string(2) ".."
    [2]=> string(3) "CSS"
    [3]=> string(4) "HTML"
    [4]=> string(10) "JavaScript" }
  */
  ?>
 </ol>
 <h2>
 <?php
 // 메인페이지(ID가 없는 페이지)에 접속할 때
 // ID를 불러오는 대신 Welcome으로 대체한다.
 if(isset($_GET['id'])){
   echo $_GET['id'];
 } else {
   echo "Welcome";
 }
 ?>
 </h2>
 <?php
 if(isset($_GET['id'])){
// file_get_contents(파일경로)를 통해 파일 내용을 read 한다.
// node.js 의 fileread(파일경로, 'utf-8', function(err,data){})
 echo file_get_contents("data/".$_GET['id']);
} else {
  echo "Hello PHP";
}
 ?>
 </body>
</html>
