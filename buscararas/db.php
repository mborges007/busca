$servername = "your-mysql-server.mysql.database.azure.com";
$username = "prinkwqonp";
$password = "eIJzehbQWMIJ$hBV";
$dbname = "busca";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
