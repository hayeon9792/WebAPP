<?php
  $conn = mysqli_connect('localhost','root','gkdus9792'); // MySQL 접속
  mysqli_select_db($conn, 'webrich'); // DB선택
  echo mysqli_real_escape_string($conn, "11'11");
  exit;
  $sql = "SELECT * FROM user WHERE name='".$_GET['name']."' AND password='".$_GET['password']."'";
  echo "확인용 sql문: ".$sql;
  $res = mysqli_query($conn, $sql); //topic 테이블 가져옴
  echo "<br/>";
  //var_dump($res->num_rows);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      if($res->num_rows == "0") {
        echo "아이디 혹은 비밀번호를 확인해주세요.";
      } else {
        echo "로그인 되었습니다.";
      }
     ?>
  </body>
</html>
