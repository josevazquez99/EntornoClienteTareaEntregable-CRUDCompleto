<?php
include("CRUD/connection.php");
$con = connection();

$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es un ejemplo crud">
    <meta name="keywords" content="html, css, bootstrap, js, portfolio, proyectos, php">
    <meta name="language" content="EN">
    <meta name="author" content="joaquin.borrego@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- My css -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
    <!-- My scripts -->
    <!-- <script type="text/javascript" src="js/app.js" defer></script> -->

    <!-- Icono al lado del titulo -->
    <link rel="shortcut icon" href="media/icon/favicon.png" type="image/xpng">

    <!-- Titulo -->
    <title>CRUD Alumnos</title>

</head>

<body>
    <div class="container d-flex justify-content-center .align-items-center gap-3">
        <?php while ($row = mysqli_fetch_array($query)): ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['nombreAlumnos'] ?></h5>
                    <p class="card-text">Edad: <?= $row['edad'] ?></p>
                    <a href="updateForm/update.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-secondary">Editar</a>
                    <a href="CRUD/delete_project.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-danger">Borrar</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <div class="container mt-5">
        <h1 class="text-center">Insertar Alumno</h1>
        <form action="./CRUD/insert_project.php" method="POST">
            <div class="form-group">
                <input type="hidden" class="form-control" name="idAlumnos">
            </div>
            <div class="form-group">
                <label for="nombreAlumnos">Nombre</label>
                <input type="text" class="form-control" id="nombreAlumnos" name="nombreAlumnos" placeholder="Nombre del Alumno">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad del Alumno">
            </div>
            <input type="submit" class="m-3 btn btn-primary" value="Insertar">
        </form>
    </div>

</body>

</html>
