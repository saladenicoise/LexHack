<?PHP
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	//require 'configure.php';

	$uname = $_POST['username'];
	$pword = $_POST['password'];

	$database = "2442002_users";


	$db = new mysqli('pdb9.awardspace.net', '2442002_users', '931#^JVbQ8vh', $database );

	if ($db->connect_error) {
	    die("Connection failed: " . $db->connect_error);
	}

	if ($db) {

	$SQL = $db->prepare('SELECT * FROM login WHERE uname = ?');
	$SQL->bind_param('s', $uname);
	$SQL->execute();
	$SQL->store_result();
	$result = $SQL->num_rows;
	$SQL->close();
		if ($result >= 1) {

			$stmt = $db->prepare('SELECT pword FROM login WHERE uname = ?');
			if(!$stmt) {
				$errorMessage1 = "Prepare failed: (" . $db->errno . ") " . $db->error;
			}else{
			$stmt->bind_param('s', $uname);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($hash);
			$res = $stmt->fetch();
			$stmt->close();

			if (password_verify($pword, $hash) && $res) {
				session_start();
				$_SESSION['login'] = "1";
				header ("Location: http://www.lexhak.tk/puzzleindex.php");
			} else {
				$errorMessage = "Login FAILED";
				$errorMessage1 = "Pword:" . $pword . "Hash: " . $hash;
				session_start();
				$_SESSION['login'] = '';
			}
			}
		}
		else {
			$errorMessage = "Username or Password is invalid! Please try again!       ";
			$errorMessage1 = "Result: " . $result;
		}
	}
}
?>


<html>
<head>
<title>Basic Login Script</title>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="login.php">

Username: <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $uname;?>" maxlength="20">
Password: <INPUT TYPE = 'TEXT' Name ='password'  value="<?PHP print $pword;?>" maxlength="16">

<P align = center>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Login">
</P>

</FORM>

<P>
<?PHP print $errorMessage;?>
<?PHP print $errorMessage1;?>



</body>
</html>
