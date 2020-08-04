<?php
include $_SERVER['DOCUMENT_ROOT']."/PHP_Basic-PHP_MySQL/PHP_MySQL/PHP_MYSQL_WEB/LECTURE_WEB_SERVER/db.php";
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>영화 정보</title>
  </head>
  <body>
    <div class="">
      <nav>
        <ul>
          <li><a class="menuLink" href="main.php">LOGO</a> </li>
          <li><a class="menuLink" href="writepage.php">글쓰기</a> </li>
          <li><a class="menuLink" href="view.php">마이페이지</a> </li>
          <li><a class="menuLink" href="logout.php">로그아웃</a> </li>
        </ul>
      </nav>
    </div>
		<!-- 목록, 수정, 삭제 -->
		<!-- <div id="bo_ser">
			<ul>
				<li><a href="/page_admin/movie_list.php">[목록으로]</a></li>
				<li><a href="/page_admin/movie_modify.php?idx=<?php echo $movie_info['m_idx']; ?>">[수정]</a></li>
				<li><a href="/page_admin/movie_delete.php?idx=<?php echo $movie_info['m_idx']; ?>">[삭제]</a></li>
			</ul>
		</div> -->

    </body>
</html>
