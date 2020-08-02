<!--
저자의 목록을 보여주는 author 페이지로
새 DB를 읽어내는 부분의 관한 내용을 기술한다.
-->

<?php
$conn = mysqli_connect("localhost", "root", "", "opentutorials");


?>

<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>WEB</title>
  </head>
  <body>
    <h1><a href="./index_.php">WEB</a></h1>
    <p><a href="./index_.php">topic</a></p>
    <table border="1">
      <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>PROFILE</td>
        <td colspan="2">UPDATE/DELETE</td>
        <?php
        $sql = "SELECT * FROM author";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          $filtered = array(
            'id' => htmlspecialchars($row['id']),
            'name' => htmlspecialchars($row['name']),
            'profile' => htmlspecialchars($row['profile'])
          );
          ?>
      <tr>
          <td><?= $filtered['id']?></td>
          <td><?= $filtered['name']?></td>
          <td><?= $filtered['profile']?></td>
          <!-- update url을 table 내에 생성하고, 해당하는 id값을 같이 저장함. -->
          <td><a href="author.php?id=<?=$filtered['id']?>">update</a></td>
          <td>
            <form class="" action="delete_process_author.php" method="post">
             <input type="hidden" name="id" value="<?=$filtered['id']?>">
             <input type="submit" value="delete">
          </form></td>
      </tr>
          <?php
        }
         ?>
     </tr>
    </table>
    <?php
    // $_GET['id']가 없을땐, form action이 create_process 페이지로 이동하고
    // submit 버튼이 Create Author로 표시하게 된다.
    // 또한 input과 textarea의 값이 아무것도 없게 된다.
    $formAction = "create_process_author.php";
    $formValue = "Create Author";
    $escaped = array('name' => '','profile' => '');
    if(isset($_GET['id'])){
      $filterd_id = mysqli_real_escape_string($conn,$_GET['id']);
      $sql = "SELECT * FROM author WHERE id = '{$filterd_id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      // $_GET['id']가 있으면, form action이 update_process 페이지로 이동하고
      // submit 버튼이 Update Author로 표시하게 된다.
      // 또한 input과 textarea의 값이 각 실제 값으로 대체된다.
      $escaped['name'] = htmlspecialchars($row['name']);
      $escaped['profile'] = htmlspecialchars($row['profile']);
      $formAction = "update_process_author.php";
      $formValue = "Update Author";
    }
     ?>
    <!-- create 페이지 없이 바로 실행되게 함  -->
    <form action="<?=$formAction ?>" method="post">
      <p><input type="hidden" name="id"value="<?=$filterd_id ?>"></p>
      <p><input type="text" name="name" placeholder="name" value="<?=$escaped['name'] ?>"></p>
      <p><textarea name="profile" placeholder="profile"><?=$escaped['profile'] ?></textarea></p>
      <input type="submit" value="<?=$formValue ?>">
    </form>
    </form>
  </body>
</html>
