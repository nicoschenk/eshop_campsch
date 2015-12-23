<?php
	class ShoppingCart{
	
		private $id;
		private $products;
		private $total;
	
		public function __construct($id=null,$products=null, $total=null){
			$this->id = $id;
			$this->products = $products;
			$this->total = $total;
		}
	
		public function getId(){
			return $this->id;
		}
	
		public function getProducts(){
			return $this->products;
		}
		
		public function getTotal(){
			return $this->total;
		}
	}
?>