<?PHP session_start();
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
	
	<h3>Wer ist was? - Auswertung</h3>
	
	Inzwischen haben sich einige &uuml;ber die Kategorien beschwert. Wenn Du auch ein Problem mit einer bestimmten Kategorie hast, dann <a href="../../kontakt/form.php" target="main">melde Dich</a> bitte, ich nehme die dann raus.
	<br /><br />
	
	<table cellspacing="3" cellspacing="0">
	<tr>
		<th>Was</th>
		<th>1. Platz</th>
		<th>2. Platz</th>
		<th>3. Platz</th>
		<th>4. Platz</th>
		<th>5. Platz</th>
	</tr>
	
	<?PHP
	include('../../login.inc.php');
	
	$sql1 = 'SELECT * FROM abi_titel ORDER BY titel_text;';
	$erg1 = mysql_query($sql1);
	while ($l1 = mysql_fetch_assoc($erg1)) {
		
		echo '<tr>';
		
		echo '<td style="border-bottom: 1px solid #888;">'.$l1['titel_text'].'</td>';
		
		
		$sql = 'SELECT stimmen_wen, count(*), vorname, nachname, person_id FROM abi_stimmen LEFT JOIN abi_leute ON person_id=stimmen_wen WHERE stimmen_fuer='.$l1['titel_id'].' GROUP BY stimmen_wen ORDER BY `count(*)` DESC LIMIT 5;';
		$erg = mysql_query($sql);
		$i = 1;
		while ($l = mysql_fetch_assoc($erg)) {
			echo '<td style="border-bottom: 1px solid #888;">';
			
			if ($l['person_id'] == $_SESSION['benutzer_id'])
				echo '<span style="color: #800;">';
			echo $l['vorname'].' '.$l['nachname'];
			if ($l['person_id'] == $_SESSION['benutzer_id'])
				echo '</span>';
			
			echo ' ('.$l['count(*)'].')</td>';
		}
		
		echo '</tr>';
		
	}
	
	?>
		
	</table>
	<br /><br />
	Die Zahl in Klammern ist die Anzahl der Stimmen f&uuml;r die jeweilige Person.
	<br /><br />
	Du selbst wirst in <span style="color: #800;">rot</span> markiert.

	</body>
</html>
