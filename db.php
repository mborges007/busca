<?php
$servername = "your-mysql-server.mysql.database.azure.com"; 
$username = "prinkwqonp"; 
$password = "eIJzehbQWMIJ$hBV"; 
$dbname = "busca"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} 
echo "Conexão bem-sucedida!";
?>
