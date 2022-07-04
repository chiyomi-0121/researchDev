var startStr;
var startTime;
var endTime;
var now = 0;
var min = 0;
var sec = 0;
var prgTime = 0;

window.onload = function () {
    const url = window.location.href;
    const param = (url.split('?')[1]).split('=')[1]; //(パラメータ部を取得).stTimeParamの値を取得
    startTime = new Date(parseInt(param)); //開始時間のDateオブジェクトを作成
    endTime = new Date(startTime.getTime()); //startTimeのコピー作成
    endTime.setMinutes(endTime.getMinutes() + 10); //終了時間の決定

    calcProgress();
    setInterval("calcProgress()", 1000);
}

function calcProgress() {
    now = new Date();

    //console.log(now.getTime());
    //console.log(endTime.getTime());
    if (parseInt(now.getTime() / 1000) === parseInt(endTime.getTime() / 1000)) {
        if (!alert('終了です。')) {
            window.location.href = "./result.php";
        }
    } else {
        prgTime = parseInt((now.getTime() - startTime.getTime()) / 1000);
        min = 9 - parseInt((prgTime / 60) % 60);
        sec = 60 - parseInt((prgTime % 60));
        if (sec === 60) {
            sec = 0;
        }

        var printTime = min + '分' + sec + '秒';
        //console.log(printTime);

        document.getElementById("min").innerHTML = min;
        document.getElementById("sec").innerHTML = sec;
    }
}

$(function () {
    $("#submit").click(function (event) {
        let content = $("#content").val();
        $.ajax({
            type: "POST",
            url: "ideaRegister.php",
            data: { "content": content },
            dataType: "text"
        })
            // Ajaxリクエストが成功した場合
            .done(function (data) {
                //console.log(data);
                document.getElementById("content").value = '';
                updateWords();
                updateTimeLine();
            })
            // Ajaxリクエストが失敗した場合
            .fail(function (XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            });
    });
});

function updateTimeLine() {
    $.ajax({
        type: "GET",
        url: "../researchDev/update.php"
    })
        .done(function (datas) {
            //console.log("通信");
            var list = JSON.parse(datas);

            var elem = document.getElementById("ListArea");
            var text = '<li class="ListContent">' + list['name'] + 'さんが「' + list['ideaDetail'] + '」を思いつきました。';
            elem.insertAdjacentHTML('afterbegin', text);
        })
        .fail(function (XMLHttpRequest, textStatus, errorThrown) {
            alert(errorThrown);
        })
}

function updateWords() {
    var words1 = new Array("あああ", "いいい", "ううう", "えええ", "おおお");
    var words2 = new Array("パソコン", "便利", "重い", "本", "箱");

    var w1n = Math.floor(Math.random() * 5);
    var w2n = Math.floor(Math.random() * 5);

    //console.log(words1[w1n]);
    //console.log(words2[w2n]);

    document.getElementById("w1").innerHTML = words1[w1n];
    document.getElementById("w2").innerHTML = words2[w2n];
}