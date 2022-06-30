<?php
    $time = $_POST['timeset'];
    $date = date("Y/m/d");

    $dateTime = $date . " " . $time;

    file_put_contents("../text/start.txt", $dateTime, FILE_APPEND);
    //var_dump($dateTime);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style_super.css">
    <title>完了画面</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h1>登録完了</h1>
        </div>
        <div id="main">
            <h3>下記の時間に開始時刻をセットしました。</h3>
            <h3 id="printTime"><?= $time ?></h3>
        </div>
        <div id="footer">
            ｵｯｹｰ☆⌒d(´∀｀)ノ
        </div>
    </div>
</body>
</html>