<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="http://localhost/web_project/first_project_180210/css/style.css">
  </head>
  <body id="target">
    <header>
      <h1><a href="http://localhost/web_project/first_project_180210/html/index.php">냥냥이의 하루일과</a></h1>
    </header>
    <nav>
    <ol>
      <?php
        echo file_get_contents("list.txt");
       ?>
    </ol>
  </nav>

  <div id = "control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="blue"onclick="document.getElementById('target').className='blue'"/>
  </div>

  <article>
    <?php
      if(!empty($_GET['id'])) {
        echo file_get_contents($_GET['id'].".txt");
      } else {
        echo file_get_contents("title.txt");
      }
     ?>
  </article>

  </body>
  </html>
