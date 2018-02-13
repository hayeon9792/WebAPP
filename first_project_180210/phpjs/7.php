<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
      ul {
        list-style-type: none;
      }
    </style>
  </head>
  <body>
    <h1>javascript</h1>
    <ul>
    <script>
      i = 0;
      while(i<10) {
        document.write("<li>Hello world!</li>");
        i=i+1;
      }
    </script>
  </ul>

    <h1>php</h1>
    <ul>
    <?php
      $num = 0;
      while($num<10){
        echo $num."<li>Hello world!</li>";
        $num = $num + 1;
      }
     ?>
   </ul>
  </body>
</html>
