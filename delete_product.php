<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('db_connect.php');

    // Receber o ID do produto
    $id = $_POST['id'];

    // Query para excluir o produto
    $sql = "DELETE FROM produtos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Produto eliminado com sucesso!";
    } else {
        echo "Erro ao eliminar o produto: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirecionar de volta para a página principal
    header("Location: dashboard.php");
    exit;
}
?>
