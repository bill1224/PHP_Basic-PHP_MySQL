<!--
1 ) 보안 관련 정보를 추가 한다 .
  1.들어오는 정보의 관련한 보안
  2.출력하는 정보의 관련한 보안

-->

<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

$sql = "SELECT * FROM  topic LIMIT 1000";
$result = mysqli_query($conn, $sql);
$list = '';

// mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수
// mysqli_fetch_array는 순번을 키로 하는 일반 배열과
// 컬럼명을 키로 하는 연관배열 둘 모두 값으로 갖는 배열을 리턴
// _row : 일반배열, _assoc : 연관배열, _array : 일반 배열 + 연관배열;
while ($row = mysqli_fetch_array($result)) {
  // list 변수에 <li> 태그 내용만 담아내 html 내부에서 echo 를 수행시킴
  // $row는 연관배열의 형태로 title의 key 값 내부에 작성한 title의 실제 value 값이 담긴다.
  // 링크 형태로 list를 제공하기 위해서 <a> 태그를 사용해 id를 get방식으로 설정하였다.
  $list= $list."<li><a href=\"index_.php?id={$row['id']}\">{$row['title']}</a></li>";
}

// $article을 먼저 생성해, id 값이 없을때의 title과 description을 미리 지정한다.
$article = array('title'=>'Welcome','description'=>'Hello WEB');
// id값이 있을 때만 아래 내용을 실행한다, id값이 없는 메인페이지는 위의 $article을 따라 실행됨.
if(isset($_GET['id'])){
  // id값을 가진 페이지의 title과 desc를 얻어 해당 페이지에 내용을 불러오는 방법에 대해 설명한다.
  // id를 get방식으로 설정한 페이지에서는, id값을 가진 쿼리문만을 불러오고

  // 1 ) mysqli_real_escape_string : 쿼리를 MySQL로 보내기 전에 항상 데이터를 안전하게 만드는 데 사용
  // 이를통해 SQL injection을(URL를 통해 id값을 삽입하는 것) 차단할 수 있다.
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM  topic WHERE id ={$filtered_id} LIMIT 1000";
  $result = mysqli_query($conn, $sql);
  // 불러온 쿼리문을 레코드로 생성한다.
  $row = mysqli_fetch_array($result);
  // $row에는 레코드 전체의 배열이기 때문에, 사용의 편의를 위해 $article이라는 배열로
  // 필요한 값만을 삽입해 사용한다.
  // $article['title'] = $row['title']; 의 형식을 사용해도 된다.
  $article = array('title'=>$row['title'],'description'=>$row['description']);
}
?>

<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>WEB</title>
  </head>
  <body>
    <h1><a href="index_.php">WEB</a></h1>
    <ol>
      <?= $list ?>
    </ol>
    <a href="create.php">create</a>
    <?php
    if(isset($filtered_id)){ ?>
      <a href="update.php?id=<?=$filtered_id?>">update</a>
    <?php } ?>
    <h2><?= $article['title']; ?></h2>
    <?= $article['description']; ?>
  </body>
</html>
