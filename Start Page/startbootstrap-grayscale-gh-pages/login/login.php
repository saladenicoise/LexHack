<?PHP
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
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

		if ($result->num_rows == 1) {

			$db_field = $result->fetch_assoc();

			if (password_verify($pword, $db_field['Password'])) {
				session_start();
				$_SESSION['login'] = "1";
				header ("Location: page1.php");
			}
			else {
				$errorMessage = "Login FAILED";
				session_start();
				$_SESSION['login'] = '';
			}
		}
		else {
			$errorMessage = "Username or Password is invalid! Please try again!";
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




</body>
</html>
