<!DOCTYPE HTML>
<html>
<head>
    <title>Streamer of the Week</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="header1">
    <h1>Welcome to the Streamer of the Week Page</h1>
</div>
<div class="buttons">
<button class="button1" onclick="newStreamer()">Add New Streamer</button>
<button class="button2"onclick="inactiveStreamer()">Remove Inactive Streamer</button>

<script>
function newStreamer() {
    location.replace("newstreamer.php")
}
</script>
<script>
    function inactiveStreamer() {
        location.replace("inactivestreamer.php")
    }
</script>
</div>
<br>
<div class="WheelButton">
<button class="button3" onclick="randomStreamer()">Spin the Wheel!</button>
<script>
    function randomStreamer() {
        location.replace("streamwheel.php")
    }
</script>
</div>
</body>
</html>