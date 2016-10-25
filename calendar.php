<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">
    <title>The Ferg Boys</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,400italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/main.css">
    </head>
  <body>
    <header class="main-header">
      <div>
        <h1 class = "name"><a href="#">The Ferg Boys</a></h1>
        <h2>07 Boys Green |  2016 Year</h2>
      </div>
      <script src="js/greeting.js"></script>
      <ul class="main-nav">
        <li><a href="index.php" >Home</a></li>
        <li><a href="PhotoVideo.php">Photos</a></li>
        <li><a href="calendar.php" class="selected">Calendar</a></li>
    <!--   <li><a href="locations.html">Locations</a></li> -->
        <li><a href="roster.php">Roster</a></li>
      </ul>
    </header>
    <div ng-app="todoListApp">
      <h1>Calendar Events</h1>
    	<todos></todos>
    </div>
    <footer class="main-footer">
      <a href="http://facebook.com/karenrulander"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2016 Karen Rulander.</p>
    </footer>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="vendor/angular.js" type="text/javascript"></script>

    <script src="scripts/app.js" type="text/javascript"></script>
    <script src="scripts/controllers/main.js" type="text/javascript"></script>
    <script src="scripts/services/data.js" type="text/javascript"></script>
    <script src="scripts/directives/todos.js" type="text/javascript"></script>
    <!-- <script src="js/mobilemenuapp.js"></script> -->
  </body>
</html>
