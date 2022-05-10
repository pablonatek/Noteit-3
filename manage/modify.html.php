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
        <h1>Modify Item</h1>
        <form method="post" action="?">
            <div>
                ID:<input type="text" name="id" value="<?php htmlout($id); ?>"><br>
                Task:<input type="text" name="task" value="<?php  htmlout($task); ?>"><br>
                
            </div>    
            <div>
                <input type="submit" name="update" value="Update note">
            </div>
        </form>
        <a href="index.php">Catalog</a>

    </center>
    <?php include "../includes/footer.inc.html.php"?>
</body>
</html>