<?php
	//absoluter Pfad
include_once($_SERVER["DOCUMENT_ROOT"] . "/project Eshop/model/ProductModel.php");

	class ProductController{
		public $products = array();
		private $nr;
		public function __construct(){
			$this->products[] = new ProductModel("48","Abstract World Card", "99.95","Yes");
			$this->products[] = new ProductModel("57","Waterfall Thailand", "89.95","Limited");
			$this->products[] = new ProductModel("99","Abstract City", "79.95","Yes");
			$this->products[] = new ProductModel("66","Abstract New York", "99.95","Yes");
			$this->products[] = new ProductModel("12","Abstract Nature", "90.00","Yes");
			$this->products[] = new ProductModel("15","Abstract Lion", "75.95","Yes");
			$this->products[] = new ProductModel("62","Sea Sunset", "69.00","Yes");
			$this->products[] = new ProductModel("34","Nature Buddha", "99.95","Yes");
			$this->products[] = new ProductModel("66","New York Night", "89.00","Limited");
			}
		
		//gibt anhand des indexes das gewählte Produkt ($nr) zurück
		public function listProduct($nr){
			//die Werten des Produkts werden in einem String mit eine neue Zeile am Schluss zurückgegeben
			$prod = $this->products[$nr]->getName()."  ".$this->products[$nr]->getAmount()."  "
				.$this->products[$nr]->getAvailability()."  ". PHP_EOL;
			return $prod;
			}
	}
		
?>
