<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Solicitação</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS, se necessário -->
</head>
<body>
    <h1>Solicitação de Materiais</h1>
    <form action="" method="POST">
        <label for="setor">Setor:</label>
        <input type="text" id="setor" name="setor" required><br>

        <label for="material">Material:</label>
        <input type="text" id="material" name="material" required><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br>

        <button type="submit">Enviar Solicitação</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $setor = htmlspecialchars($_POST['setor']);
        $material = htmlspecialchars($_POST['material']);
        $quantidade = htmlspecialchars($_POST['quantidade']);

        // Aqui você pode processar os dados (armazenar em banco de dados, enviar e-mail, etc.)
        echo "<h2>Solicitação recebida!</h2>";
        echo "<p>Setor: $setor</p>";
        echo "<p>Material: $material</p>";
        echo "<p>Quantidade: $quantidade</p>";
    }
    ?>
</body>
</html>
