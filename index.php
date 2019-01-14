<?php
include_once('db.php');
$query = "SELECT * FROM tbl_posts ORDER BY post_id ASC";
    $result = mysqli_query($connect,$query);
?>
<html>
    <head>
        <title>Home</title>
    <head>
        <body>
            <?php 
            while($data = mysqli_fetch_array($result)) {
                ?>
            <p>
post id : <?php echo $data['post_id']; ?>
<br>
title : <?php echo $data['post_title']; ?>
<br>
description : <?php echo $data['post_description']; ?>
<br>
post : <a href="id.php?id=<?php echo $data['post_id']; ?>">view</a>
            </p>
    <p>-------------------------------------------</p>
 <?php } ?>
        </body>
</html>