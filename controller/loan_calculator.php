<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
    $loan_amount = isset($_POST['principal']) ? floatval($_POST['principal']) : 0;
    $rate_year = isset($_POST['tasa_interes']) ? floatval($_POST['tasa_interes']) : 0;
    $time_limit = isset($_POST['plazo']) ? intval($_POST['plazo']) : 0;

    $r = ($rate_year / 12) / 100;

    if ($loan_amount > 0 && $rate_year > 0 && $time_limit > 0) {
        $cuota_mensual = ($loan_amount * $r * pow((1 + $r), $time_limit)) / (pow((1 + $r), $time_limit) - 1);

        $_SESSION['resultado'] = number_format($cuota_mensual, 2);
    } else {
        $_SESSION['error'] = "Por favor, ingresa valores válidos para el cálculo.";
    }

    header("Location: ../view/show_result.php");
    exit;
}
?>
