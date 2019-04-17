<?php
include 'vendor/autoload.php';

$u = new \App\Vendas\Usuario();
$u->cadastrar("Elton", 36);

$p1 = new \App\Vendas\Produto();
$p2 = new \App\Vendas\Produto();

$p1->cadastrar(1,'produto1');
$p2->cadastrar(2,'produto2');

$c = new \App\Vendas\Compra();

$c->cadastrar(
	array(
		'p1' => $p1,
		'p2' => $p2
	),$u
);

echo $c->imprimir();

$e = new \App\Estoque\Estoque();

echo $e->getTotal();
