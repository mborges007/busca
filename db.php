<?php
$host = 'busca-server.mysql.database.azure.com'; // hostname do seu servidor Azure
$db = 'busca'; // nome do seu banco de dados
$user = 'prinkwqonp'; // usuário do banco de dados (formato: usuario@nomedobanco)
$pass = 'eIJzehbQWMIJ$hBV'; // sua senha do banco de dados

// Caminhos para os certificados SSL (substitua pelos caminhos corretos)
$ssl_ca = '/caminho/para/certificado/ca-cert.pem';
$ssl_cert = '/caminho/para/certificado/client-cert.pem';
$ssl_key = '/caminho/para/certificado/client-key.pem';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::MYSQL_ATTR_SSL_CA => $ssl_ca,
        PDO::MYSQL_ATTR_SSL_CERT => $ssl_cert,
        PDO::MYSQL_ATTR_SSL_KEY => $ssl_key,
    ]);
    // Definindo o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!"; // Confirmação da conexão
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
