<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Gregório de Lucca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ8VZy02b2N7O00pPujni+Zy9V4ZjdVs1TefYxcz0fnJwH4u6du2z1Mvh5dZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barra de navegação -->
    <?php include 'navbar.php'; ?>

    <div class="container py-5">
        <h2>Entre em Contato</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensagem</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Rodapé -->
    <?php include 'footer.php'; ?>

    <!-- Scripts do Bootstrap -->
    <
