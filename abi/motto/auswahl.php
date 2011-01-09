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
	
	<h3>Abi Motto w&auml;hlen</h3>
	
	<b>Bitte bis 9.12.2009 abstimmen!</b>
	
	<form action="abstimmen.php" method="post">
	
	<select name="motto" size="1">
	
	<?PHP

	include('../../login.inc.php');
	
	$sql = 'SELECT * FROM abi_mottostimmen WHERE mottostimmen_von='.$_SESSION['benutzer_id'].';';
	$erg = mysql_query($sql);
	$l = mysql_fetch_assoc($erg);
	if (!empty($l['mottostimmen_fuer']))
		$ausgesucht = $l['mottostimmen_fuer'];
		
	$sql = 'SELECT * FROM abi_motto ORDER BY motto_motto';
	$erg = mysql_query($sql);
	while ($l = mysql_fetch_assoc($erg)) {
		echo '<option value="'.$l['motto_id'].'"';
		if ($l['motto_id'] == $ausgesucht)
			echo ' selected';
		echo '>'.$l['motto_motto'].'</option>';
	}
	
	?>
		
	</select>
	
	<input type="submit" value="abstimmen" />
		
	</form>

	</body>
</html>
