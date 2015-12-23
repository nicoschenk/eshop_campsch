<?php

	class UserModel {
		
		private $username;
		private $password;
		private $role;
		
		public function __construct($username=null,$password=null,$customer=null,$role=null){

			$this->username = $username;
			$this->password = $password;
			$this->role = $role;	
		}
			
		public function getUsername(){
			return $this->username;
		}
		
		public function getPassword(){
			return $this->password;
		}
		
		public function getCustomer(){
			return $this->customer;
		}
		
		public function getRole(){
			return $this->role;
		}
		
	}