<?php
include_once('db.php');
$id = $_GET['id'];
$query = "SELECT * FROM tbl_posts WHERE post_id = $id";
    $result = mysqli_query($connect,$query);
    while($data = mysqli_fetch_array($result)) {
?>
<html>
    <head>
        <title><?php echo $data['post_title']; ?></title>
    <head>
        <body>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
                    <p>-------------------------------------------</p>
            <p>
post id : <?php echo $data['post_id']; ?>
<br>
title : <?php echo $data['post_title']; ?>
<br>
description : <?php echo $data['post_description']; ?>
<br>
<?php $next_data = $data['post_id'];
$next = $next_data+1;
?>
post : <a href="id.php?id=<?php echo $next ?>">NEXT</a>
            </p>
    <p>-------------------------------------------</p>
            </center>
        </body>
</html>
<?php } ?>