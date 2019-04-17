<?php

class Produto
{
	public $id, $descricao, $qtd;
	
	public function cadastrar($id, $descricao, $qtd)
	{
		$this->id = $id;
		$this->descricao = $descricao;
		$this->qtd = $qtd;
	}
		
	public function imprimir()
	{
		$r = 'Produto ID:'.$this->id.' - ';
		$r .= 'Descricao:'.$this->descricao.'<br />';
		$r .= 'Quantidade:'.$this->qtd.'<br />';
		
		return $r;
	}
}