<?php

class OrderModel {
	
	private $id;
	private $account;
	private $shoppingCart;
	private $ordered;
	private $shipped;
	private $ship_to;
	private $total;
	private $paid;

	public function __construct($id=null,$account=null,$shoppingCart=null,$ordered=null,$shipped=null,$ship_to=null,$total=null,$paid=null){
			
		$this->id = $id;
		$this->account = $account;
		$this->shoppingCart = $shoppingCart;
		$this->ordered = $ordered;
		$this->shipped = $shipped;
		$this->ship_to = $ship_to;
		$this->total= $total;
		$this->paid = $paid;
			
	}

	public function getId(){
		return $this->id;
	}

	public function getAccount(){
		return $this->account;
	}

	public function getShoppingCart(){
		return $this->shoppingCart;
	}

	public function getOrdered(){
		return $this->ordered;
	}

	public function getShipped(){
		return $this->shipped;
	}

	public function getShip_to(){
		return $this->ship_to;
	}

	public function getTotal(){
		return $this->total;
	}

	public function getPaid(){
		return $this->paid;
	}

}

?>