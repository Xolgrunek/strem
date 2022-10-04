<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="newstrem.css">
</head>
<body>
<div class=newstreamerform>
<form name="newstreamer" action="add.php"  onsubmit="return validateForm()" method="post">
    <p>Who is adding a streamer today? <span style="color:red">*</span><input type="text" name="adminuser" placeholder="(example)TheRev_Gaming"></p>
    <p>Username(Twitch/FB): <input type="text" name="username" placeholder="(example)Shroud"></p>
    <p>Stream Link: <input type="url" name="streamlink" placeholder="(example)https://twitch.tv/shroud"></p>
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