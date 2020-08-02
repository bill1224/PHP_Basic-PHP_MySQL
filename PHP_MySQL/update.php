<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");

$sql = "SELECT * FROM  topic LIMIT 1000";
$result = mysqli_query($conn, $sql);
$list = '';

while ($row = mysqli_fetch_array($result)) {
  $list= $list."<li><a href=\"index_.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array('title'=>'Welcome','description'=>'Hello WEB');

if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM  topic WHERE id ={$filtered_id} LIMIT 1000";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
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
    <h2>UPDATE</h2>
    <form  action="update_process.php" method="post">
      <p>
        <input type="hidden" name="id" value="<?= $filtered_id ?>">
      </p>
      <p>
        <input type="text" name="title" value="<?= $article['title'] ?>">
      </p>
      <p>
        <textarea name="desc" rows="8" cols="80"><?= $article['description'] ?></textarea>
      </p>
      <p>
        <input type="submit">
  </body>
</html>
