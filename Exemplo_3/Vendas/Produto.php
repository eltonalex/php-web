<?php

Class Produto
{
		public $id, $descricao;
		
		public function cadastrar($id, $descricao)
		{
			$this->id = $id;
			$this->descricao = $descricao;
		}
		
		public function imprimir()
		{
			$r = 'Produto ID:'.$this->id.' - ';
			$r .= 'Descricao:'.$this->descricao.'<br />';
			
			return $r;
		}
		
}