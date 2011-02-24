<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

session_start(); 
if (empty($_SESSION['benutzer_id']))
	header('location:../index.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title></title>
	</head>
	<body>
	
	<h3>Schreibe einen O-Ton f&uuml;r jemand anders</h3>
	
	<form action="speichern.php" method="post">
	
	<table cellpadding="5">
	<tr>
		<th>Name</th>
		<th>Dein O-Ton</th>
	</tr>
	
	<?PHP
	include('../../login.inc.php');
	
	
	
	$sql = 'SELECT * FROM abi_leute LEFT JOIN abi_oton ON oton_von='.$_SESSION['benutzer_id'].' && oton_an=person_id WHERE modus=2  ORDER BY nachname, vorname';
	$erg = mysql_query($sql);
	while ($l = mysql_fetch_assoc($erg)) {
		echo '<tr>';
		echo '<td>'.$l['vorname'].' '.$l['nachname'].'</td>';
		echo '<td><input type="text" size="50" maxlength="255" name="oton'.$l['person_id'].'" value="'.$l['oton_text'].'" /></td>';
		echo '</tr>';
	}
	
	?>
	
	<tr>
		<td></td>
		<td><input type="submit" value="Speichern" /></td>
	</tr>
		
	</table>
		
	</form>
	
	Die Person, &uuml;ber die du schreibst, kann sehen, was du geschrieben hast. Es wird jedoch nicht angezeigt, dass DU es geschrieben hast. Die Person hat langfristig die M&ouml;glichkeit die O-Ton von dir zu l&ouml;schen, falls er nicht gef&auml;llt.

	</body>
</html>
