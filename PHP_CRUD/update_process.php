<?php
 rename('../data/'.$_POST['oldtitle'],'../data/'.$_POST['title']);
 file_put_contents('../data/'.$_POST['title'], $_POST['desc']);
 header("Location: index_.php?id=".$_POST['title']);
 ?>
