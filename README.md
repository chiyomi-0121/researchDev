# GitHub URL
    'https://github.com/chiyomi-0121/researchDev.git'

# フォルダの構成
    'index.php'...トップ画面
    'gwSample.html'...GWサンプル画面

# DBの構成   
    WORDLIST
        id...言葉ID primary INT AUTO_INCREMENT
        content...内容 VARCHAR(64)
        createUID...作成ユーザID INT

    ALLIDEAS
        ideaID...アイデア番号 primary INT AUTO_INCREMENT
        ideaDetail...アイデア詳細 VARCHAR(255)
        creatUID...作成ユーザID INT

    USERDATA
        uid...ユーザID primary INT AUTO_INCREMENT
        name...ユーザ名 VARCHAR(32)
