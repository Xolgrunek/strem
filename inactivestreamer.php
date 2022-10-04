<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="inactive.css">
<form name="inactive" action="remove.php"  onsubmit="return validateForm()" method="post">
    Who is adding a new streamer today? <input type="text" name="adminuser"><br>
    Twitch Name: <input type="text" name="twitchname"><br>
    Twitch URL: <input type="text" name="twitchurl"><br>
    Facebook Name: <input type="text" name="fbname"><br>
    Facebook URL: <input type="text" name="fburl"><br>
    <input type="submit" value="Submit">
</form>
    <script>
        function validateForm() {
            let x = document.forms["inactive"]["adminuser"].value;
            if (x == "") {
                alert("Admin user must be named");
                return false;
            }
        }
        </script>
</html>