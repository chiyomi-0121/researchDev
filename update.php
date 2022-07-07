<?php 
    require_once 'private/bootstrap.php';
    require_once 'private/dbSample.php';
  
    /** @var PDO $dbh データベースハンドラ */

    $latestNum = filter_input(INPUT_GET, "latestNum");
    
    $statement = $dbh->prepare('SELECT ideaID, ideaDetail, name FROM ideas 
                                INNER JOIN userdata ON createUID = userdata.uid
                                WHERE ideaID > (:num)');
    $statement->execute([
        'num' => $latestNum,
    ]);
    $ideaDatas = $statement->fetchAll(PDO::FETCH_ASSOC);

    $dataList = array();

    foreach($ideaDatas as $ideaData){
        $dataList[] = array(
            'ideaID' => $ideaData['ideaID'],
            'content' => $ideaData['ideaDetail'],
            'name' => $ideaData['name']
        );
    }
    $data = json_encode($dataList); //json形式にエンコード

    //var_dump($data);
    echo $data; //script.jsにデータを渡す

?>