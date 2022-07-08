<?php
  require_once 'private/bootstrap.php';
  require_once 'private/dbSample.php';

  session_start();

  /** @var PDO $dbh データベースハンドラ */

  $content = $_POST['content'];
  $userId = $_SESSION['uid'];

  $statement = $dbh->prepare('INSERT INTO ideas (ideaDetail, createUID)
                              VALUES (:content, :createUID)');
  
  $statement->execute([
    'content' => $content,
    'createUID' => $userId
  ]);

?>