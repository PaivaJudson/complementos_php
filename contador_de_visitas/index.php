<?php

session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

$_SESSION['contador']++;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>

<body>
    <h1>Contador de Visitas</h1>
    <p>Você visitou esta página <?php echo $_SESSION['contador']; ?> vezes.</p>
</body>

</html>