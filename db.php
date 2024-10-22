<?php
$host = 'busca-server.mysql.database.azure.com'; // substitua pelo hostname do seu servidor Azure
$db = 'busca'; // substitua pelo nome do seu banco de dados
$user = 'prinkwqonp'; // substitua pelo seu usuário do banco de dados (formato: usuario@nomedobanco)
$pass = 'eIJzehbQWMIJ$hBV'; // substitua pela sua senha do banco de dados

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Definindo o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!"; // Adicione esta linha para confirmar a conexão
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
