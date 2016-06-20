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
					<b>Tematy</b><hr>
					<div class="tablewew">
						
			<table style="text-align: left;" width ="100%">
					<tr>
						<td class="xd" style="width: 15%;">Napisal</td>
						<td class="xd" style="width: 85%;">Posty</td>
						
					</tr>
						<?php

						$id=$_GET['id'];
						$idkat=$_GET['id_kategoria'];
							
							
			
								 $query2 =mysql_query("SELECT * FROM `postyofftopic` WHERE id_temat = $id and id_kategoria = $idkat");// WHERE id_kategoria = $row0[0]

	 								while ($row1 = mysql_fetch_row($query2))
									{
										

											echo "<tr>";
											echo"<td class=\"xd\">".$row1[2]."</td>";
											echo"<td class=\"xd\">".$row1[3]."</td>";
										
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
	<tr><td class="xd">

	

						<form action=""method ="POST">
								<table>
								<caption>Nowy Post</caption>
								<tr>
									<td >Tresc</td>
									<td > <textarea name="tresc"  rows="5"  cols="50"></textarea></td>
									<td > <input type="submit" name="dodaj"></td>
								</tr>
									</table>
						</form>

	
								<?php
						
									if(isset($_POST['dodaj']))
									{
										if(empty($_POST['tresc']))
										{
										 echo "";
										}
										else{

										$tresc=$_POST['tresc'];
									
										mysql_query("INSERT INTO postyofftopic(id_temat,napisal,tresc,id_kategoria) VALUES (\"$id\",\"$usernick\",\"$tresc\",\"$idkat\")");
										echo ("<meta http-equiv=\"refresh\" content=\"0\">");
										}

									}

																
								?>

		</td></tr>
	

</table>
</div>

<?php
include "stopka.php";
mysql_close();
?>
</table>