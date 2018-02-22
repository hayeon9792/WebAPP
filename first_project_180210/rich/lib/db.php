<?php
function db_init($host, $duser, $dpw, $dname){
$conn = mysqli_connect($host, $duser, $dpw); // MySQL 접속
mysqli_select_db($conn, $dname); // DB선택
return $conn;
}
?>
