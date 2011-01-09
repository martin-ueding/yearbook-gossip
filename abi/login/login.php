<?PHP
session_start();

$email = htmlspecialchars($_POST['email']);
$md5 = md5(htmlentities($_POST['passwort']));

include('../../login.inc.php');

$sql = 'SELECT * FROM abi_leute WHERE modus=2 && email="'.$email.'"';
$erg = mysql_query($sql);
if (mysql_num_rows($erg) > 0) {
	$l = mysql_fetch_assoc($erg);
	$pass_db = $l['passwort'];
	
	if ($pass_db == $md5) {
		$_SESSION['benutzer_id'] = $l['person_id'];
	}
	else
		echo 'Passwort falsch!<br />';
}
else
	echo 'Benutzer existiert nicht, oder wurde noch nicht aktiviert.<br />';

if (!empty($_SESSION['benutzer_id']))
	header('location:../start.php');

?>