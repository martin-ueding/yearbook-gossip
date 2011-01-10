<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title></title>
	</head>
	<body>
	
		<ul>
			<li><a href="oton/schreiben.php" target="main">O-T&ouml;ne schreiben</a></li>
			<li><a href="oton/lesen.php" target="main">O-T&ouml;ne lesen</a></li>
		</ul>	
		<ul>	
			<li><a href="10jahre/schreiben.php" target="main">"In 10 Jahren" schreiben</a></li>
			<li><a href="10jahre/lesen.php" target="main">"In 10 Jahren" lesen</a></li>
		</ul>
		<ul>
			<li><a href="umfragen/liste.php" target="main">Wer ist was abstimmen</a></li>
			<li><a href="umfragen/auswertung.php" target="main">Wer ist was Auswertung</a></li>
		</ul>
		<!--
		<ul>
			<li><a href="motto/auswahl.php" target="main">Abimotto abstimmen</a></li>
			<li><a href="motto/auswertung.php" target="main">Auswertung</a></li>
		</ul>
		-->
		<ul>
			<li><a href="https://answers.launchpad.net/yearbookgossip/+addquestion" target="_blank">Kontakt / Support</a></li>
		</ul>
		
		<br /><br />
		
		<?PHP
	
		include('../login.inc.php');
		
		$sql = 'SELECT count(*) as cnt FROM abi_leute WHERE modus=2';
		$erg = mysql_query($sql);
		$l = mysql_fetch_assoc($erg);
		$leute = $l['cnt'];	
		echo '<b>'.$l['cnt'].'</b>/63 Leute registriert.<br />';
		
		$sql = 'SELECT count(*) as cnt FROM abi_oton';
		$erg = mysql_query($sql);
		$l = mysql_fetch_assoc($erg);
			
		echo '<b>'.$l['cnt'].'</b>/'.($leute*($leute-1)).' O-T&ouml;ne geschrieben.<br />';
		
		$sql = 'SELECT count(*) as cnt FROM abi_jahre';
		$erg = mysql_query($sql);
		$l = mysql_fetch_assoc($erg);
			
		echo '<b>'.$l['cnt'].'</b>/'.($leute*($leute-1)).' "In 10 Jahren" geschrieben.<br />';
		
		
		$sql = 'SELECT count(*) as cnt FROM abi_titel';
		$erg = mysql_query($sql);
		$l = mysql_fetch_assoc($erg);
		
		$titel = $l['cnt'];
		
		$sql = 'SELECT count(*) as cnt FROM abi_stimmen';
		$erg = mysql_query($sql);
		$l = mysql_fetch_assoc($erg);
			
		echo '<b>'.$l['cnt'].'</b>/'.($leute*$titel).' Stimmen abgegeben.<br />';
		
		
		?>
	
	</body>
</html>
