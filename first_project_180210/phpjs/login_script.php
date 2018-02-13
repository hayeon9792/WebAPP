<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <script>
      name = prompt("아이디")
      password = prompt("비밀번호");
      if(password == 1111){
        document.write("안녕하세요. " + name + "님");
      } else {
        document.write("아이디/비밀번호를 확인해주세요.");
      }
    </script>
  </body>
</html>
