<?php require('./lib/print.php'); ?>

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
     <form  action="create_process.php" method="post">
       <p>
         <input type="text" name="title" placeholder="title">
       </p>
       <p>
         <textarea name="desc" rows="8" cols="80" placeholder="description"></textarea>
       </p>
       <p>
         <input type="submit">
       </p>
     </form>
   </body>
</html>
