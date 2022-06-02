<?php 
    require_once 'private/bootstrap.php';
    require_once 'private/dbSample.php';
  
    /** @var PDO $dbh データベースハンドラ */

    $statement = $dbh->prepare('SELECT * FROM ideas 
                                INNER JOIN userdata ON ideas.createUID = userdata.uid
                                ORDER BY ideaID DESC LIMIT 5');
    $statement->execute();
    $ideaDatas = $statement->fetchAll(PDO::FETCH_ASSOC);

    while($row = $ideaDatas){
        $ideaData[] = array(
            'createUID'=>$row['createUID'],
            'name'=>$row['name'],
            'content'=>$row['ideaDetail']
        );
    }

    $data = json_encode($ideaData);

?>