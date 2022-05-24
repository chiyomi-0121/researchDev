<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>GWサンプル画面</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <h2 class="timer">残り時間 <span id="min"></span>分<span id="sec"></span>秒</h2>
        </div>
        <div id="main">
            <div id="wordArea">
                <div>
                    <span class="word">あああ</span>
                    <span id="symbol">X</span>
                    <span class="word">AAA</span>
                </div>    
            </div>
            <div id="inputArea">
                <input type="text" name="content" id="content">
                <button id="submit">確定</button>
            </div>
            <div id="timeLine">
                <h3>タイムライン</h3>
                <ul>
                    <li>○○さんが「～～～～～～～」を思いつきました。</li>
                    <li>○○さんが「～～～～～～～」を思いつきました。</li>
                    <li>○○さんが「～～～～～～～」を思いつきました。</li>
                    <li>○○さんが「～～～～～～～」を思いつきました。</li>
                </ul>
            </div>
            <div id="myIdea">
                <p id="result"></p>
            </div>
        </div>
        <div id="footer">
             ^^) _旦~~
        </div>
    </div>
    <!--jQuery読み込み(公開するときにminifiedのsrcに書き換える)-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--ここまで-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>