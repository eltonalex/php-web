<?php
namespace App\Estoque;

class Estoque
{
	private $total;
	
	public function __construct()
	{
		$this->total = rand(0,20000);
	}
	
	public function getTotal()
	{
		return "Total Estoque: ".$this->total;
	}
}