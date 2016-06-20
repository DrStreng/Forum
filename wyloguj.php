<?php
session_start();
if(isSet($_SESSION['zalogowany']))
{
        unset($_SESSION['zalogowany']);
}
else
{
        header("Location: index.php");
        exit();
}
if(isSet($_COOKIE[session_name()]))
{
        setcookie(session_name(), ' ', time() - 360);
}
session_destroy();
INCLUDE "index.php";
?>



