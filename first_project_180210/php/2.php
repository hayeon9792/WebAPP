<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      for ($i= $_GET['id']; $i <= 3 ; $i++) {
          echo file_get_contents($i.".txt")."<br>";
      }
     ?>
  </body>
</html>
