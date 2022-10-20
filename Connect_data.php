<?php
#https://ostechnix.com/create-mysql-database-and-table-using-php-in-xampp e https://www.canalti.com.br/programacao/web/php/como-criar-um-formulario-de-contato-moderno-e-funcional-html-css-e-php/
$server_name = "localhost";
$user_name = "root";
$password = "";
$DbName = "respostas_form";


$connection = mysqli_connect($server_name, $user_name, $password);

$query = "CREATE DATABASE respostas_form";

mysqli_query($connection, $query);

if (!$connection) {
    die("A CONEXAO FALHOU ". mysqli_connect_error());
  }
  echo "CONEXAO FEITA COM SUCESSO";

$connection = mysqli_connect($server_name, $user_name, $password, $DbName);

$qry = "CREATE TABLE IF NOT EXISTS respostas(
  nome VARCHAR(244) NOT NULL
  ,email VARCHAR(100) NOT NULL 
  ,motivo VARCHAR(100) NOT NULL
  ,mensagem VARCHAR(2000)
  )";
mysqli_query($connection, $qry);

(string) $nome = $_POST['nome'];
(string) $email = $_POST['email'];
(string) $motivo = $_POST['motivo'];
(string) $mensagem = $_POST['mensagem'];

$connection = mysqli_connect($server_name, $user_name, $password, $DbName);

mysqli_query($connection, "INSERT INTO `respostas` (`nome`, `email`, `motivo`, `mensagem`) VALUES ('$nome', '$email', '$motivo', '$mensagem');");

?>