<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html"); // Redireciona para a página de login se não estiver autenticado
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuscAraras Inicio</title>
    <!-- Link para o Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="sidebar d-flex flex-column p-3">
        <h1 class="text-light text-left">BuscAraras</h1>
        
        <!-- Botão Início -->
        <a class="btn btn-light no-border mb-2 tamanho" href="index.php
        ">Início</a>
        
        <h3 class="text-danger text-left">Departamentos</h3>
        <!-- Dropdowns -->
        <div class="dropdown">
            <button class="btn dropdown-toggle no-border" type="button" id="dropdownResidencial" data-bs-toggle="dropdown" aria-expanded="false">
                Residencial
            </button>
            <ul class="dropdown-menu no-border" aria-labelledby="dropdownResidencial">
                <li><a class="dropdown-item" href="#">Pintor</a></li>
                <li><a class="dropdown-item" href="#">Pedreiro</a></li>
                <li><a class="dropdown-item" href="#">Encanador</a></li>
                <li><a class="dropdown-item" href="#">Calheiro</a></li>
                <li><a class="dropdown-item" href="#">Eletricista</a></li>
                <li><a class="dropdown-item" href="#">Marceneiro</a></li>
                <li><a class="dropdown-item" href="#">Chaveiro</a></li>
                <li><a class="dropdown-item" href="#">Pintor</a></li>

            </ul>
        </div>
        <div class="dropdown mt-2">
            <button class="btn dropdown-toggle no-border" type="button" id="dropdownCuidadosPessoais" data-bs-toggle="dropdown" aria-expanded="false">
                Cuidados Pessoais
            </button>
            <ul class="dropdown-menu no-border" aria-labelledby="dropdownCuidadosPessoais">
                <li><a class="dropdown-item" href="#">Cabelereiro</a></li>
                <li><a class="dropdown-item" href="manicure.html">Manicure</a></li>
                <li><a class="dropdown-item" href="#">Esteticista</a></li>
            </ul>
        </div>
        <div class="dropdown mt-2">
            <button class="btn dropdown-toggle no-border" type="button" id="dropdownReparoAutomotivo" data-bs-toggle="dropdown" aria-expanded="false">
                Reparo Automotivo
            </button>
            <ul class="dropdown-menu no-border" aria-labelledby="dropdownReparoAutomotivo">
                <li><a class="dropdown-item" href="#">Mecânico</a></li>
                <li><a class="dropdown-item" href="#">Funileiro</a></li>
            </ul>
        </div>
        
        <!-- Botões de Login e Cadastro -->
        <div class="mt-auto">
            <a class="btn btn-primary w-100 mb-2" href="login.html">Alterar</a>
            <a class="btn btn-secondary w-100" href="cadastro.html">Sair</a>
        </div>
    </div>
          
    <div class="content d-flex flex-column align-items-center flex-grow-1">
        <h1>Meu Perfil</h1>
        <!-- Card das Profissões -->
        <div class="card form-card w-150 p-8 perfil-container">
            <!-- Conteúdo do Card -->
            <div class="row align-items-center-perfil mb-4">
                <!-- Foto do Profissional -->
                <div class="col-md-6 text-center">
                    <img src="img/luka.jpg" alt="Foto do Profissional" class="img-fluid rounded-circle perfil-photo">
                </div>
                <!-- Informações do Profissional -->
                <div class="col-md-8 perfil-info">
                    <h4 class="text-center">Luka Doncic</h4>
                    <p><strong>Telefone:</strong> (XX) XXXXX-XXXX</p>
                    <p><strong>Profissão:</strong> Armador</p>
                    <!-- Descrição Profissional -->
                    <h5>Descrição</h5>
                    <p>Luka Dončić (Ljubljana, 28 de fevereiro de 1999) é um jogador de basquete esloveno...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Link para o Bootstrap 5 JS e Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>