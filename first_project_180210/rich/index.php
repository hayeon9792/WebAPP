<?php
  require("config/config.php");
  require("lib/db.php");
  $conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"] );
  $res = mysqli_query($conn, "SELECT * FROM homepage"); //topic 테이블 가져옴

  /*
  $row = mysqli_fetch_assoc($res); // 조회한 테이블의 첫번째 행을 return,
                                   // 형식은 association(연관배열)
  echo $row['id']."<br>";          // 연관배열 형식이므로, 'id'를 넣으면 "1"
  echo $row['title']."<br>";       // 'title'을 넣으면 "About JavaScription"

  echo "--------------<br>";
  $row = mysqli_fetch_assoc($res); // 두번쨰 실행 시 두번째 행을 가져옴
  echo $row['id']."<br>";
  echo $row['title']."<br>";
  */

 ?>
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />

        <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


  <!--
  <link rel="stylesheet" type="text/css" href="http://localhost/web_project/first_project_180210/rich/style.css">
  -->
  <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="/web_project/first_project_180210/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body id="target">
    <div class="container"> <!-- container-fluid -->
      <header class="jumbotron text-center">
      <!--  <div class="text-center"> -->
        <img src="https://i.pinimg.com/236x/de/52/c6/de52c6486a2125f3635c3ee4739f2326.jpg" alt="리치" class="img-circle" id="logo">
        <h1><a href="/web_project/first_project_180210/rich/index.php">JavaScript</a></h1>
      <!-- </div> -->
      </header>

  <div class="row">
    <nav class = "col-md-3">
      <ol class="nav nav-pills nav-stacked">
        <?php
        while($row = mysqli_fetch_assoc($res)){
          echo '<li><a href="/web_project/first_project_180210/rich/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
        }
         ?>
      </ol>
    </nav>

    <article>
      <?php
      /*
        if(!empty($_GET['id'])) {
          echo file_get_contents($_GET['id'].".txt");
        } else {
          echo file_get_contents("title.txt");
        }
      */
      if(!empty($_GET['id'])){

      $sql = 'SELECT * FROM homepage WHERE id='.$_GET['id']; // SQL문을 변수로 저장해서 사용
      $res = mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($res);

      echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
      echo strip_tags($row['description'],'<h1><h2><h3><li><ol>');
    } else {
      echo file_get_contents("title.txt");
    }
       ?>
         </article>

    <hr> <!-- 수평선 -->

        <div id = "control">
          <div class="btn-group" role="group" aria-label="...">
            <input type="button" class="btn btn-default" value="white" onclick="document.getElementById('target').className='white'"/>
            <input type="button" class="btn btn-default" value="blue"onclick="document.getElementById('target').className='blue'"/>
          </div>

          <a class="btn btn-success btn-lg" href="write.php">글 작성</a>
          <a class="btn btn-success btn-lg" href="write.php">수정</a>
          <a class="btn btn-success btn-lg" href="write.php">삭제</a>

      </div>

  </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="/web_project/first_project_180210/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>
