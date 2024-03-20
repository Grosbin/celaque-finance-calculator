<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
    $principal = isset($_POST['principal']) ? floatval($_POST['principal']) : 0;
    $tasa_interes_anual = isset($_POST['tasa_interes']) ? floatval($_POST['tasa_interes']) : 0;
    $plazo = isset($_POST['plazo']) ? intval($_POST['plazo']) : 0;

    $r = ($tasa_interes_anual / 12) / 100;

    if ($principal > 0 && $tasa_interes_anual > 0 && $plazo > 0) {
        $cuota_mensual = ($principal * $r * pow((1 + $r), $plazo)) / (pow((1 + $r), $plazo) - 1);

        $_SESSION['resultado'] = number_format($cuota_mensual, 2);
    } else {
        $_SESSION['error'] = "Por favor, ingresa valores válidos para el cálculo.";
    }

    header("Location: ../view/show_result.php");
    exit;
}
?>
