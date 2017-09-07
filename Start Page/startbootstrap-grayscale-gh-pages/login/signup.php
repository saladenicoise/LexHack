<?PHP
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//require 'configure.php';

	$uname = $_POST['username'];
	$pword = $_POST['password'];

	$database = "2442002_users";

	$db_found = new mysqli('fdb15.awardspace.net', '2442002_users', '931#^JVbQ8vh', $database );

	if ($db_found) {
		$SQL = $db_found->prepare('SELECT UserName FROM login WHERE UserName = ?');
		$SQL->bind_param('s', $uname);
		$SQL->execute();
		$result = $SQL->get_result();

		if ($result->num_rows > 0) {
			$errorMessage = "Username already taken";
		}
		else {
			$phash = password_hash($pword, PASSWORD_DEFAULT);
			$SQL = $db_found->prepare("INSERT INTO login (UserName, Password) VALUES (?, ?)");
			$SQL->bind_param('ss', $uname, $phash);
			$SQL->execute();

			header ("Location: login.php");
		}
	}
	else {
		$errorMessage = "Database Not Found";
	}
}
?>

	<html>
	<head>
	<title>Basic Signup Script</title>


	</head>
	<body>


<FORM NAME ="form1" METHOD ="POST" ACTION ="signup.php">

Username: <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $uname;?>" >
Password: <INPUT TYPE = 'TEXT' Name ='password'  value="<?PHP print $pword;?>" >

<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Register">


</FORM>
<P>

<?PHP print $errorMessage;?>

	</body>
	</html>
