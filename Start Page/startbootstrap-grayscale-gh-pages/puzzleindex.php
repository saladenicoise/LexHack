<?PHP
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] != '') { // Checks if Session is up(user has logged in)
}else{
	header ("Location: login/login.php");
}
?>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lex Hack Capture the Flag Puzzles</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Jules's CSS-->

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			.v-divider{
 				margin-left:30px;
 				margin-right:5px;
 				width:1px;
 				height:75%;
 				border-left:5px solid gray;
				}
		</style>
    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
  </head>
  <body onload="$('body').addClass('stop-scrolling')" style="background-color: #5693a9">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Lex Hack</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Level 1</a>
            </li>
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

		<div class="container" style="margin-top: 100px; margin-left:260px">
			<div class="row">
				<div class="col-3 col-lg-2">
					<h5 style="margin-left:30px">Cryptography</h5>
					<div style="margin-left: 70px">
					<br>
					<a>Puzzle 1</a>
					<a href="puzzles/cryptopuzzle1.php"><img src="img/file.7ebc5018.svg" height="60px" width="60px"></a>
					<a>Puzzle 2</a>
					<a href="puzzles/cryptopuzzle2.php"><img src="img/file.7ebc5018.svg" height="60px" width="60px"></a>
					<a>Puzzle 3</a>
					<a href="puzzles/cryptopuzzle3.php"><img src="img/file.7ebc5018.svg" height="60px" width="60px"></a>
					<a>Puzzle 4</a>
					<a href="puzzles/cryptopuzzle4.php"><img src="img/file.7ebc5018.svg" height="60px" width="60px"></a>
					<a>Puzzle 5</a>
					<a href="puzzles/cryptopuzzle5.php"><img src="img/file.7ebc5018.svg" height="60px" width="60px"></a>
					<a>Puzzle 6</a>
					<a href="puzzles/cryptopuzzle6.php"><img src="img/file.7ebc5018.svg" height="60px" width="60px"></a>
					<a>Puzzle 7</a>
					<a href="puzzles/cryptopuzzle7.php"><img src="img/file.7ebc5018.svg" height="60px" width="60px"></a>
				</div>
					<!--Icons Here-->
				</div>
				<div class="v-divider">
				</div>
				<div class="col-3 col-lg-2">
					<h5 style="margin-left:30px">Category 2</h5>
					<div style="margin-left: 65px">
					<br>
					<a>Puzzle 1</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 2</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 3</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 4</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 5</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 6</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 7</a>
					<br>
					<br>
					<br>
					<br>
				</div>
					<!--Icons Here-->
				</div>
				<div class="v-divider">
				</div>
				<div class="col-3 col-lg-2">
					<h5 style="margin-left:30px">Category 3</h5>
					<div style="margin-left: 65px">
					<br>
					<a>Puzzle 1</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 2</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 3</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 4</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 5</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 6</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 7</a>
					<br>
					<br>
					<br>
					<br>
				</div>
					<!--Icons Here-->
				</div>
				<div class="v-divider">
				</div>
				<div class="col-3 col-lg-2">
					<h5 style="margin-left:30px">Category 4</h5>
					<div style="margin-left: 65px">
					<br>
					<a>Puzzle 1</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 2</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 3</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 4</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 5</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 6</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 7</a>
					<br>
					<br>
					<br>
					<br>
				</div>
					<!--Icons Here-->
				</div>
				<div class="v-divider">
				</div>
				<div class="col-3 col-lg-2">
					<h5 style="margin-left:30px">Category 5</h5>
					<div style="margin-left: 65px">
					<br>
					<a>Puzzle 1</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 2</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 3</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 4</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 5</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 6</a>
					<br>
					<br>
					<br>
					<br>
					<a>Puzzle 7</a>
					<br>
					<br>
					<br>
					<br>
				</div>
					<!--Icons Here-->
				</div>
			</div>
		</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>
  </body>
</html>
