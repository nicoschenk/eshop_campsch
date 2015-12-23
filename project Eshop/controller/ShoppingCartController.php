<?php
include_once "ProductController.php";	
	
	class ShoppingCartController{
	
		public function __construct(){

			}
						
		public function addItem($username, $product){

			$prod_controller = new ProductController();
			
			//wenn $_SESSION['products'] nicht gesetzt ist ist es ein array()
			$_SESSION['products'] = (isset($_SESSION['products']))? $_SESSION['products'] : array();	

			// funktioniert gleich wie array_push
			$_SESSION['products'][] = $product;
			print_r($_SESSION['products']);
			
			//counter für anzahl Produkte im Warenkorb
			$_SESSION['prodAmount'] = count($_SESSION['products']);
		}	
	}	
	
?>
