<?php include_once '../includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
    <?php include "../includes/header.inc.html.php"?>
    
    <center>
        <h1>Add Item</h1>
        <form method="post" action="?">
            <div>
                Task:<input type="text" name="task" value="Programar el proyecto final"><br>
                <input type="hidden" name="user" value="1" type="number">
            </div>    
            <div>
                <input type="submit" name="add" value="Add">
            </div>
        </form>
        <a href="index.php">Catalog</a>

    </center>
    <?php include "../includes/footer.inc.html.php"?>
</body>
</html>