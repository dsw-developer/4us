<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('db_connect.php');

    // Receber dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];


    // Processar a imagem
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $diretorio_upload = 'perfume/imagem'; // Diretório onde as imagens serão salvas
        $nome_arquivo = basename($_FILES['imagem']['name']);
        $caminho_arquivo = $diretorio_upload . $nome_arquivo;

        // Verificar se o diretório existe, se não, criar
        if (!is_dir($diretorio_upload)) {
            mkdir($diretorio_upload, 0777, true);
        }

        // Mover o arquivo enviado para o diretório especificado
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_arquivo)) {
            // Sucesso no upload
        } else {
            echo "Erro ao fazer upload da imagem.";
            exit;
        }
    } else {
        echo "Erro no upload da imagem.";
        exit;
    }

    // Inserir dados no banco de dados
    $sql = "INSERT INTO produtos (nome, descricao, preco, imagem)
            VALUES ('$nome', '$descricao', '$preco', '$caminho_arquivo')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: dashboard.php");
    exit;
}
