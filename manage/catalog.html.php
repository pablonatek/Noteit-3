<?php include_once '../includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product Catalog</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    
</head>

<body>
    <?php include "../includes/header.inc.html.php"?>
    <center>
    
    
    <table border="1">
        <thead style="background-color: green;">
            <tr>
                <th>ID</th>
                <th>Task</th>
            </tr>
        </thead>
        <tbody style="background-color: white;">
            <?php foreach ($s as $row) : ?>
                <tr>
                    <td><?php htmlout($row['id']); ?></td>
                    <td><?php htmlout($row['txt']); ?></td>
                    <td>
                        <form action="" method="post">
                            <div>
                                <input type="hidden" name="id" value="<?php
                                                                        htmlout($row['id']); ?>">
                                <input type="submit" name="done" value="Done">
                                <input type="submit" name="modify" value="Modify">
                            </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form method="post" action="?">
        <input type="submit" name="add" value="Add New Item">
    </form>
    <a href="../"> Return to JMS home </a>
    </center>
    <?php include "../includes/footer.inc.html.php"?>           
</body>

</html>