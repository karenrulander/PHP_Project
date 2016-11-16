<?php
include("includes/PlayerDataHandler.php");
include("includes/Player.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // if a POST request had been submitted, it is an "ADD"

        $inputPerson = array();
        $inputPerson["firstName"] = trim(filter_input(INPUT_POST,"firstName",FILTER_SANITIZE_STRING));
        $inputPerson["lastName"] = trim(filter_input(INPUT_POST,"lastName",FILTER_SANITIZE_STRING));
        $inputPerson["address"] = trim(filter_input(INPUT_POST,"address",FILTER_SANITIZE_STRING));
        $inputPerson["city"] = trim(filter_input(INPUT_POST,"city",FILTER_SANITIZE_STRING));
        $inputPerson["state"] = trim(filter_input(INPUT_POST,"state",FILTER_SANITIZE_STRING));
        $inputPerson["zipcode"] = trim(filter_input(INPUT_POST,"zipcode",FILTER_SANITIZE_STRING));
        $inputPerson["jerseynumber"] = trim(filter_input(INPUT_POST,"jerseynumber",FILTER_SANITIZE_NUMBER_INT));
        $inputPerson["UniformSize"] = trim(filter_input(INPUT_POST,"UniformSize",FILTER_SANITIZE_STRING));

    // If jerseynumber has NOT been entered,
    //   then do NOT add player..
        if (!isset($inputPerson["jerseynumber"] ) ) {
          // jerseynumber has been entered... add player to roster.
          $newPlayer = new Player($inputPerson);
          $playerHandler = new PlayerDataHandler($newPlayer);
          $success = $playerHandler->add_player();
        } else {
        // Jerseynumber is blank... do not add!
        // need to create playerdatahandler for roster to be displayed.
            $playerHandler = new PlayerDataHandler();
        }

} else {
  // need to create playerdatahandler for roster to be displayed.
    $playerHandler = new PlayerDataHandler();
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8">
    <title>The Ferg Boys</title>
    <link rel="stylesheet" href="css/normalize.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,400italic,700,700italic,800' rel='stylesheet' type='text/css'> -->
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
        <li><a href="index.php" >Home</a></li>
        <li><a href="PhotoVideo.php">Photos</a></li>
        <li><a href="calendar.php">Calendar</a></li>
  <!--   <li><a href="locations.html">Locations</a></li> -->
        <li><a href="roster.php" class="selected">Roster</a></li>
      </ul>
    </header>
    <div >
      <h3>Team Roster</h3>
      <a class="btn btn-success btn-lg " data-toggle="modal" href="#playerModal">+ Add A Player</a>
      </div>

			<?php
      echo $playerHandler->get_players(); ?>
       <!-- <ul class="rosterList">
				<li>Original HTML Code</p>
        <li>Isaac Ferg 413 Rowland Ave  Modesto, CA 95354
      <a class="btn btn-primary btn-xs " data-toggle="modal" href="#playerModalUpdate">Edit Player</a>
      <a class="btn btn-danger btn-xs " data-toggle="modal" href="#playerModalDelete">Delete Player</a>
        </p>
        <li>Theo Ferg  413 Rowland Ave  Modesto, CA 95354</p>
      </ul> -->

      <div class="modal fade" id="playerModal">
    <!-- Modal -->
    <!-- This is the pop up window for Adding a new player.
         This allows user to enter all the relative information
         for the new player.
       -->


      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Enter The Player's Information</h3>
          </div>
          <div class="modal-body">
            <form class="" method="post" action="roster.php">
              <div class="form-group">

  							<label for="firstName">First Name</label>
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name">
								<label for="lastName">Last Name</label>
								<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Modesto">
                <div class="form-inline" id=formline2>
                  <label for="state">State</label>
                  <input type="text" class="form-control"  id="state" name="state" placeholder="CA">
                  <label for="zipcode">Zip</label>
                  <input type="number" class="form-control" id="zipcode" name="zipcode" placeholder="ZipCode">
                </div> <!-- formline#2 -->
              </div>

              <div class="form-inline" id="formline3">
                <label for="jerseynumber">Number</label>
                <input type="text" id="jerseynumber" name="jerseynumber" placeholder="jerseynumber">
                <div class="form-group">
                  <label for="UniformSize">Uniform Size</label>
                  <select class="form-control" id="UniformSize" name="UniformSize">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>X-Large</option>
                  </select>

                </div> <!-- uniform size -->
              </div>  <!-- form line#3 -->
  <!--            <button type="submit" class="btn btn-primary">Add player</button> -->
              <input type="submit" class="btn btn-primary" value ="Add Player"/>

            </form>
          </div> <!-- End modal-body -->

        </div>  <!-- End modal-content -->
      </div>  <!-- End modal-dialog -->
    </div>  <!-- End modal-body -->
    <!-- End Modal -->

    <footer class="main-footer">
      <a href="http://facebook.com/karenrulander"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
      <p>&copy; 2016 Karen Rulander.</p>
    </footer>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"</script>
    <script src="js/app.js"></script>
  </body>
</html>
