var time;
var now;

window.onload = function () {
    readTime();
    setInterval("timer()", 1000);
};

function readTime() {
    $.ajax({
        type: "GET",
        url: "../researchDev/readText.php"
    })
        .done(function (str) {
            //console.log(str);
            time = new Date(str);
        })
        .fail(function (XMLHttpRequest, textStatus, errorThrown) {
            alert(errorThrown);
        })
}

function timer() {
    var now = new Date();
    //console.log(time.getTime());
    //console.log(now.getTime());
    if (parseInt(now.getTime() / 1000) === parseInt(time.getTime() / 1000)) {
        const url = "../researchDev/execGW.php";
        var param = "?stTimeParam=" + time.getTime();
        window.location.href = url + param;
    }
}
