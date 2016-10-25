<?php

	require_once("credentials.php");

	/**
	 * Helper Function that returns PDO object
	 * Include at the top of any file you want to access the database
	 */
	function get_db() {

		$options = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);

		$dbstring = "mysql:host=".DBHOST.";dbname=".DBNAME;

		return new PDO($dbstring, DBUSER, DBPASS, $options);

	}

	function get_players($db) {

		$sql = "
			SELECT jerseynumber, firstName, lastName, address
			FROM `roster`
		";
	  $stmt = $db->query($sql);
	  $results = $stmt->fetchAll();
		return display_players($results);
	}

function display_players($final) {
	$output = '<ul class="rosterList">';
	foreach ($final as $player) {
		$output .= "<li>" . $player['jerseynumber'] . ' ' . $player['firstName'] . ' ' . $player['lastName'] . ' ' . $player['address'] . "</p>";

//		$output .= "<li>". $player->jerseynumber . $row->firstName . ' ' .  		$player->lastName . $player->address. "</p>";
		//PHP_EOL;
	}
	$output.="</ul>";
	return $output;
}

function add_player($player) {

//INSERT INTO `terry`.`roster` (`jerseynumber`, `firstName`, `lastName`, `address`, `city`, `state`, `zipcode`, `nameDad`, `cellPhoneDad`, `nameMom`, `cellPhoneMom`, `UniformSize`, `homePhoneDad`, `homePhoneMom`) VALUES ('8', 'Karen', 'Rulander', '100 Main Street', 'Louisville', 'KY', '40220', 'Dad', '502-454-4916', 'Mom', '502-454-4916', 'Small', '502-454-4916', '502-454-4916');



	$sql = "
	INSERT INTO `roster` (`firstName`,`lastName`,`address`)
	 VALUES ()

	";


}

function update_player($player) {
//UPDATE `terry`.`roster` SET `homePhoneDad` = '502-454-4916', `homePhoneMom` = '502-454-4916' WHERE `roster`.`jerseynumber` = 8;


}

function delete_player($player) {
// DELETE FROM 'roster' WHERE `jerseynumber` = xx




}





?>
