<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

session_start();
if (empty($_SESSION['benutzer_id']))
	header('location:../index.php');

include('../../login.inc.php');

$sql = 'DELETE FROM abi_oton WHERE oton_von='.$_SESSION['benutzer_id'].';';
mysql_query($sql);

$sql = 'SELECT * FROM abi_leute WHERE modus=2';
$erg = mysql_query($sql);
while ($l = mysql_fetch_assoc($erg)) {
	if (!empty($_POST['oton'.$l['person_id']])) {
		$insert = 'INSERT INTO abi_oton SET oton_von='.$_SESSION['benutzer_id'].', oton_an='.$l['person_id'].', oton_text="'.$_POST['oton'.$l['person_id']].'";';
		mysql_query($insert);
//		echo '<br />'.$insert;
	}
}
header('location:schreiben.php');
