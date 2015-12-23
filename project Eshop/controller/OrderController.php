<?php

		
	class OrderController{

		public function __construct(){

		}


		public function createOrder() {
		
			$admin = false;
			$_SESSION['customers'] = file("./customers.txt");
			foreach($_SESSION['customers'] as $customer) {
				$clines = split(":", $customer);
				$usern = trim($clines[0]);
					if($_SESSION['username'] == $usern){
					echo "user exists";
					$addr = trim($clines[3]);
					$city = ($clines[5]);
					}
			}

			$fp = fopen("./orders.txt", 'a');
			$products = implode($_SESSION['products']);
			fwrite($fp, PHP_EOL . $_SESSION['username'] . PHP_EOL . $addr. PHP_EOL . $city. PHP_EOL  . $products);	
				return true;		
		}

		public function listOrders(){
			$_SESSION['orders'] = file($_SERVER["DOCUMENT_ROOT"] . "/project Eshop/orders.txt");		
				foreach($_SESSION['orders'] as $order) {
					$olines = split(":", $order);
					 echo implode(":", $olines). "<br>";
				}
		}				
	}
?>
