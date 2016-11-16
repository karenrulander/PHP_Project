<?php
// Edit the information for a given player

// include the necessary files
include("includes/PlayerDataHandler.php");
include("includes/Player.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // if a POST request had been submitted, it is an "UPDATE".
  // After the user has edited the player's information, and clicks the 'Update player' button,
  // this section of the if statement is ran....
          $updatedPlayer = array();
          $updatedPlayer["firstName"] = trim(filter_input(INPUT_POST,"firstName",FILTER_SANITIZE_STRING));
          $updatedPlayer["lastName"] = trim(filter_input(INPUT_POST,"lastName",FILTER_SANITIZE_STRING));
          $updatedPlayer["address"] = trim(filter_input(INPUT_POST,"address",FILTER_SANITIZE_STRING));
          $updatedPlayer["city"] = trim(filter_input(INPUT_POST,"city",FILTER_SANITIZE_STRING));
          $updatedPlayer["state"] = trim(filter_input(INPUT_POST,"state",FILTER_SANITIZE_STRING));
          $updatedPlayer["zipcode"] = trim(filter_input(INPUT_POST,"zipcode",FILTER_SANITIZE_STRING));
          $updatedPlayer["jerseynumber"] = trim(filter_input(INPUT_POST,"jerseynumber",FILTER_SANITIZE_NUMBER_INT));
          $updatedPlayer["UniformSize"] = trim(filter_input(INPUT_POST,"UniformSize",FILTER_SANITIZE_STRING));


          // create a new player class.
         $editPlayer = new Player($updatedPlayer);
         // create anew playerDataHandler object to handle the update.
         $playerDataHandlerUpdate = new PlayerDataHandler();
         //echo "edited player info: " ;
         //var_dump($editPlayer);
         $allok = $playerDataHandlerUpdate->update_player($editPlayer);
         //echo "Successful? " . $allok;
        //$playerHandler = new PlayerDataHandler($newPlayer);
        // $success = $playerHandler->add_player();

        // Once the player's information has been updated, return the user to the roster page.
        // The players will be listed once again without the deleted player.

        header("Location:roster.php");

} else {
    // The user has clicked on 'edit player' from the roster page.
    // Load the 'update' form showing the desired player's information.
    // Once the user is done editing the information, the user will click on 'Update Player' button on the form.
    // the code above will then run, update the player's information and return user to the roster page.


    $playerid = $_GET['id'];
    $playerHandler = new PlayerDataHandler();

    $currentplayer =  $playerHandler->get_playerinfo($playerid);

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
      <li><a href="update.php" class="selected">Roster</a></li>
       </ul>
     </header>
     <div >
    <div >
       <h3>Team Roster</h3>
       <!-- <a class="btn btn-success btn-lg " data-toggle="modal" href="#playerModal">+ Add A Player</a> -->
     </div>

     <div  id="playerUpdateModal">
   <!-- Modal -->
   <!-- This is the pop up window for Updating an existing player's information.
        This allows user to update all the relative information
        for the given player.
      -->
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h3 class="modal-title">Update The Player's Information</h3>
           <h3><?php echo "Jersey Number: " . $currentplayer["jerseynumber"]; ?> </h3>
         </div>
         <div class="modal-body">
           <form class="" method="post" action="update.php">
             <div class="form-group">
               <label for="firstName">First Name</label>
               <input type="text" class="form-control" id="firstName" name="firstName" value= " <?php echo $currentplayer["firstName"]; ?>">
               <label for="lastName">Last Name</label>
               <input type="text" class="form-control" id="lastName" name="lastName" value= " <?php echo $currentplayer["lastName"]; ?>">
               <label for="address">Address</label>
               <input type="text" class="form-control" id="address" name="address" value= " <?php echo $currentplayer["address"]; ?>">
               <label for="city">City</label>
               <input type="text" class="form-control" id="city" name="city" value= " <?php echo $currentplayer["city"]; ?>">
               <div class="form-inline" id=formline2>
                 <label for="state">State</label>
                 <input type="text" class="form-control"  id="state" name="state" value= " <?php echo $currentplayer["state"]; ?>">
                 <label for="zipcode">Zip</label>
                 <input type="number" class="form-control " id="zipcode" name="zipcode" value= " <?php echo $currentplayer["zipcode"]; ?>">
               </div> <!-- form inline#2 -->
             </div><!-- form-group -->

             <div class="form-inline" id="formline3">
               <label for="jerseynumber" class="hidden">Number</label>
               <input type="text" class="hidden" id="jerseynumber" name="jerseynumber" value= " <?php echo $currentplayer["jerseynumber"]; ?>">
               <div class="form-group">
                 <label for="UniformSize">Uniform Size</label>
                 <select class="form-control" id="UniformSize" value= " <?php echo $currentplayer["UniformSize"]; ?>">
                   <option>Small</option>
                   <option>Medium</option>
                   <option>Large</option>
                   <option>X-Large</option>
                 </select>

               </div> <!-- uniform size -->
             </div>  <!-- form inline#3 -->
 <!--            <button type="submit" class="btn btn-primary">Add player</button> -->
             <input type="submit" class="btn btn-primary" value ="Update Player"/>

           </form>

       <!-- <footer class="main-footer">
         <a href="http://facebook.com/karenrulander"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
         <p>&copy; 2016 Karen Rulander.</p>
       </footer> -->
       <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
       <script src="js/bootstrap.min.js"</script>
       <script src="js/app.js"></script>
     </body>
   </html>
