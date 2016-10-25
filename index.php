<?php
	// Setup database
	//require_once(__DIR__."includes/functions.php");
//	$db = get_db();

?><!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">
    <title>The Ferg Boys</title>
    <link rel="stylesheet" href="css/normalize.css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Changa+One%7cOpen+Sans:400,400italic,700italic,400,700,800' rel='stylesheet' type='text/css'> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
  <body>
    <header class="main-header">
      <div>
        <h1 class = "name"><a href="#">The Ferg Boys</a></h1>
        <h2>07 Boys Green |  2016 Year</h2>
      </div>
      <script src="js/greeting.js"></script>
      <ul class="main-nav">
        <li><a href="index.php" class="selected">Home</a></li>
        <li><a href="PhotoVideo.php">Photos</a></li>
        <li><a href="calendar.php">Calendar</a></li>
  <!--   <li><a href="locations.html">Locations</a></li> -->
        <li><a href="roster.php">Roster</a></li>
      </ul>
    </header>
    <div class = "profile hidden-sm">
      <img class="profile-pic img-responsive img-rounded" src="img/TheoIsaac_Oct2015.jpg" alt="Isaac &amp;Theo">
    </div>
      <div class="main-div row">
      <div class="primary col">
        <h2>07 Boys Green Team</h2>
        <p>This web site is designed for the 07 Boys Green soccer team in the Modesto Youth Soccer Association. All of these boys were born in 2007 and have been selected from various rigorous tryouts. They will be practicing twice a week for 10 months out of the calendar year.  There will be numerous scrimmages and games throughout the year.</p>
      </div> <!--primary-col -->
      <div class = "secondary col">
        <h2>MYSA</h2>
        <p>Modesto Youth Soccer Association (MYSA) offers recreational, mini-season, competitive soccer (Ajax) and Adult soccer.</p>
        <p>Their core values are honesty, integrity, respect and hard work. They provide players and families with a premier, safe and fun experience for all ages, abilities, and backgrounds. They foster life skills, teamwork, sportsmanship, and technical development. </p>
        <p>Ajax United is a competitive soccer club based on Modesto, CA. They majority of the players are from the Modesto metro area, but some players come from as far away as Merced to Sacramento!</p>
      </div> <!-- secondary-col -->
      <div class = "tiertiary col">
        <h2>Mary Grogan Community Park</h2>
        <p>Practices are held at Mary Grogan Community Park. It is located at 3601 Litt Road in Modesto, CA.</p>
        <p>The park was named in honor of the longtime city parks director who passed away in 2010.</p>
      </div> <!-- secondary-col -->
    </div> <!-- main-div -->
    <footer class="main-footer">
      <a href="http://facebook.com/karenrulander"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2016 Karen Rulander.</p>
    </footer><!-- footer -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"</script>
    <script src="vendor/angular.js" type="text/javascript"></script>
    <script src="scripts/app.js" type="text/javascript"></script>
    <script src="scripts/controllers/main.js" type="text/javascript"></script>
    <script src="scripts/services/data.js" type="text/javascript"></script>
    <script src="scripts/directives/todos.js" type="text/javascript"></script> -->
    <!-- <script src="js/mobilemenuapp.js"></script> -->
  </body> <!-- body -->
</html>
