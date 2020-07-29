<?php
// 모듈화
function print_title(){
  // ID 값이 URL에 있다면, h2내에 ID값을 적고, 없으면 Welcome로 대체한다.
  if(isset($_GET['id'])){
    // htmlspecialchars를 이용해서 출력되는 부분의 보안을 철저히 할 수 있다.
    // 방식은 < >를 &lt &gt로 대체 시켜버리는 것
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Welcome";
  }
}
function print_list(){
   // 파일이 추가되면 자동으로 목록을 추가하는 리스트를 만든다.
   // 문법 내용은 PHP_Syntax의 4번 항목
   $list = scandir('../data');

   for ($i=0; $i <count($list) ; $i++) {
     // htmlspecialchars 사용
     $title = htmlspecialchars($list[$i]);
     if($list[$i] != "." && $list[$i] != "..")
     echo "<li><a href=\"index_.php?id=$title\">$title</a></li>\n";
   }
}
function print_description() {
  // ID 값과 동일한 파일명을 찾고 있다면, 내용을 불러오고, 없으면 Hello PHP로 대체한다.
  if(isset($_GET['id'])){
 // 문법 내용은 PHP_Syntax의 5번 항목
  echo htmlspecialchars(file_get_contents("../data/".$_GET['id']));
 } else {
   echo "Hello PHP";
 }
}
?>
