<?php 
    require_once 'private/bootstrap.php';
    require_once 'private/dbSample.php';
  
    /** @var PDO $dbh データベースハンドラ */

    $statement = $dbh->prepare('SELECT * FROM ideas 
                                INNER JOIN userdata ON ideas.createUID = userdata.uid
                                ORDER BY ideaID DESC LIMIT 5');
    $statement->execute();
    $ideaDatas = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($ideaDatas as $ideaData){
        //var_dump($ideaData);

        $ideaList[]=array(
            'uid'=>$ideaData['uid'],
            'name'=>$ideaData['name'],
            'content'=>$ideaData['ideaDetail']
        );
    }

    //var_dump($ideaList);
    //echo count($ideaList);

    $data = json_encode($ideaList); //json形式にエンコード

    //var_dump($data);
    echo $data; //script.jsにデータを渡す

?>