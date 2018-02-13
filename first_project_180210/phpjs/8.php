<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>javascript</h1>
    <ul>
    <script>
      list = new Array("one", "two", "three");
      for (var i = 0; i < list.length; i++) {
        document.write("<li>"+list[i]+"</li>");
      }
    </script>
    </ul>

    <h1>php</h1>
    <?php
      $list = array("one", "two", "three");
      for ($i=0; $i <count($list) ; $i++) {
        echo "<li>".$list[$i]."</li><br />";
      }
    ?>
  </body>
</html>
