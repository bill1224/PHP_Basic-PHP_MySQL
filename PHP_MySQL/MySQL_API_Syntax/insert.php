<?php
// PHP에서 지원하는 SQL API는 Mysqli, pdo_mysql, mysql 방식이 있다.
// 이 중에서 mysqli  방식을 이용해서 구성한다.
// mySQL 연동 방식을 함수(procedural)을 사용한다. 이 외에 객체방식이 존재한다.

// 이 Syntax 파일에서는 MYSQL과의 연동 / Query문을 통한 DB의 INSERT 내용을 설명하고 있다.

// mysqli_connect('DB주소', 'USERNAME', "PW", "DatabeseNAME");
// DB주소 : php와 DB가 같은 주소에 있으므로 localhost로 대체한다.
// USERNAME : Mysql에서 사용하는 사용자 이름
// PW : USER의 비밀번호
// DatabeseNAME : 사용할 DB 이름
// mysqli를 이용해 sql을 연동/접속 하는 방법
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

// database query 입력
// mysqli_query(mysqli_connect 반환결과, 쿼리 내용);
// mysqli_query는 query 전송에 실패 했을 때 false를 return한다.
// PHP 내부 식을 이용해서 SQL에 query를 전송하는 방법
$sql = "INSERT INTO topic (title, description, created)
        VALUES ('MySQL','MySQL is ...',NOW())";
$result = mysqli_query($conn, $sql);

// mysqli_error(mysqli_connect 반환결과);
// DB오류 로그를 PHP 내에 반환시키는 방법
// mysqli_query의 반환식을 이용한 제어문
if ($result === false) {
  echo mysqli_error($conn);
}

?>
