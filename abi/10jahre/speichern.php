<?PHP
session_start();
if (empty($_SESSION['benutzer_id']))
	header('location:../index.php');

include('../../login.inc.php');

$sql = 'DELETE FROM abi_jahre WHERE jahre_von='.$_SESSION['benutzer_id'].';';
mysql_query($sql);

$sql = 'SELECT * FROM abi_leute WHERE modus=2';
$erg = mysql_query($sql);
while ($l = mysql_fetch_assoc($erg)) {
	if (!empty($_POST['jahre'.$l['person_id']])) {
		$insert = 'INSERT INTO abi_jahre SET jahre_von='.$_SESSION['benutzer_id'].', jahre_an='.$l['person_id'].', jahre_text="'.$_POST['jahre'.$l['person_id']].'";';
		mysql_query($insert);
//		echo '<br />'.$insert;
	}
}
header('location:schreiben.php');
