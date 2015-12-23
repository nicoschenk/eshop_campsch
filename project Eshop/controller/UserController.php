<?php

include_once($_SERVER["DOCUMENT_ROOT"] . "/project Eshop/model/UserModel.php");

	class UserController{
		
		private $users = array();
		
		public function __construct(){
			
		}
		
		public function listUsers(){

			//session array von Benutzer aus Textdatei einlesen (jede Zeile einen Wert im array) 
			$_SESSION['users'] = file($_SERVER["DOCUMENT_ROOT"] . "/project Eshop/users.txt");
			
				foreach($_SESSION['users'] as $user) {
					$ulines = split(":", $user);
					//fügt die Zeilen zu einem String mit jeder Benutzer auf eine neue Zeile
					 echo implode(":", $ulines). "<br>";
				}
		}
		
		public function login($username, $password){
			/*prüft ob die Funktion authenticate für die parameter $username, $password wahr oder falsch ausgibt
			  falls wahr wird die übergeordnete Funktion login wahr übergeben */
			if($this->authenticate($username,$password)){
				
				//UserModel object  instanzieren (unötig da nicht gebraucht)
				$user = new UserModel($username, $password);		
				//user Object an session gebunden 
				$_SESSION['user'] = $user;
			
				return true;
	
			}else{
				return false;
			}		
		}
		
		static function authenticate(){
			$authentic = false;
			//session array von Benutzer aus Textdatei einlesen (jede Zeile einen Wert im array) 
			$_SESSION['users'] = file($_SERVER["DOCUMENT_ROOT"] . "/project Eshop/users.txt");

			foreach($_SESSION['users'] as $user) {
				$ulines = split(":", $user);
				//variable $usern wird definiert als erster wert vom array(im text file erster Wert = Benutzername)
				$usern = trim($ulines[0]);
				//variable $pass wird definiert als zweiter wert vom array(im text file zweiter Wert = Passwort)
				$pass = trim($ulines[1]);
				//wenn der eingegebene Benutzername vorhanden ist und das eingegebene Passwort dazu passt
				if($_SESSION['username'] == $usern && $_SESSION['password'] == $pass){
						$_SESSION['username'] = $usern;
						$authentic = true;
				}
			}
			return $authentic;
		}
		
		public function logout() {
		
			session_unset();
			session_destroy();			
		}
		
		public function checkAdmin($username){
			$admin = false;
			foreach($_SESSION['users'] as $user) {
				$ulines = split(":", $user);
				$usern = trim($ulines[0]);
				//variable $role wird definiert als dritter wert vom array(im text file dritter Wert = Rolle)
				$role = trim($ulines[2]);
 
				if($_SESSION['username'] == $usern){
					if($role == "Admin") {
						$admin=true;
					}					
				}
			}
			return $admin;
		}
		
		public function registerUser() {
			if(isset($_POST['username'])){
				//prüft ob die zwei eingegebenen Passwörter gleich sind
				if($_POST['password1'] == $_POST['password2']){
					//öffnet die Datei
					$fp = fopen("./users.txt", 'a');
					echo "open file";
					//der eingegebene Username, Password und die standard Rolle Kunde werden in einer Zeile
					// mit Trennzeichen ":" in die Textdatei geschrieben
					fwrite($fp, PHP_EOL . $_POST['username'] . ':' . $_POST['password1'] . ':' . 'Kunde');
					fclose($fp);
					return true;	
				}else {
					return false;	
				}
			}	
		}				
	}
?>		
		
		
		
		
		
