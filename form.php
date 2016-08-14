<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script language="JavaScript" src="https://code.jquery.com/jquery-3.1.0.js"> </script>
    <script language="JavaScript">
        function submit(){
            var username = $('#username').val();
            var email = $('#email').val();

            $.ajax({
                url: "validate_form.php",
                type: "post",
                dataType: "text",
                data: {
                    username: username,
                    email: email
                },
                success: function(result){
                    $('#error').html(result);
                }
            });
        }
        function reset() {
            $("#username").val("");
            $("#email").val("");
            $('#error').html("");
        }
    </script>
</head>
<body>
            <div>Username</div>
            <input type="text" id="username" name="username" value="" title=""/>

            <div>Email</div>
            <input type="text" id="email" name="email" value="" title=""/>
            <input type="submit" name="submit" value="Register" onclick="submit()"/>
            <input type="reset" name="submit" value="Clear" onclick="reset()"/>

<div id="error"></div>
</body>
</html>