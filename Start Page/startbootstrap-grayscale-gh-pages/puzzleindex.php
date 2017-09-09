<?PHP
session_start();
if ($_SESSION['login'] == '') {
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

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
  </head>
  <body style="background-color: #5693a9">
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
              <a class="nav-link js-scroll-trigger" href="puzzles/level1.html">Level 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="puzzles/level2.html">Level 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="puzzles/level3.html">Level 3</a>
            </li>
						<li class="nav-item">
              <a class="nav-link js-scroll-trigger" onclick="document.write('<?php session_destroy() ?>'); location.href = 'http://www.lexhak.tk/index.html';">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

		<!--THIGNS AND PUZZLES
		<div class="challenge-list">
   <div class="challenge-list-bg">
      <div class="ui six column grid">
         <div class="column"></div>
         <div class="column"></div>
         <div class="column"></div>
         <div class="column"></div>
         <div class="column"></div>
         <div class="column"></div>
      </div>
   </div>
   <div class="ui six column grid challenge-list-header">
      <div class="column category-header">
         <div><span class="inline-block forensics gray category-icon dark"></span></div>
         <div>
            <p>Forensics</p>
         </div>
      </div>
      <div class="column category-header">
         <div><span class="inline-block cryptography gray category-icon dark"></span></div>
         <div>
            <p>Cryptography</p>
         </div>
      </div>
      <div class="column category-header">
         <div><span class="inline-block reverse-engineering gray category-icon dark"></span></div>
         <div>
            <p>Reverse Engineering</p>
         </div>
      </div>
      <div class="column category-header">
         <div><span class="inline-block web-exploitation gray category-icon dark"></span></div>
         <div>
            <p>Web Exploitation</p>
         </div>
      </div>
      <div class="column category-header">
         <div><span class="inline-block binary-exploitation gray category-icon dark"></span></div>
         <div>
            <p>Binary Exploitation</p>
         </div>
      </div>
      <div class="column category-header">
         <div><span class="inline-block misc gray category-icon dark"></span></div>
         <div>
            <p>Misc</p>
         </div>
      </div>
   </div>
   <div class="ui six column grid challenge-list-row">
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Digital-Camouflage">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 242 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Digital Camouflage</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item" href="/game/level-1/challenge/keyz">
            <div class="file-container">
               <div class="file">
                  <div><span class="inline-block cryptography gray category-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 254 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>keyz</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item" href="/game/level-1/challenge/Hex2Raw">
            <div class="file-container">
               <div class="file">
                  <div><span class="inline-block reverse-engineering gray category-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 266 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Hex2Raw</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/What-Is-Web">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 278 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>What Is Web</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Bash-Loop">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 290 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Bash Loop</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Internet-Kitties">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 439 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Internet Kitties</p>
            </div>
         </a>
      </div>
   </div>
   <div class="ui six column grid challenge-list-row">
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Special-Agent-User">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 450 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Special Agent User</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Substitute">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 305 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Substitute</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item" href="/game/level-1/challenge/Raw2Hex">
            <div class="file-container">
               <div class="file">
                  <div><span class="inline-block reverse-engineering gray category-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 317 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Raw2Hex</p>
            </div>
         </a>
      </div>
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item" href="/game/level-1/challenge/Just-No">
            <div class="file-container">
               <div class="file">
                  <div><span class="inline-block binary-exploitation gray category-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 341 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Just No</p>
            </div>
         </a>
      </div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Piazza">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 462 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Piazza</p>
            </div>
         </a>
      </div>
   </div>
   <div class="ui six column grid challenge-list-row">
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Hash101">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 473 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Hash101</p>
            </div>
         </a>
      </div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Leaf-of-the-Tree">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 484 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Leaf of the Tree</p>
            </div>
         </a>
      </div>
   </div>
   <div class="ui six column grid challenge-list-row">
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item" href="/game/level-1/challenge/computeAES">
            <div class="file-container">
               <div class="file">
                  <div><span class="inline-block cryptography gray category-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 495 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>computeAES</p>
            </div>
         </a>
      </div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/looooong">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 506 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>looooong</p>
            </div>
         </a>
      </div>
   </div>
   <div class="ui six column grid challenge-list-row">
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/computeRSA">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 520 --><!-- /react-text<br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>computeRSA</p>
            </div>
         </a>
      </div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/Leaf-of-the-Forest">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 535 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>Leaf of the Forest</p>
            </div>
         </a>
      </div>
   </div>
   <div class="ui six column grid challenge-list-row">
      <div class="column"></div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column"></div>
      <div class="column">
         <a class="challenge-item solved" href="/game/level-1/challenge/WorldChat">
            <div class="file-container">
               <div class="file solved">
                  <div><span class="inline-block unlocked-icon"></span></div>
                  <div class="pts">
                     <!-- react-text: 553 --><!-- /react-text <br><small>PTS</small>
                  </div>
               </div>
            </div>
            <div class="game-challenge-name">
               <p>WorldChat</p>
            </div>
         </a>
      </div>
   </div>
</div>

-->


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
