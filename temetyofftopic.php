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
						<td class="xd" style="width: 80%;">Temat</td>
						<td class="xd">Posty</td>
						
					</tr>
						<?php

						$id=$_GET["id"];
							

			
								 $query2 =mysql_query("SELECT * FROM `temetyofftopic` WHERE id_kategoria = $id");

	 								while ($row1 = mysql_fetch_row($query2))
									{
										$i=$row1[4];
										$p=$row1[0];
										$zliczposty =mysql_query("SELECT * FROM `postyofftopic` WHERE id_temat=\"$i\" and id_kategoria= \"$p\"");
										$zliczpart1 =mysql_num_rows($zliczposty);	

											echo "<tr>";
											echo "<td class=\"xd\"><a href = \"posty2.php?id=$i&amp;id_kategoria=$p \">".$row1[1]. "</a><br>";
											echo "$row1[2]</td>"; //opis
											echo "<td class=\"xd\">".$zliczpart1."</td>"; //posty	
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
								
								<tr>
									<td >Nazwa</td>
									<td > <input type="text" name="nazwa"></td>
									<td >Opis</td>
									<td > <textarea name="tresc"  rows="5"  cols="50"></textarea></td>
									<td > <input type="submit" name="dodaj"></td>
								</tr>
								</table>
						</form>

		
								<?php
								
									if(isset($_POST['dodaj']))
									{
										if(empty($_POST['nazwa']))
										{
											echo "";
										}
										else{

										$nazwa=$_POST['nazwa'];
										$tresc=$_POST['tresc'];
										$idkat=$id;
									
										$zmienna=mysql_query("INSERT INTO temetyofftopic(nazwa,opis,id_kategoria) VALUES (\"$nazwa\",\"$tresc\",\"$idkat\")");
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