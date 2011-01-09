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
	
	<h3>Abimotto - Auswertung</h3>
	<br /><br />
	
	<table cellspacing="3" cellspacing="0">
	<tr>
		<th>Was</th>
		<th>Stimmen</th>
	</tr>
	
	<?PHP
	include('../../login.inc.php');
	
	$sql = 'SELECT motto_motto, count(mottostimmen_fuer) as cnt FROM abi_motto LEFT JOIN abi_mottostimmen ON motto_id=mottostimmen_fuer GROUP BY mottostimmen_fuer ORDER BY cnt DESC;';
	$erg = mysql_query($sql);
	while ($l = mysql_fetch_assoc($erg)) {
		
		echo '<tr>';
		
		
		
		echo '<td style="border-bottom: 1px solid #888;">'.$l['motto_motto'].'</td>';
		echo '<td style="border-bottom: 1px solid #888;">'.$l['cnt'].'</td>';
		
		echo '</tr>';
		
	}
	
	?>
		
	</table>

	</body>
</html>
