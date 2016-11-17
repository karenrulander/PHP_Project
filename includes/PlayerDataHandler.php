<?php
require_once("credentials.php");

// The class 'PlayerDataHandler' has all of the functions neeeded to do the following:
//  (1) list the players from the roster on the website
//	(2) Add new players to the roster.
//	(3) Update a player's information.
//	(4) Delete a player from the roster.


class PlayerDataHandler
{
		protected $db;
		private $player;

		public function __construct(Player $newPlayer = null){
			$this->set_db();
			if (!empty($newPlayer)) {
				$this->player = $newPlayer;
			}
		}

			//returns PDO object of the databases
			private function set_db() {
				try {
				  $this->db = new PDO("mysql:host=localhost;dbname=terry;port=3306","root","root");
				  $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				} catch (Exception $e) {
				  echo "Unable to connect to Terry's database";
				  exit;
				}
			}

			public function get_players() {
				// Retrieve ALL players on the roster and display to screen.
				$sql = "
					SELECT jerseynumber, firstName, lastName, address
					FROM `roster` ORDER BY jerseynumber
				";
			  $stmt = $this->db->query($sql);
			  $results = $stmt->fetchAll();
				return $this->display_players($results);
			}

		private function display_players($final) {
			// display all players on the roster to the screen (html li)
			$output = '<ul class="rosterList">';

			foreach ($final as $player) {
				$output .= "<li>" . $player['jerseynumber'] . ' ' . $player['firstName'] . ' ' . $player['lastName'] . ' ' . $player['address'] . '     ';
		    $output .= '<a class="btn btn-primary btn-xs " data-toggle="modal" href="update.php?id='. $player['jerseynumber'] .'">Edit Player  </a>';
				$output .= '   <a class="btn btn-danger btn-xs " data-toggle="modal"  href="delete.php?id='. $player['jerseynumber'] .'">Delete Player </a>';
				$output .= "</p>";

			}

			$output.="</ul>";
			return $output;
		}
		public function add_player() {
			// Adds a new player to the roster.

				//INSERT INTO `terry`.`roster` (`jerseynumber`, `firstName`, `lastName`, `address`, `city`, `state`, `zipcode`, `nameDad`, `cellPhoneDad`, `nameMom`, `cellPhoneMom`, `UniformSize`, `homePhoneDad`, `homePhoneMom`) VALUES ('8', 'Karen', 'Rulander', '100 Main Street', 'Louisville', 'KY', '40220', 'Dad', '502-454-4916', 'Mom', '502-454-4916', 'Small', '502-454-4916', '502-454-4916');

				// grab data from the new player class!
				$jersey = $this->player->getJerseyNumber();
				$firstName = $this->player->getFirstName();
				$lastName = $this->player->getLastName();
				$address = $this->player->getAddress();
				$city = $this->player->getCity();
				$state = $this->player->getState();
				$zipcode = $this->player->getZipCode();
				$UniformSize = $this->player->getUniformSize();
				// variables to handle the SQL syntax.
				$cq = ', "';
				$qcq = '","';
				$q = '"';
				// write the sql statement
				$sql = "
				INSERT INTO `roster` (`jerseynumber`,`firstName`,`lastName`,`address`,`city`,`state`,`zipcode`,`UniformSize`)
				VALUES (" . $jersey . $cq  . $firstName . $qcq . $lastName
				. $qcq . $address . $qcq . $city . $qcq . $state . $qcq . $zipcode . $qcq . $UniformSize .      $q.")";
				$stmt = $this->db->prepare($sql);

				return $stmt->execute();

		}

		public function get_playerinfo($playerid) {
			// Get the information for a given player.
			// create sql statement to grab information for a given player.
			$sql = "
				SELECT jerseynumber, firstName, lastName, address, city, state, zipcode, UniformSize
				FROM `roster` WHERE jerseynumber = $playerid
			";

			$stmt = $this->db->query($sql);
			$results = $stmt->fetchAll();
	//		echo "Results: \n";
	//		echo "First Name: " . $results[0]["firstName"];
	//		echo "Uniform Size: " . $results[0]["UniformSize"];

			if (IS_ARRAY($results) ) return $results[0];
		}

		public function update_player($updPlayer) {
			// Update the information for a given player based on their jersey number.

			// grab the updated information for the player
				$jersey = $updPlayer->jerseynumber;

				$firstName = $updPlayer->firstName;
				$lastName = $updPlayer->lastName;
				$address = $updPlayer->address;
				$city = $updPlayer->city;
				$state = $updPlayer->state;
				$zipcode = $updPlayer->zipcode;
			//$UniformSize = $updPlayer->UniformSize;

		//		echo 'Uniform Size on update: ' . $UniformSize;
		//var_dump($UniformSize);
				// variables to handle the SQL syntax.
				$cq = ', "';
				$qcq = '","';
				$q = '"';

				$sql = "
				UPDATE  `roster` SET `firstName` = " . $q . $firstName . $q
				. ", `lastName` = " . $q . $lastName . $q
				. ", `address` = " . $q . $address . $q
				. ", `city` = " . $q . $city . $q
				. ", `state` = " . $q . $state . $q
				. ", `zipcode` = " . $q . $zipcode . $q
			//	. ", `UniformSize` = " . $q . $UniformSize . $q
				. "  WHERE `jerseynumber` = $jersey" ;
		//		echo "UPDATE sql statement: " . "\n";
		//		echo $sql . "\n";
				$stmt = $this->db->prepare($sql);
				return $stmt->execute();
		}

		public function delete_player($id) {
		// Delete a given player from the roster
		$sql = " delete from roster where jerseynumber = $id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();
		}
}
?>
