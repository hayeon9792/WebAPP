<?php
  require("lib/db.php");
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
        echo '<li><a href="http://localhost/web_project/first_project_180210/rich/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
      }
       ?>
    </ol>
  </nav>

  <div id = "control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="blue"onclick="document.getElementById('target').className='blue'"/>
    <a href="http://localhost/web_project/first_project_180210/rich/write.php">쓰기</a>
  </div>

  <article>
    <form action="process.php" method="post">
      <p>
        제목: <input type="text" name="title" id = "title">
      </p>
      <p>
        작성자: <input type="text" name="author" id= "author">
      </p>
      <p>
        본문: <textarea name="description" id="description"></textarea>
      </p>
      <input type="hidden" role="uploadcare-uploader" name="content"
       data-crop="disabled"
       data-images-only="true" />
      <input type="submit" name="name">
    </form>
  </article>

  <script>
    UPLOADCARE_LOCALE = "ko";
    UPLOADCARE_TABS = "file url facebook gdrive gphotos dropbox instagram evernote flickr skydrive";
    UPLOADCARE_PUBLIC_KEY = "cdbd6bc682173fee40bc";
  </script>

  <script charset="utf-8" src="//ucarecdn.com/libs/widget/3.2.2/uploadcare.full.min.js"></script>

<script>
// role의 값이 uploadcare-uploader인 태그를 업로드 위젯으로 만들어라.
var singleWidget = uploadcare.SingleWidget('[role=uploadcare-uploader]');
// 그 위젯을 통해 업로드가 완료되면,
singleWidget.onUploadComplete(function(info){
  // id = 'description' 인 태그의 값 뒤에 업로드한 이미지 파일의 주소를 이미지 태그와 함께 첨부해라.
  document.getElementById('description').value = document.getElementById('description').value + '<img src="' + info.cdnUrl +'">';
});

</script>

  </body>
</html>
