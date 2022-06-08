<?php
  require_once 'private/bootstrap.php';
  require_once 'private/dbSample.php';

  /** @var PDO $dbh データベースハンドラ */

  $content = $_POST['content'];

  $statement = $dbh->prepare('INSERT INTO ideas (ideaDetail, createUID)
                              VALUES (:content, :createUID)');
  
  $statement->execute([
    'content' => $content,
    'createUID' => 10
  ]);

?>