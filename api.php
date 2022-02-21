<?php
session_start();
  if (isset($_GET['api'])) 
    $post_id = $_GET['api'];
 header("Location: https://gogoplay.io/streaming.php?id=$post_id");
die();
?>
