<?php
if(!$db_link = mysql_connect("localhost","s11772","Daw.Stre")){
	exit("wystapil blad");
}else{
	echo "";
}
if(!mysql_select_db('s11772',$db_link)){
	echo "wystapil blad podczas wyboru bazy danych";
}else{echo "";}

session_start();
if(!isSet($_SESSION['zalogowany']))
{
        header("Location: index.php");
        exit();
}
$usernick = $_SESSION['zalogowany'];

?>

