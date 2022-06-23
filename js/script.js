var timer_ID;
var time = 600;

var startStr = "2022/6/23 23:40:00"; //開始時間の設定
var startTime = new Date(startStr); //開始時間をもとに、Dateオブジェクトを作成
var now = 0;
var m = 0;
var s = 0;
var prgTime = 0;

var connect_ID;

window.onload = function () {
    //dispTime();
    calcProgress();
    //setInterval("calcProgress()", 1000);
    timer_ID = setInterval("minusTime()", 1000);
}

function minusTime() {
    time--;
    calcProgress();
    if (time == 0) {
        clearInterval(timer_ID);
        alert('10分経過しました。');
    }
}

function calcProgress() {
    now = new Date();

    prgTime = parseInt((now.getTime() - startTime.getTime()) / 1000);
    m = 9 - parseInt((prgTime / 60) % 60);
    s = 60 - parseInt((prgTime % 60));

    var printTime = m + '分' + s + '秒';

    console.log(printTime);

    document.getElementById("min").innerHTML = m;
    document.getElementById("sec").innerHTML = s;

    /*問題点*/
    //〇分00秒の際に、00秒ではなく60秒と表示される
}

/*function dispTime() {
    min = Math.floor(time / 60);
    sec = time % 60;
    document.getElementById("min").innerHTML = min;
    document.getElementById("sec").innerHTML = sec;
}*/

$(function () {
    $("#submit").click(function (event) {
        let content = $("#content").val();
        $.ajax({
            type: "POST",
            url: "ajax_test.php",
            data: { "content" : content},
            dataType: "text"
        })
            // Ajaxリクエストが成功した場合
            .done(function (data) {
                console.log(data);
                //$("#result").text(data);
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

function updateTimeLine(){
    if(time == 0){
        clearInterval(connect_ID);
    }else{ 
        $.ajax({
            type: "GET",
            url: "../researchDev/update.php"
        })
            .done(function(datas){
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
}

function updateWords(){
    var words1 = new Array("あああ", "いいい", "ううう", "えええ", "おおお");
    var words2 = new Array("AAA", "BBB", "CCC", "DDD", "EEE");

    var w1n = Math.floor( Math.random() * 5 );
    var w2n = Math.floor( Math.random() * 5 );

    //console.log(words1[w1n]);
    //console.log(words2[w2n]);

    document.getElementById("w1").innerHTML = words1[w1n];
    document.getElementById("w2").innerHTML = words2[w2n];
}