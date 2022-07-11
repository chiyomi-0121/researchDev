<?php
    require_once 'private/bootstrap.php';
    require_once 'private/dbSample.php';
  
    /** @var PDO $dbh データベースハンドラ */

    $statement = $dbh->prepare("SELECT COUNT(*) FROM wordlist");
    $statement->execute();
    $words = $statement->fetchColumn()

?>