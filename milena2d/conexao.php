<?php
// Configurações do banco de dados
$host    = "localhost"; // servidor do banco
$usuario = "root";      // usuário do banco
$senha   = "";          // senha do banco
$banco   = "milena.2d";     // nome do banco de dados

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão funcionou
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Opcional: definir charset para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");

// Substituam os valores abaixo pelas credenciais da sua própria conta do Cloudinary
$cloud_name = "dhorbcfoy";  // exemplo: "meucloud123"
$api_key    = "422422315332817";     // exemplo: "123456789012345"
$api_secret = "lOTSqa2q0Dkwe2AAXiYA3M36kpc";  // exemplo: "abcdeFGHijkLMNopqrstu"

?>
