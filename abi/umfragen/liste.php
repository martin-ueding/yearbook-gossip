<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

session_start();
if (empty($_SESSION['benutzer_id']))
	header('location:../index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title></title>
	</head>
	<body>
	
	<h3>Wer ist was?</h3>
	
	<form action="speichern.php" method="post">
	
	<table cellpadding="5">
	<tr>
		<th>Was</th>
		<th>Wer passt?</th>
	</tr>
	
	<?PHP
	include('../../login.inc.php');
	
	$sql = 'SELECT * FROM abi_leute WHERE modus=2 ORDER BY nachname, vorname;';
	$erg = mysql_query($sql);
	while ($l = mysql_fetch_assoc($erg)) {
		$personen[] = array($l['vorname'].' '.$l['nachname'], $l['person_id']);
	}
	
	
	
	$sql = 'SELECT * FROM abi_titel LEFT JOIN abi_stimmen ON stimmen_von='.$_SESSION['benutzer_id'].' && stimmen_fuer=titel_id ORDER BY titel_text;';
	$erg = mysql_query($sql);
	while ($l = mysql_fetch_assoc($erg)) {
		echo '<tr>';
		echo '<td>'.$l['titel_text'].'</td>';
		echo '<td>';
		
		echo '<select name="titel'.$l['titel_id'].'" size="1">';
		echo '<option value="">-</option>';
		foreach ($personen as $person) {
			echo '<option value="'.$person[1].'"';
			if ($person[1] == $l['stimmen_wen'])
				echo ' selected';			
			echo '>'.$person[0].'</option>';
		}
		echo '</select>';
		
		echo '</td>';
		echo '</tr>';
	}
	
	?>
	
	<tr>
		<td></td>
		<td><input type="submit" value="Speichern" /></td>
	</tr>
		
	</table>
		
	</form>

	</body>
</html>
