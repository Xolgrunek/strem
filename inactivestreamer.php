<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="inactive.css">
</head>
<body>
<div class=inactiveform>
<form name="inactive" action="remove.php"  onsubmit="return validateForm()" method="post">
    Who is removing a streamer today? <input type="text" name="adminuser"><br>
    Username(Twitch/FB): <input type="text" name="username"><br>
    <input type="submit" value="Submit">
</form>
</div>
    <script>
        function validateForm() {
            let x = document.forms["inactive"]["adminuser"].value;
            if (x == "") {
                alert("Admin user must be named");
                return false;
            }
        }
        </script>
        </body>
</html>