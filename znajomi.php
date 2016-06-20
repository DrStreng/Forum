<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<?php
include "tabelaglowna.php";
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="glowna.css" >
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
		<title> KAKTUS </title>
	</head>
	<body>
		<table class="table1" >
			<tr><td class="xd">
				<div class="obrazek">
					
						
						SPACE KNIGHTS
						
					
					</div>
				<table style="text-align: left;" width ="100%">
					<tr>
						<td class="xd3"><a href="glowna.php">GLOWNA</a></td>
						<td class="xd3"><a href="znajomi.php">ZNAJOMI</a></td>
						<td class="xd3"><a href="KOSGLOWNY.com">KOSGLOWNY IDK</a></td>
						<td class="xd3"><a href="http://pl.ogame.gameforge.com">OGAME</a></td>
						<td class="xd3"><a href="http://board.pl.ogame.gameforge.com/index.php?page=Portal">OGAME FORUM</a></td>
						<td class="xd3"><a href="wyloguj.php">WYLOGUJ</a></td>
					</tr>
				</table>

					<div class="czas">
						<?php 
							echo "Dzisiaj jest ".date("Y-m-d G:i:s"); echo "<br />"
						?>
					</div>


					

<div class="tablewew">
	<table style="text-align: left;" width="100%">
		<tr><td  class="xd2" >
					<b>OGAME</b><hr>
					<div class="tablewew">
						
			<table style="text-align: left;" width ="100%">
					<tr>
						<td class="xd" style="width: 20%;">Znajomi</td>
						<td class="xd">Email</td>
						
					</tr>
						<?php
								$query2 =mysql_query("SELECT * FROM `user`");
								while ($row1 = mysql_fetch_row($query2))
								{
									echo "<tr>";
									echo "<td class=\"xd\"><b>$row1[1]</b><br />"; //user
									echo "<td class=\"xd\"><b>$row1[3]</b></td>"; //emial
									echo "</tr>";
								}
						?>
					
			 	</table>
			 	</div>

				</td>
				<td class="xd">
					<?php
						INCLUDE "prawemenu.php";
					?>
				</td>

		</tr>
	</table>
</div>

<?php
include "stopka.php";
?>
</table>
