window.onload = function() {
    setInterval(function() {
        var now = new Date();
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var day = days[now.getDay()];
        var datetime = day + ', ' + now.toLocaleDateString() + ' ' + now.toLocaleTimeString();
        document.getElementById('datetime').innerHTML = datetime;
    }, 1000);
}
