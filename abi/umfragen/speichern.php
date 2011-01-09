<?PHP
session_start();
if (empty($_SESSION['benutzer_id']))
	header('location:../index.php');

include('../../login.inc.php');

$sql = 'DELETE FROM abi_stimmen WHERE stimmen_von='.$_SESSION['benutzer_id'].';';
mysql_query($sql);

$sql = 'SELECT * FROM abi_titel';
$erg = mysql_query($sql);
while ($l = mysql_fetch_assoc($erg)) {
	if (!empty($_POST['titel'.$l['titel_id']])) {
		$insert = 'INSERT INTO abi_stimmen SET stimmen_von='.$_SESSION['benutzer_id'].', stimmen_fuer='.$l['titel_id'].', stimmen_wen='.$_POST['titel'.$l['titel_id']].';';
		mysql_query($insert);
//		echo '<br />'.$insert;
	}
}
header('location:liste.php');
