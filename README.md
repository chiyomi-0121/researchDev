# GitHub URL
    'https://github.com/chiyomi-0121/researchDev.git'

# フォルダの構成
    'css/style_super.css'...管理者用画面スタイルシート
    'css/style.css'...スタイルシート
    'js/script.js'...メイン画面以降のスクリプト
    'js/start_script.js'...スタート画面用スクリプト
    'private/bootstrap.php'...初めに読み込むphpファイル記述用
    'private/database.php'...DB接続用
    'private/dbsample.php'...DB接続サンプル用
    'private/exception_handler.php'...例外処理用
    'sample/ajax_test.php'...Ajaxテスト用
    'sample/gwSample.html'...GWサンプル画面(htmlのみ)
    'sample/gwSample.php'...GWサンプル画面(php,Ajax適用)
    'sample/script_test.js'...JavaScriptテスト用
    'super/timeRegister.html'...開始時間設定画面(管理者用)
    'super/timeSet.php'...開始時間設定処理
    'text/start.txt'...開始時間記述用ファイル
    'index.php'...トップ画面    (未実装)
    'next.php'...画面遷移確認画面   (未実装)
    'startGW.php'...GW開始画面
    'execGW.php'...GW画面
    'result.php'...結果画面
    'update.php'...タイムライン更新用コード
    'ideaRegister.php'...アイデア登録用コード

# DBの構成
    DB名：rdevsample(サンプル用)

    wordlist
        id...言葉ID primary INT AUTO_INCREMENT
        content...内容 VARCHAR(64)
        createUID...作成ユーザID INT

    ideas
        ideaID...アイデア番号 primary INT AUTO_INCREMENT
        ideaDetail...アイデア詳細 VARCHAR(255)
        creatUID...作成ユーザID INT (※サンプル用では10で固定)

    userdata
        uid...ユーザID primary INT AUTO_INCREMENT
        name...ユーザ名 VARCHAR(32)
