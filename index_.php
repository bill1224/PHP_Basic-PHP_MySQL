<?php require_once('./lib/print.php');
      require('./lib/top.php');
 ?>


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
