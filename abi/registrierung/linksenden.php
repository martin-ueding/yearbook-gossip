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
	
	// Variablen einlesen
	$vorname = htmlspecialchars($_POST['vorname'], ENT_QUOTES, "UTF-8");
	$nachname = htmlspecialchars($_POST['nachname'], ENT_QUOTES, "UTF-8");
	$email = htmlspecialchars($_POST['email'], ENT_QUOTES, "UTF-8");
	$passwort = htmlspecialchars($_POST['passwort'], ENT_QUOTES, "UTF-8");	


	// Wenn man nix eingibt, klappt es nicht
	if (empty($vorname))
		$err[] = 'Es wurde kein Vorname angegeben.';
	if (empty($nachname))
		$err[] = 'Es wurde kein Nachname angegeben.';
	if (empty($email))
		$err[] = 'Es wurde keine Emailadresse angegeben';
	if (empty($passwort))
		$err[] = 'Es wurde kein Passwort angegeben';
		

	// Wenn alle Tests bestanden sind, wird ausgef&uuml;hrt
	if (count($err) == 0) {
		
		$md5 = md5($passwort);
		
		$sql = 'INSERT INTO abi_leute SET vorname="'.$vorname.'", nachname="'.$nachname.'", email="'.$email.'", passwort="'.$md5.'", modus=2';
		$erg = mysql_query($sql);
	
		// eMaildaten angeben
		$titel = 'Bitte Emailadresse best&auml;tigen';
	
		// Text generieren
		$mailtext = 'Bitte best&auml;tige deine Emailadresse: <a href="http://cvo2011.cv.funpic.de/abi/registrierung/freischalt.php?code='.$md5.'">http://cvo2011.cv.funpic.de/abi/registrierung/freischalt.php?code='.$md5.'</a>';
	
		// Header erzeugen
		$header = "From:php@martin-ueding.de\r\n";
		$header .= "Reply-To:php@martin-ueding.de\r\n";
		$header .= "return-path:php@martin-ueding.de\n";
		$header .= "Content-type: text/html\r\n";
	
		// eMail senden
		//mail ($email, $titel, $mailtext, $header);	
		
		
		echo 'Du kannst dich einloggen. <a href="../">go</a>';
	}
	else {
		echo 'Folgende Fehler sind aufgetreten:<ol>';
		foreach ($err as $fehler) {
			echo '<li>'.$fehler.'</li>';
		}
		echo '</ol>';
	}
	
	?>

	</body>
</html>
