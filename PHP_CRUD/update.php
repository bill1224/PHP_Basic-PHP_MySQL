<?php require('../lib/print.php'); ?>

<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title> <?php print_title();?> </title>
   </head>
   <body>
     <h1><a href="index_.php">WEB</a></h1>
     <ol>
       <?php print_list();?>
     </ol>
     <a href="create.php">create</a>
     <?php if (isset($_GET['id'])) { ?>
      <a href="update.php?id=<?= $_GET['id'];?>">update</a>
     <?php } ?>
       <form  action="update_process.php" method="post">
         <p>
           <input type="hidden" name="oldtitle" value="<?php print_title(); ?>">
           <!-- 업데이트 시 타이틀이 미리 작성된 형태로 만든다. -->
           <input type="text" name="title" value="<?php print_title(); ?>">
         </p>
         <p>
           <!-- 업데이트 시 디스크립션이 미리 작성된 형태로 만든다. -->
           <textarea name="desc" rows="8" cols="80">
           <?php print_description();?></textarea>
         </p>
         <p>
           <input type="submit">
   </body>
</html>
