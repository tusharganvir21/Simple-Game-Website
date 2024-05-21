<?php
require_once("../login/connect.php");
session_start();

if (!isset($_SESSION['login_active'])) {
  header("Location: ../login/login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
   <!-- Code by Keyframe Effects -->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kids Zone</title>
      <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet"
         href="style.css">
         <link rel='stylesheet'
         href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" />
      </head>
      <body>

         <!-- Header Section -->
         <header class="header" id="header">
         <h3 class="pt-4">Welcome, <?php echo $_SESSION['login_active']['0']; ?></h3>
         <nav class="navbar container">
            <a href="#" class="brandlogo"><img src="img/logo.png"
                  style="height: auto; box-shadow: none;"></a>
            <div class="menu" id="menu">
               <ul class="menu-inner">
                  <li class="menu-item"><a href="index.php"
                        class="menu-link">Home</a></li>
                  <li class="menu-item"><a
                        href="http://localhost/WT_CP/Main-page/login/login.php"
                        target="_blank"
                        class="menu-link">SignIn/SignUp</a></li>
                        <li class="menu-item"><a
                        href="logout.php"
                        target="_blank"
                        class="menu-link">Logout</a></li>
               </ul>
            </div>
            <a href="htp.php" target="_blank" class="menu-block">How to Play
               ?</a>
            </nav>
      </header>

      <main class="main">
         <div class="images" style="margin-top: 150px;">
            <div class="game-image">
               <a
                  href="tic-tac-toe/index.php"
                  target="_blank" rel="noopener noreferrer">
                  <img src="img/tic-tac-toe.jpg" alt="tic-tac-toe.jpg">
                  <p>Tic Tac Toe</p>
               </a>
            </div>
            <div class="game-image">
               <a href="rock-paper-scissor\index.php" target="_blank">
                  <img src="img/rock-paper-scissor.png"
                     alt="rock-paper-scissor.png">
                  <p>Rock Paper Scissors</p>
               </a>
            </div>

            <div class="game-image">
               <a href="slide-puzzle\slide-puzzle-master\index.php"
                  target="_blank">
                  <img src="img/slide-puzzel.png" alt="slide-puzzel.png">
                  <p>Slide Puzzle</p>
               </a>
            </div>
            <div class="game-image">
               <a href="http://localhost/WT_CP/Main-page/quiz/dashboard.php"
                  target="_blank">
                  <img src="img/quiz.jpg" alt="quiz.jpg">
                  <p>Quiz</p>
               </a>

            </div>
         </div>
      </main>
      <script
         src="script.js"></script>

   </body>
</html>