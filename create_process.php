<?php
file_put_contents('data/'.$_POST['title'], $_POST['desc']);
header('Location: index_.php?id='.$_POST['title']);
 ?>
