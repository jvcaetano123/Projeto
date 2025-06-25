<?php
    // Função para calcular saldo
    function calcularSaldo($renda, $gastos) {
        return $renda - $gastos;
    }

    // Quando o formulário for enviado
    if (isset($_POST['calcular'])) {
        $renda = floatval($_POST['renda']);
        $gastos = floatval($_POST['gastos']);
        $saldo = calcularSaldo($renda, $gastos);

        echo "<h3>Resultado:</h3>";
        echo "Renda: R$ " . number_format($renda, 2, ',', '.') . "<br>";
        echo "Gastos: R$ " . number_format($gastos, 2, ',', '.') . "<br>";

        if ($saldo < 0) {
            echo "<p class='negativo'><strong>Saldo Negativo:</strong> R$ " . number_format($saldo, 2, ',', '.') . "</p>";
        } else {
            echo "<p class='positivo'><strong>Saldo Positivo:</strong> R$ " . number_format($saldo, 2, ',', '.') . "</p>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="RendaeGasto.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
        <h2>Renda e Gastos Mensais</h2>
        <input type="text" placeholder="Renda" name="renda">
        <input type="text" placeholder="Gastos" name="gastos">
        <button type="button"><i class="bi bi-calculator" name="saldo">CALCULAR</i></button>
    </div>
</body>
</html>
