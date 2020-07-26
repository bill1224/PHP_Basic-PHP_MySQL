<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    여기서 적어낸 부분들은 배우는 도중 몰랐던 문법을 작성하는 구간으로<br>
    이미 알고 있는 것 외의 문법만을 표시합니다<br>

    <?php
    $b = "<br>"."<br>";

    // 1 ) URL param을 통해 값을 표현하는 방법
    //http://127.0.0.1/PHP/PHP_Syntax_Basic/PHP_Syntax.php?name=PHP
    echo $_GET['name'].$b;

    $string = "Today is gonna be the day
    That they're gonna throw it back to you
    By now you should've somehow


    Realized what you gotta do
    I don't believe that anybody
    Feels the way I do, about you now";
    // 2 ) nl2br()을 이용하면 <pre>처럼 string 개행 상태 그대로 출력한다.
    echo nl2br($string).$b;

    // 3 ) var_dump()를 이용하면 해당 값과 타입 기타 정보를 표시해준다.
    echo var_dump("hello world").$b;

    // 4 ) scandir(파일경로)를 통해 파일 목록을 read 한다.
    // node.js 의 readdir(파일경로, function(err,filelist){})
    /* scandir을 통해 배열이 생성되고 0,1 index는 현재, 상위 디렉터리 내용을 포함한다.
    { [0]=> string(1) "." [1]=> string(2) ".." [2]=> string(3) "CSS"
      [3]=> string(4) "HTML"  [4]=> string(10) "JavaScript" }*/
    $list = scandir('../data');
    echo var_dump($list).$b;

    // 5 ) file_get_contents(파일경로)를 통해 파일 내용을 read 한다.
    // node.js 의 fileread(파일경로, 'utf-8', function(err,data){})
    echo file_get_contents("../data/".$_GET['name']).$b;

    // 6 ) file_put_contents(파일경로, 내용)를 통해 파일을 생성 한다.
    // node.js 의 writeFile(파일경로, 파일 내용, [옵션], function(err,data){})
    file_put_contents('data/'.$_POST['title'], $_POST['desc']);

    // 7 ) rename($old_name, $new_name [, $context])을 통해 파일명을 수정한다.
    // node.js의 fs.rename('old_name','$new_name', function(err,data){})
    rename('data/'$_POST['oldtitle'],'data/'$_POST['title']);


    /* 8 ) header() 함수는 모든 것에 상관없이 실제 출력 전에 콜되어야 한다
    파라메터 - string
    HTTP/ - 이 헤더는 송신하는 HTTP 스테이터스코드를 표시하기 위해 사용
    ex - header("HTTP/1.0 404 Not Found");
    Location: - 이 헤더는 브라우저를 리다이렉트(302)를 위해 사용
    ex - header("Location:http://www.google.com");
    */
    header($header [, $replace, $http_response_code]);



     ?>
  </body>
</html>
