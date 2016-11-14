<?php
require_once("credentials.php");
// The class 'PlayerDataHandler' has all of the functions neeeded to
// list the players from the roster on the website along with adding
// new players.
// Eventually, the functions for updating a player's information and
// deleting a player from the roster will be added.


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
			/**
			 * Helper Function that returns PDO object
			 * Include at the top of any file you want to access the database
			 */
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
				$sql = "
					SELECT jerseynumber, firstName, lastName, address
					FROM `roster`
				";
			  $stmt = $this->db->query($sql);
			  $results = $stmt->fetchAll();
				return $this->display_players($results);
			}

		private function display_players($final) {
			$output = '<ul class="rosterList">';
			foreach ($final as $player) {
				$output .= "<li>" . $player['jerseynumber'] . ' ' . $player['firstName'] . ' ' . $player['lastName'] . ' ' . $player['address'] . "</p>";

		//		$output .= "<li>". $player->jerseynumber . $row->firstName . ' ' .  		$player->lastName . $player->address. "</p>";
				//PHP_EOL;
			}
			$output.="</ul>";
			return $output;
		}

		public function add_player() {

				//INSERT INTO `terry`.`roster` (`jerseynumber`, `firstName`, `lastName`, `address`, `city`, `state`, `zipcode`, `nameDad`, `cellPhoneDad`, `nameMom`, `cellPhoneMom`, `UniformSize`, `homePhoneDad`, `homePhoneMom`) VALUES ('8', 'Karen', 'Rulander', '100 Main Street', 'Louisville', 'KY', '40220', 'Dad', '502-454-4916', 'Mom', '502-454-4916', 'Small', '502-454-4916', '502-454-4916');
				$jersey = $this->player->getJerseyNumber();
				$firstName = $this->player->getFirstName();
				$lastName = $this->player->getLastName();
				$address = $this->player->getAddress();
				$city = $this->player->getCity();
				$state = $this->player->getState();
				$zipcode = $this->player->getZipCode();
				$UniformSize = $this->player->getUniformSize();
//echo "Player Data: " . "\n";
//echo "Jersey Number: " . $jersey . "\n";
//echo "First Name: " . $firstName . "\n";
//echo "Last Name: " . $lastName . "\n";
				$cq = ', "';
				$qcq = '","';
				$q = '"';
				$sql = "
				INSERT INTO `roster` (`jerseynumber`,`firstName`,`lastName`,`address`,`city`,`state`,`zipcode`,`UniformSize`)
				VALUES (" . $jersey . $cq  . $firstName . $qcq . $lastName
				. $qcq . $address . $qcq . $city . $qcq . $state . $qcq . $zipcode . $qcq . $UniformSize .      $q.")";
				echo $sql;
				$stmt = $this->db->prepare($sql);
				return $stmt->execute();

		}

		public function update_player() {
		//UPDATE `terry`.`roster` SET `homePhoneDad` = '502-454-4916', `homePhoneMom` = '502-454-4916' WHERE `roster`.`jerseynumber` = 8;
		$city = $this->player->getcity();

		$sql = "
		UPDATE 'terry'.'roster' SET 'city' = $city ";
	//	echo $sql;
		$stmt = $this->db->prepare($sql);
		return $stmt->execute();
	}

		public function delete_player($player) {
		// DELETE FROM 'roster' WHERE `jerseynumber` = xx



		}
}
?>
