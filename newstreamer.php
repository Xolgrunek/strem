<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="newstrem.css">
</head>
<body>
<div class=newstreamerform>
<form name="newstreamer" action="add.php"  onsubmit="return validateForm()" method="post">
    Who is adding a streamer today? <input type="text" name="adminuser"><br>
    Username(Twitch/FB): <input type="text" name="username"><br>
    Stream Link: <input type="url" name="streamlink"><br>
    <input type="submit" value="Submit">
</form>
</div>
    <script>
        function validateForm() {
            let x = document.forms["newstreamer"]["adminuser"].value;
            if (x == "") {
                alert("Admin user must be named");
                return false;
            }
        }
        </script>
        </body>
</html>