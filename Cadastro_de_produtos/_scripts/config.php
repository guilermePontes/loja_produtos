<?php
// Conexão com o banco de dados
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'cadastro_produtos';
$porta = '3306';

$mysqli = new mysqli($servidor,$usuario,$senha,$banco,$porta);

?>