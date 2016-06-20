
<?php
if(!$db_link = mysql_connect("localhost","s11772","Daw.Stre")){
	exit("wystapil blad");
}else{
	echo "";
}
if(!mysql_select_db('s11772',$db_link)){
	echo "wystapil blad podczas wyboru bazy danych";
}else{echo "";}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
	  <HEAD>
		<title>FORUM</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		
	  </HEAD>
	  <BODY>

	  		<h1 style="text-align: center;"> SPACE KNIGHTS </h1>
	  		<table >
	  			<tr>
	  				<td>
	  					<form action = "index.php" method = "POST">
	  					<TABLE>
		  					<CAPTION>Rejestracja</CAPTION>
		  					<tr><td >Uzytkownik:</td></tr>
		  						<tr><td><input type="text" name="userR" /></td></tr>
		  					<tr><td>Haslo:</td></tr>
		  						<tr><td><input type="password" name="hasloR" /></td></tr>
		  					<tr><td>Adres e-mail:</td></tr>
		  						<tr><td><input type="text" name="emailR" /></td></tr>
		  					<tr><td><input type="submit" name="Zarejestruj" /></td></tr>	
	  				</TABLE>
	  				</form>
	  			</td>
	  			<td>

				<form action = "index.php" method = "POST">
	  			<table>
	  				<CAPTION>Logowanie</CAPTION>
	
	  				<tr>
	  					<td><input type="text" name="user" /><td/>
	  					<td>Uzytkownik:</td>
	  				</tr>
	  				<tr>
	  					<td><input type="password" name="haslo" /><td/>
	  					<td>Haslo:</td>
	  				</tr>
	  				<tr>
	  					<td><input type="submit" value="Zaloguj" />
	  					</td>
	  				</tr>
	  			</table>
	  		</form>
<?php

if(isset($_POST['Zarejestruj']))
{
	$userRejestruj =$_POST['userR'];
	$hasloRejestruj=$_POST['hasloR'];
	$emailRejestruj=$_POST['emailR'];
	mysql_query("INSERT INTO user( user, haslo, email) VALUES ( \"$userRejestruj\", \"$hasloRejestruj\", \"$emailRejestruj\")");
	
}

session_start();

if(isSet($_SESSION['zalogowany']))
{
        header("Location: glowna.php");
        exit();
}

else if(isSet($_POST['user']) and isSet($_POST['haslo']))
{
	$zmienna=$_POST['user'];
	$query = mysql_query("SELECT * FROM `user` where user = \"$zmienna\"");
	while ($row = mysql_fetch_row($query))
	{
		$row[0]; //id
		$row[1]; //user
		$row[2]; //haslo
		$row[3]; //email

		if($_POST['haslo'] == $row[2])
	        {
	                $_SESSION['zalogowany'] = $row[1];
	                header("Location: glowna.php");
	                exit();
	        }
	        else
	        {
	                $komunikat = "Blad logowania!";
	        }
	}

}

	  			 		#to odpowiada za wyswietlnie komunikatu bledu w przypadku zlego logowania
	  			 		if(isSet($komunikat)):?>
						<div>
							<?php echo $komunikat; ?>
						</div>
						<?php endif; ?>

	  			</td>
	  			</tr>
	  		
	  		</table>
	  </BODY>
</HTML>

<?php
if(!mysql_close($db_link)){
	echo "wystapil blad zamykania polaczenia z serwerem";
}


?>