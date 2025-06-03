#Add New User(Login Required)
<html>
    <head><title>Add new user</title></head>
    <body>
<?php        
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "Please log in to your account";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                iD ：<input type=text name=id><br>
                PWD：<input type=text name=pwd><p></p>
                <input type=submit value=Added> <input type=reset value=Clear>
            </form>
        ";
    }
?>
    </body>
</html>
