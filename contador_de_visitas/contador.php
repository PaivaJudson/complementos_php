<?php
session_start();

$expiry_time = 30;

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $expiry_time)
{
    session_unset();
    session_destroy();
    header("Location: contador.php");
    exit();
}

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