<?php
  $conn = mysqli_connect('localhost','root','gkdus9792'); // MySQL 접속
  mysqli_select_db($conn, 'webrich'); // DB선택
  $name = mysqli_real_escape_string($conn, $_GET['name']);
  $password = mysqli_real_escape_string($conn, $_GET['password']);
  $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
  echo "확인용 sql문: ".$sql;
  $res = mysqli_query($conn, $sql); //topic 테이블 가져옴
  echo "<br/>";
  //var_dump($res->num_rows);
?>
<!-- php DB를 사용한 비밀번호 -->
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
