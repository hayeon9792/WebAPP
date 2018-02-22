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
  <link rel="stylesheet" type="text/css" href="/web_project/first_project_180210/rich/style2.css">
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

    <div class="col-md-9">
      <article>
        <form action="process.php" method="post">

          <div class="form-group">
            <label for="form-title">제목</label>
            <input type="text" class="form-control" name = "title" id="form-title" placeholder="제목 입력">
          </div>

          <div class="form-group">
            <label for="form-author">작성자</label>
            <input type="text" class="form-control" name = "author" id="form-author" placeholder="작성자 입력">
          </div>

          <div class="form-group">
            <label for="form-content">본문</label>
            <!-- rows = "10" 본문내용 10문장 크기 -->
            <textarea class="form-control" rows="10" name="description" id="description" placeholder="본문 내용"></textarea>
          </div>

        <!--  <input type="hidden" role="uploadcare-uploader" name="content"
           data-crop="disabled"
           data-images-only="true" /> -->
          <input type="submit" class="btn btn-success" name="name" value="submit">
        </form>
      </article>

    <hr> <!-- 수평선 -->

        <div id = "control">
          <div class="btn-group" role="group" aria-label="...">
            <input type="button" class="btn btn-default" value="white" onclick="document.getElementById('target').className='white'"/>
            <input type="button" class="btn btn-default" value="blue"onclick="document.getElementById('target').className='blue'"/>
          </div>
          <a class="btn btn-warning btn-lg" href="javascript:history.back()">취소</a>
        </div>
      </div>
  </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="/web_project/first_project_180210/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>
