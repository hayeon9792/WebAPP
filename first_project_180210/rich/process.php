<?php
  $conn = mysqli_connect("localhost","root","gkdus9792");
  mysqli_select_db($conn, "webrich");
  $sql = "INSERT INTO homepage (title, description, author, created) VALUES ('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
  $res = mysqli_query($conn, $sql);

  header('Location: http://localhost/web_project/first_project_180210/rich/index.php');
?>
