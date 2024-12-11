<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte da Academia</title>
    <link rel="stylesheet" href="../../CSS/estilo_suporte.css">
</head>
<body>
    <div class="container">
        <h1>Suporte da Academia</h1>
        <form action="enviar_suporte.php" method="POST">
            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" placeholder="Digite o assunto" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>

        </form>
    </div>

</body>
</html>
