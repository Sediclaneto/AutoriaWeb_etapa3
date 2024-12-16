<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldeia - Servidor</title>
    <link rel="stylesheet" href="servidor_style.css">
</head>
<body>

<header>
    <h1>Aldeia dos Formulários Encantados - Servidor</h1>
</header>

<nav>
    <ul>
        <li><a href="login_index.html">Login</a></li>
        <li><a href="cadastro_index.html">Cadastro</a></li>
        <li><a href="servidor.php">Servidor</a></li>
        <li><a href="desenvolvedores_index.html">Desenvolvedores</a></li>
    </ul>
</nav>

<main>
    <h2>Dados do Feiticeiro Web</h2>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nome'])) {
            $nome = htmlspecialchars($_POST['nome']);
            $data_nascimento = htmlspecialchars($_POST['data_despertar']);
            $afinidades = isset($_POST['afinidade']) ? htmlspecialchars(implode(", ", $_POST['afinidade'])) : 'Nenhuma afinidade';
            $email = htmlspecialchars($_POST['email']);
            $palavras_magicas = htmlspecialchars($_POST['palavras_magicas']);
            $concha_oraculo = htmlspecialchars($_POST['concha_oraculo']);
            $ordem = htmlspecialchars($_POST['ordem']);
            $retrato = htmlspecialchars($_FILES['retrato']['name']);
            $preferencias = isset($_POST['preferencia']) ? htmlspecialchars(implode(", ", $_POST['preferencia'])) : 'Nenhuma preferência';
    ?>

    <div class="container">
        <h2>Informações de Cadastro</h2>
        <ul>
            <li><strong>Nome de Feiticeiro Web:</strong> <?= $nome; ?></li>
            <li><strong>Data do Despertar:</strong> <?= $data_despertar; ?></li>
            <li><strong>Afinidades:</strong> <?= $afinidades; ?></li>
            <li><strong>Enchantment-mail:</strong> <?= $email; ?></li>
            <li><strong>Concha do Oráculo:</strong> <?= $concha_oraculo; ?></li>
            <li><strong>Ordem:</strong> <?= $ordem; ?></li>
        </ul>

        <h2>Informações de Login</h2>
        <ul>
            <li><strong>Palavras Mágicas:</strong> ****</li>
            <li><strong>Retrato da Alma:</strong> <?= $retrato ? $retrato : 'Nenhum retrato enviado'; ?></li>
        </ul>

        <h2>Preferências</h2>
        <ul>
            <li><strong>Preferências de Comunicação:</strong> <?= $preferencias; ?></li>
        </ul>
    </div>

    <?php
        } else {
            echo "<p>Dados incompletos recebidos.</p>";
        }
    } else {
        echo "<p>Nenhum dado recebido.</p>";
    }
    ?>
</main>

<footer>
    <p>IFRN Campus Santa Cruz - Trabalho de Autoria Web</p>
    <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
    <p>Grupo: Alcides Bezerra Costa Neto e Giovana Borges Azevedo de Medeiro de Lima</p>
</footer>

</body>
</html>