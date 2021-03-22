<?php
    $uname="";
    $pass="";
    if($_SERVER["REQUEST_METHOD"]=="POST"
    {
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        if($uname=="Smith" && $pass= "abcd")
        {
            session_start();
            $_SESSION["user"]=$uname;
            
            header("Location: dashboard.php");
        }
    }    

 

 

?>

 

 

<html>
    <head></head>
    <body>

 

        <form method="POST">
            <input type="text" name="uname"><br>
            <input type="password" name="pass"><br>
            <input type="submit" name="login">
        </form>

 

    </body>
</html>