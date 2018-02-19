<?php
  require("lib/db.php");
  $sql = "INSERT INTO homepage (title, description, author, created) VALUES ('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
  $res = mysqli_query($conn, $sql);

  header('Location: http://localhost/web_project/first_project_180210/rich/index.php');
?>
