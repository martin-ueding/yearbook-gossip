<?PHP
// Copyright (c) 2011 Martin Ueding <dev@martin-ueding.de>

session_start();
if (empty($_SESSION['benutzer_id']))
	header('location:../index.php');

include('../../login.inc.php');

$sql = 'DELETE FROM abi_jahre WHERE jahre_id='.$_GET['id'].' && jahre_an='.$_SESSION['benutzer_id'].';';
mysql_query($sql);

header('location:lesen.php');
?>
