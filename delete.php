<?php
// Delete a given player from the roster
include("includes/PlayerDataHandler.php");
include("includes/Player.php");

// grab the id# (jerseynumber) of the player to be deleted.
$playerid = $_GET['id'];
// create a new playerdatahandler; then delete the desired player.
$playerHandler = new PlayerDataHandler();
$playerHandler->delete_player($playerid);

// return to the roster page.
header("Location:roster.php");

 ?>
