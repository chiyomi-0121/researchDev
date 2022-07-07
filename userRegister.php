<?php 
    require_once 'private/bootstrap.php';
    require_once 'private/dbSample.php';
  
    session_start();

    /** @var PDO $dbh データベースハンドラ */

    $uname = $_POST['username'];

    $statement = $dbh->prepare('INSERT INTO userdata (name)
                                VALUES (:username)');
    $statement->execute([
        'username' => $uname,
    ]);

    $id = $dbh->lastInsertId();

    $_SESSION['uid'] = $id;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>登録完了</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h1>ユーザ登録完了</h1>
        </div>
        <div id="main">
            <h2>下記の名前で登録が完了しました。</h3>
            <h3 id="printName"><?= $uname ?></h3>
        </div>
        <div id="footer">
            (。-`ω-)
        </div>
    </div>
</body>
</html>

