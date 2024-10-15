<?php
function calcularPesoIdeal($sexo, $altura) {
    if ($sexo === 'feminino') {
        return (62.1 * $altura) - 44.7;
    } elseif ($sexo === 'masculino') {
        return (72.2 * $altura) - 58;
    } else {
        return null; // Retorna nulo para sexo inválido
    }
}

$pesoIdeal = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sexo = $_POST['sexo'];
    $altura = $_POST['altura'];

    if ($altura > 0) {
        $pesoIdeal = calcularPesoIdeal($sexo, $altura);
    } else {
        $pesoIdeal = "Altura inválida. Por favor, insira um valor maior que zero.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de Peso Ideal</title>
</head>
<body>
    <h1>Cálculo de Peso Ideal</h1>
    <form method="POST">
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br><br>

        <label for="altura">Altura (em metros):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>

        <input type="submit" value="Calcular Peso Ideal">
    </form>

    <?php if ($pesoIdeal !== null): ?>
        <h2>Resultado:</h2>
        <?php if (is_numeric($pesoIdeal)): ?>
            <p>O peso ideal é: <?php echo round($pesoIdeal, 2); ?> kg</p>
        <?php else: ?>
            <p><?php echo $pesoIdeal; ?></p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
