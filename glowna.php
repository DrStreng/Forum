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
						<td class="xd" style="width: 80%;">Forum</td>
						<td class="xd">Tematy</td>
						<td class="xd">Posty</td>
						
					</tr>
					
						<?php
							$query2 =mysql_query("SELECT * FROM `ogame`");
							while ($row1 = mysql_fetch_array($query2))
							{

								$i=$row1['id'];
								$zlicztematy=mysql_query("SELECT * FROM `tematyogame` WHERE id_kategoria=\"$i\"");
								$zliczpart1 = mysql_num_rows($zlicztematy);
								$zliczposty =mysql_query("SELECT * FROM `postyogame` WHERE id_temat=\"$i\"");
								$zliczpart2 =mysql_num_rows($zliczposty);

								echo "<tr>";
								echo "<td class=\"xd\"><a href = \"tematy.php?id=$i\">".$row1['forum']."</a><br>";
								echo $row1['opis']."</td>"; //opis
								echo "<td class=\"xd3\">".$zliczpart1."</td>"; //tematy
								echo "<td class=\"xd3\">".$zliczpart2."</td>"; // posty
								echo "</tr>";
							}


						?>
					

				</table>
			</div>
		
				
				<br><b>OFF TOPIC</b><hr>
				<div class="tablewew">	
				<table style="text-align: left;" width ="100%">
					<tr>
						<td class="xd" style="width: 80%;">Forum</td>
						<td class="xd">Tematy</td>
						<td class="xd">Posty</td>
					</tr>
					
						<?php
							$query2 =mysql_query("SELECT * FROM `offtopic`"); //offtopic
							while ($row1 = mysql_fetch_array($query2))
							{

								$i=$row1['id'];
								$zlicztematy=mysql_query("SELECT * FROM `temetyofftopic` WHERE id_kategoria=\"$i\"");
								$zliczpart1 =mysql_num_rows($zlicztematy);
								$zliczposty =mysql_query("SELECT * FROM `postyofftopic` WHERE id_temat=\"$i\"");
								$zliczpart2 =mysql_num_rows($zliczposty);

								echo "<tr>";
								echo "<td class=\"xd\"><a href = \"temetyofftopic.php?id=$i\">".$row1['forum']."</a><br>";
								echo $row1['opis']."</td>"; //opis
								echo "<td class=\"xd3\">".$zliczpart1."</td>"; //tematy
								echo "<td class=\"xd3\">".$zliczpart2."</td>"; // posty
								echo "</tr>";
							}


						?>
						
				</table>
			</div>

				<br><b>ADMINISTRACJA</b><hr>
				<div class="tablewew">
					
				<table style="text-align: left;" width ="100%">
					<tr >
						<td class="xd" style="width: 80%;">Forum</td>
						<td class="xd">Tematy</td>
						<td class="xd">Posty</td>
					</tr>
					
							<?php
							$query2 =mysql_query("SELECT * FROM `administracja`");//administracja
							while ($row1 = mysql_fetch_array($query2))
							{

								$i=$row1['id'];
								$zlicztematy=mysql_query("SELECT * FROM `temetyadministracja` WHERE id_kategoria=\"$i\"");
								$zliczpart1 = mysql_num_rows($zlicztematy);
								$zliczposty =mysql_query("SELECT * FROM `postyadministracja` WHERE id_temat=\"$i\"");
								$zliczpart2 =mysql_num_rows($zliczposty);

								echo "<tr>";
								echo "<td class=\"xd\"><a href = \"temetyadministracja.php?id=$i\">".$row1['forum']."</a><br>";
								echo $row1['opis']."</td>"; //opis
								echo "<td class=\"xd3\">".$zliczpart1."</td>"; //tematy
								echo "<td class=\"xd3\">".$zliczpart2."</td>"; // posty
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
</body>
</html>

