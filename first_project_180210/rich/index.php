<?php
  $conn = mysqli_connect('localhost','root','gkdus9792'); // MySQL 접속
  mysqli_select_db($conn, 'webrich'); // DB선택
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
    <link rel="stylesheet" type="text/css" href="http://localhost/web_project/first_project_180210/rich/style.css">
  </head>

  <body id="target">
    <header>
      <img src="https://i.pinimg.com/236x/de/52/c6/de52c6486a2125f3635c3ee4739f2326.jpg" alt="리치">
      <h1><a href="http://localhost/web_project/first_project_180210/rich/index.php">냥냥이의 하루일과</a></h1>
    </header>
    <nav>
    <ol>
      <?php
      while($row = mysqli_fetch_assoc($res)){
        echo '<li><a href="http://localhost/web_project/first_project_180210/rich/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
      }
       ?>
    </ol>
  </nav>

  <div id = "control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="blue"onclick="document.getElementById('target').className='blue'"/>



    <a href="http://localhost/web_project/first_project_180210/rich/write.php">작성</a>
  </div>

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
    echo strip_tags($row['description'],'<a><h1><h2><h3><li><ol>');
  } else {
    echo file_get_contents("title.txt");
  }
     ?>
  </article>

  </body>
</html>