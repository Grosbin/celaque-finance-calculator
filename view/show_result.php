<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Cálculo</title>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="body__container">
        <div class="container__result">
            <img src="../assets/img/celaque.png" alt="celaque" class="logo_celaque">
            <!-- <h2>Resultado del calculo: </h2> -->
            <dotlottie-player src="https://lottie.host/f7e7f0af-006f-4591-bdc9-02be4b652c5b/RqUaI271gy.json" background="transparent" speed="1" style="width: 300px; height: 300px;"autoplay></dotlottie-player>
            <?php if (isset($_SESSION['resultado'])): ?>
                <p class="text__result">La cuota mensual es:</br></br> <strong>L<?php echo $_SESSION['resultado']; ?></strong></p>
                <?php unset($_SESSION['resultado']); // Limpiar el resultado de la sesión ?>
                <?php elseif (isset($_SESSION['error'])): ?>
                    <p><?php echo $_SESSION['error']; ?></p>
                    <?php unset($_SESSION['error']); // Limpiar el error de la sesión ?>
                    <?php endif; ?>
                    <div class="container__button">
                        <a class="button__back" href="../index.php">Calcular otra cuota</a>
                    </div>
                </div>
    </div>
</body>
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>  
</html>
