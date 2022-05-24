<?php
  $content = $_POST['content'];
  header("Content-type: application/json; charset=UTF-8");
  echo $content;
?>