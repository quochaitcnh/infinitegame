document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {
        document.getElementById('contents').style.display = "none";
    } else if (state == 'complete') {
        setTimeout(function () {
            document.getElementById('loading').style.display = "none";
            document.getElementById('contents').style.display = "block";
        }, 1000);
    }
}