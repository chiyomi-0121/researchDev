var timer_ID;
var time = 600;

var connect_ID;

function minusTime() {
    time--;
    dispTime();
    if (time == 0) {
        clearInterval(timer_ID);
        alert('10分経過しました。');
    }
}

function dispTime() {
    min = Math.floor(time / 60);
    sec = time % 60;
    document.getElementById("min").innerHTML = min;
    document.getElementById("sec").innerHTML = sec;
}

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
                //console.log(list);
                list.forEach(function(data, index){
                    idx = 'L' + index;
                    str = data['name'] + 'さんが「' + data['content'] + '」を思いつきました。';

                    document.getElementById(idx).innerHTML = str;
                });
            })
            .fail(function (XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            })
    }
}

window.onload = function () {
    dispTime();
    timer_ID = setInterval("minusTime()", 1000);
    setInterval("updateTimeLine()",10000);
}

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
                $("#result").text(data);
                document.getElementById("content").value = '';
                updateWords();
            })
            // Ajaxリクエストが失敗した場合
            .fail(function (XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
            });
    });
});

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