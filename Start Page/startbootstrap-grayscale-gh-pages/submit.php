<?PHP
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] != '') { // Checks if Session is up(user has logged in)
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  	require 'login/configure.php';

  	$flag = $_POST['flag'];
  	$name = $_POST['name'];

  	$database = "2442002_users";


  	$db = new mysqli(DB_SERVER, DB_USER, DB_PASS, $database );

  	if ($db->connect_error) {
  	    die("Connection failed: " . $db->connect_error);
  	}

  	if ($db) {
      $submit = $db->prepare('SELECT flag, name FROM puzzleflags WHERE flag = ? AND name = ?');
      $submit->bind_param('ss', $flag, $name);
      if($result == 0) {
        $errorMessage = "No Such Puzzle Exists, make sure you have the fields entered correctly";
      }else{
        $submit->execute();
        $submit->store_result();
        $result = $submit->num_rows;
        $submit->close();
      }
    }
  }
}else{
	header ("Location: login/login.php");
}
?>
