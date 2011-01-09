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
	
	<h3>Das haben andere &uuml;ber dich geschrieben</h3>
	
	<ol>
	
	<?PHP

	include('../../login.inc.php');
	
	$sql = 'SELECT * FROM abi_oton WHERE oton_an='.$_SESSION['benutzer_id'].';';
	$erg = mysql_query($sql);
	while ($l = mysql_fetch_assoc($erg)) {
		echo '<li>'.$l['oton_text'].' &nbsp; <a href="delete.php?id='.$l['oton_id'].'"><img style="border:0px;" src="muell2.gif" alt="Diesen O-Ton direkt l&ouml;schen" /></a></li>';
	}
	
	?>
		
	</ol>
	
	Nur du kannst lesen, was &uuml;ber dich geschrieben worden ist! Der Autor wird jedoch nicht angezeigt.
	<br /><br />
	Ein Klick auf <img style="border:0px;" src="muell2.gif" alt="Diesen O-Ton direkt l&ouml;schen" /> <span style="color: red;">l&ouml;scht den O-Ton SOFORT!</span>

	</body>
</html></head>
