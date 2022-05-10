<?php
include '../includes/db.user.inc.php';
//seleciona todos los items de foodrinks
try {
    $sql = "SELECT id,txt,userFk FROM note where userFk=1";
    $s = $mysqli->query($sql);
} catch (PDOException $e) {
    $error = 'Error when displaying products';
    exit();
}
//creamos el array con los items de foodrinks de la base de datos
foreach ($s as $row) {
    $items[] = array(
        'id'  => $row['id'],
        'txt' => $row['txt'],
        'userFk' => $row['userFk']
    );
}
//al pulsar el bonton comprar en catalog.html.php añadiremos la id
//del item en la session
if (isset($_POST['Done']) and $_POST['done'] == 'Done') {
    $id = $_POST['id'];
    try {
        $sql = "DELETE FROM `note` WHERE id= $id";
        $s = $mysqli->query($sql);
    } catch (PDOException $e) {
        exit();
    }
    header('Location: .');
    exit();
}

if (isset($_POST['modify']) and $_POST['modify'] == 'Modify') {
    $id = $_POST['id'];

    try {
        $sql = "SELECT txt FROM note where id = $id";
        $s = $mysqli->query($sql);
    } catch (PDOException $e) {
        $error = 'Error when displaying products';
        exit();
    }
    foreach ($s as $modify) {
        $task= $modify['txt'];
        
    }
    include 'modify.html.php';
    exit();
}
if (isset($_POST['update']) and $_POST['update'] == 'Update note') {
    $id = $_POST['id'];
    $task = $_POST['task'];
    
    try {
        $sql = "UPDATE note SET txt = '$task' WHERE id = $id";
        $s = $mysqli->query($sql);
    } catch (PDOException $e) {
        $error = 'Error when displaying products';
        echo $error;
        exit();
    }

    header('Location: .');
    exit();
}

if (isset($_POST['add']) and $_POST['add'] == 'Add New Item') {
   
    include 'add.html.php';
    exit();
}
if (isset($_POST['add']) and $_POST['add'] == 'Add') {
    $task = $_POST['task'];
    
    
    try {
        $sql = "INSERT INTO `note`(`txt`, `userFk`) VALUES ('$task',1)";
        $s = $mysqli->query($sql);
    } catch (PDOException $e) {
        $error = 'Error when displaying products';
        echo $error;
        exit();
    }
    header('Location: .');
    exit();
}



include 'catalog.html.php';
