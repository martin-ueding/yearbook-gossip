<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

session_start();
if (empty($_SESSION['benutzer_id']))
	header('location:../index.php');

include('../../login.inc.php');

$sql = 'DELETE FROM abi_mottostimmen WHERE mottostimmen_von='.$_SESSION['benutzer_id'].';';
mysql_query($sql);


$insert = 'INSERT INTO abi_mottostimmen SET mottostimmen_von='.$_SESSION['benutzer_id'].', mottostimmen_fuer='.$_POST['motto'].';';
mysql_query($insert);

header('location:auswahl.php');

?>
