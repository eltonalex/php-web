<?php

Class Usuario
{
		public $id, $nome, $idade;
		
		public function cadastrar($nome, $idade)
		{
			$this->id = rand(0,9000);
			$this->nome = $nome;
			$this->idade = $idade;
		}
		
		public function imprimir()
		{
			$r = 'ID:'.$this->id.'<br />';
			$r .= 'Nome'.$this->nome.'<br />';
			$r .= 'Idade'.$this->idade.'<br />';
			
			return $r;
		}
		
}