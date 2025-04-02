<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
</head>
<body>
    <h1>Formulario de Suma</h1>

    <!-- Formulario para enviar los números -->
    <form action="/suma" method="POST">
        @csrf
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>

        <button type="submit">Sumar</button>
    </form>

    <?php if (isset($suma)): ?>
        <h2>Resultado: <?php echo $suma; ?></h2>
    <?php endif; ?>
</body>
</html>
