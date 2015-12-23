<?php

	class CustomerModel {
		
		private $name;
		private $prename;
		private $street;
		private $zip;
		private $city;
		private $email;
		
		public function __construct($id=null,$name=null,$prename=null,$street=null,$zip=null,$city=null,$email=null){
				
			$this->name = $name;
			$this->prename = $prename;
			$this->street = $street;
			$this->zip = $zip;
			$this->city = $city;
			$this->email= $email;
		}
		
		public function getName(){
			return $this->name;
		}
	
		public function getPrename(){
			return $this->prename;
		}

		public function getStreet(){
			return $this->street;
		}

		public function getZip(){
			return $this->zip;
		}

		public function getCity(){
			return $this->city;
		}
		public function getEmail(){
			return $this->email;
		}
	
	}

?>