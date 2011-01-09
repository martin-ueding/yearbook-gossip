<?PHP
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// + Dies sind die Einstellungen fuer die Seite. Bitte fuellen Sie diese entsprechend aus. +
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


// -- MySQL Datenbank --

// MySQL Server
$server = 'localhost';

// MySQL Benutzername
$user = 'cvo2011';

// MySQL Passwort
$passwd = 'a42jVhuwZS9Wodt';

// MySQL Datenbank
$db = 'cvo2011';


$dbh = mysql_connect($server, $user, $passwd);

if ($dbh)
	mysql_select_db($db, $dbh);
	

?>
