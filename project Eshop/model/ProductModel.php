<?php
	class ProductModel{
	
		private $id;
		private $name;
		private $amount;
		private $avail;
	
		public function __construct($id=null,$name=null,$amount=null,$avail=null){
			$this->id = $id;
			$this->name = $name;
			$this->amount = $amount;
			$this->avail = $avail;
		}
	
		public function getId(){
			return $this->id;
		}
	
		public function getName(){
			return $this->name;
		}
		
		public function getAmount(){
			return $this->amount;
		}
		
		public function getAvailability(){
			return $this->avail;
		}
	}
?>