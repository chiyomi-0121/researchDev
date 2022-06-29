<?php 
    require_once 'private/bootstrap.php';
    require_once 'private/dbSample.php';
  
    /** @var PDO $dbh データベースハンドラ */

    $statement = $dbh->prepare('SELECT ideaDetail, name FROM ideas 
                                INNER JOIN userdata ON createUID = userdata.uid');
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>結果</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h1>結果</h1>
        </div>
        <div id="main">
            <div id="tableArea">
                <table class="resultData">
                    <thead>
                    <tr>
                        <th>作成者</th><th>内容</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $result){ ?>
                            <tr>
                                <td><?= $result['name'] ?></td>
                                <td><?= $result['ideaDetail'] ?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="footer">
            (;´･ω･)
        </div>
    </div>
</body>
</html>