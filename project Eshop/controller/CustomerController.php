<?php
		
	class CustomerController{

		public function __construct(){

		}

			public function registerCustomer() {
				//öffnet die customers.txt file zum schreiben
				$fp = fopen("./customers.txt", 'a');
				// PHP_EOL = newline systemübergreifend
				//schreibt die Kundendaten in einem text File: username:nachname:
				//vorname:strasse:PLZ:Stadt:Email (Trennzeichen = neue Zeile)
				fwrite($fp, PHP_EOL . $_SESSION['username'] . ':' . $_POST['name'] . ':' . $_POST['prename'] . ':'
					. $_POST['street'] . ':' .$_POST['zip'] . ':' .$_POST['city'] . ':' .$_POST['email']);
				fclose($fp);
				return true;		
		}

		public function listCustomers(){
			// erstellt ein session Array mit die zeilen des customers.txt file 
			$_SESSION['customers'] = file($_SERVER["DOCUMENT_ROOT"] . "/project Eshop/customers.txt");
				foreach($_SESSION['customers'] as $customer) {
					$ulines = split(":", $customer);
					echo implode(":", $ulines). '<br>';
				}

		}
				
			
		
	}

?>
