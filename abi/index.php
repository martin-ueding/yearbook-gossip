<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title></title>
	</head>
	<body>
	
	Du hast schon einen Account?<br />
	<br />	
	<form action="login/login.php" method="post">
		Email und Passwort:<br/>
		<input name="email" size="20" type="text" /><input type="password" name="passwort" size="20" /><input type="submit" value="Anmelden" />
	</form>

	<br /><br /><hr /><br />
	Du hast noch keinen Account? Dann melde dich bitte hier an:<br /><br/>
	<form action="registrierung/linksenden.php" method="post">
		<table>
			<tr>
				<td>Vorname, Nachname</td>
				<td><input type="text" name="vorname" size="20" /><input type="text" name="nachname" size="20" /></td>
			</tr>
			<tr>
				<td>Passwort</td>
				<td><input type="password" name="passwort" size="20" /></td>
			</tr>
			<tr>
				<td>Emailadresse</td>
				<td><input type="text" name="email" size="20" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Registrieren" /></td>
			</tr>
		</table>
	</form>

	<hr /><br />
	
	<?PHP
	
	include('../login.inc.php');
	
	$sql = 'SELECT count(*) as cnt FROM abi_leute WHERE modus=2';
	$erg = mysql_query($sql);
	$l = mysql_fetch_assoc($erg);
		
	echo $l['cnt'].' Leute registriert.<br />';
	
	$sql = 'SELECT count(*) as cnt FROM abi_oton';
	$erg = mysql_query($sql);
	$l = mysql_fetch_assoc($erg);
		
	echo $l['cnt'].' O-T&ouml;ne geschrieben.<br />';
		
		$sql = 'SELECT count(*) as cnt FROM abi_jahre';
		$erg = mysql_query($sql);
		$l = mysql_fetch_assoc($erg);
			
		echo $l['cnt'].' "In 10 Jahren" geschrieben.<br />';
	
	$sql = 'SELECT count(*) as cnt FROM abi_mottostimmen';
	$erg = mysql_query($sql);
	$l = mysql_fetch_assoc($erg);
		
	echo $l['cnt'].' Stimmen abgegeben.<br />';
	
	
	?>

	</body>
</html>
