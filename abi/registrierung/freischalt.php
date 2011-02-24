<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?PHP /* Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de> */ ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title></title>
	</head>
	<body>
	
	<?PHP
	
	include('../../login.inc.php');
	
	$md5 = htmlspecialchars($_GET['code']);
	
	$sql = 'UPDATE abi_leute SET modus=1 WHERE passwort="'.$md5.'";';
	mysql_query($sql);
	
	
	$header = "From:php@martin-ueding.de\r\n";
	$header .= "Reply-To:php@martin-ueding.de\r\n";
	$header .= "return-path:php@martin-ueding.de\n";
	$header .= "Content-type: text/html\r\n";

	// eMail senden
	mail ("mu@martin-ueding.de", "Account freischalten", "", $header);	
	
	?>
	
	Die Emailadresse wurde aktiviert. Der Account muss erst freigeschaltet werden, du wirst benachrichtigt, wenn dieser freigeschaltet ist. Bis demnächst.

	</body>
</html>
