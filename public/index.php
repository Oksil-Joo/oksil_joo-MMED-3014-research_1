<?php
spl_autoload_register(function ($class) {
    $replaced = str_replace("\\", "/", $class);
    require_once '../includes/classes/' . $replaced . '.php';
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>