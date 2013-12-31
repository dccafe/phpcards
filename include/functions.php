<?php
function redirect($file) {
  /* Redirect to a different file under the same folder */
  $host = $_SERVER['HTTP_HOST'];
  $path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  header("Location: http://$host$path/$file");
  exit;
}
?>

