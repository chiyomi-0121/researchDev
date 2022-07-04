<?php 
    require_once 'private/bootstrap.php';
    require_once 'private/dbSample.php';
  
    /** @var PDO $dbh データベースハンドラ */

    $statement = $dbh->prepare('SELECT ideaID, ideaDetail, name FROM ideas 
                                INNER JOIN userdata ON createUID = userdata.uid
                                ORDER BY ideaID DESC LIMIT 1');
    $statement->execute();
    $ideaDatas = $statement->fetch(PDO::FETCH_ASSOC);

    $data = json_encode($ideaDatas); //json形式にエンコード

    //var_dump($data);
    echo $data; //script.jsにデータを渡す

?>