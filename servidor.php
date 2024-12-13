<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Dados do Usuário</title> 
    <link rel="stylesheet" href="servidor_style.css"> 
</head> 
<body> 

<header> 
    <h1>Biblioteca Municipal - Dados do Usuário</h1> 
</header> 

<nav> 
    <ul> 
        <li><a href="inicial_index.html">Início</a></li> 
        <li><a href="servidor.php">Exibir Dados</a></li> 
        <li><a href="desenvolvedores_index.html">Desenvolvedores</a></li> 
    </ul> 
</nav> 

<main> 
    <h2>Dados do Usuário</h2> 

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']); 
        $data_nascimento = htmlspecialchars($_POST['data_nascimento']); 
        $genero = htmlspecialchars($_POST['genero']); 
        $email = htmlspecialchars($_POST['email']); 
        $senha = htmlspecialchars($_POST['senha']); 
        $telefone = htmlspecialchars($_POST['telefone']); 
        $endereco = htmlspecialchars($_POST['endereco']); 
        $foto = htmlspecialchars($_FILES['foto']['name']); 
        $preferencias = isset($_POST['preferencia']) ? htmlspecialchars(implode(", ", $_POST['preferencia'])) : 'Nenhuma preferência'; 
    ?> 

    <div class="container"> 
        <h2>Informações de cadastro</h2> 
        <ul> 
            <li><strong>Nome:</strong> <?= $nome; ?></li> 
            <li><strong>Data de Nascimento:</strong> <?= $data_nascimento; ?></li> 
            <li><strong>Gênero:</strong> <?= $genero; ?></li> 
            <li><strong>E-mail:</strong> <?= $email; ?></li> 
            <li><strong>Telefone:</strong> <?= $telefone; ?></li> 
            <li><strong>Endereço:</strong> <?= $endereco; ?></li> 
        </ul> 

        <h2>Informações de login</h2> 
        <ul> 
            <li><strong>Senha (ocultada por segurança):</strong> ****</li> 
            <li><strong>Foto de Perfil:</strong> <?= $foto ? $foto : 'Nenhuma foto enviada'; ?></li> 
        </ul> 

        <h2>Preferências</h2> 
        <ul> 
            <li><strong>Preferências de Comunicação:</strong> <?= $preferencias; ?></li> 
        </ul> 
    </div> 

    <?php 
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
