<?PHP
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//require 'configure.php';

	$uname = $_POST['username'];
	$pword = $_POST['password'];

	$database = "2442002_users";

	$db = new mysqli('pdb9.awardspace.net', '2442002_users', '931#^JVbQ8vh', $database );
	// Check connection
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
			if ($result > 0) {
			 $errorMessage = "Username already taken";
		 } else {
			 $phash = password_hash($pword, PASSWORD_DEFAULT);
			 $stmt = $db->prepare("INSERT INTO login (uname, pword) VALUES (?, ?)");
			 if (!$stmt) {
				 $errorMessage = "Prepare failed: (" . $db->errno . ") " . $db->error;

			 }else{
			 $stmt->bind_param('ss', $uname, $phash);
			 $stmt->execute();
			$stmt->close();
			 header ("Location: login.php");
			 $db->close();
		 	}

		 }
	 }else {
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
