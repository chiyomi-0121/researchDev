# GitHub URL
    'https://github.com/chiyomi-0121/researchDev.git'

# フォルダの構成
    'gwSample.html'...GWサンプル画面(htmlのみ)
    'gwSample.php'...GWサンプル画面(php,Ajax適用)
    'ajax_test.php'...Ajaxテスト用コード
    'js/script.js'...JavaScript記述用
    'css/style.css'...スタイルシート
    'private/bootstrap.php'...初めに読み込むphpファイル記述用
    'private/database.php'...DB接続用
    'private/dbsample.php'...DB接続サンプル用
    'private/exception_handler.php'...例外処理用
    'index.php'...トップ画面
    'next.php'...画面遷移確認画面
    'startGW.php'...GW開始画面
    'execGW.php'...GW画面
    'endGW.php'...GW終了画面
    'result.php'...結果画面

# DBの構成   
    WORDLIST
        id...言葉ID primary INT AUTO_INCREMENT
        content...内容 VARCHAR(64)
        createUID...作成ユーザID INT

    IDEAS
        ideaID...アイデア番号 primary INT AUTO_INCREMENT
        ideaDetail...アイデア詳細 VARCHAR(255)
        creatUID...作成ユーザID INT

    USERDATA
        uid...ユーザID primary INT AUTO_INCREMENT
        name...ユーザ名 VARCHAR(32)
