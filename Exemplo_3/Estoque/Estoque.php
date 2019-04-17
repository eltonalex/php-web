<?php

class Estoque
{
	private $total;
	
	public function __construct()
	{
		$this->total = rand(0,20000);
	}
	
	public function getTotal()
	{
		return $this->total;
	}
}