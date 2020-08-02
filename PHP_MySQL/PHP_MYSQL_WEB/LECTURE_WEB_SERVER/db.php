<!--
in test (database)

CREATE TABLE `member`
( `u_count` int(15) NOT NULL, `userid` varchar(18) NOT NULL, `userpw` varchar(60) NOT NULL, `name` varchar(18) NOT NULL,
`age` int(5) NOT NULL, `sex` varchar(10) NOT NULL, `code` varchar(2) NOT NULL DEFAULT 'U' )
ENGINE=InnoDB DEFAULT CHARSET=latin1;

-->

 <?php
  session_start();

  $db = new mysqli("localhost","root","","test");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>
