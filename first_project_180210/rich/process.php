<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"] );
  $sql = "INSERT INTO homepage (title, description, author, created) VALUES ('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
  $res = mysqli_query($conn, $sql);

  header('Location: /web_project/first_project_180210/rich/index.php');
?>
