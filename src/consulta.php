<?php
    $mysqli = new mysqli("db","root","123qwe*","registro_estudiantes");    
    $sql="SELECT * FROM alumno";
    $result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Consulta de datos</title>
    <style>
        body {
            background-image: url('/img/fondo.jpg');
        }
    </style>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="/img/UPSLP.jpg" width="100" alt="" class="d-inline-block align-middle mr-2">
                    <span class="text-uppercase font-weight-bold">Registros almacenados</span>
                </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php">Llenar datos</a></a></li>
            </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope ='col'>#</th>
                        <th scope ='col'>Nombre</th>
                        <th scope ='col'>Edad</th>
                        <th scope ='col'>Sexo</th>
                        <th scope ='col'>Carrera</th>
                        <th scope ='col'>Grupo</th>
                        <th scope ='col'>Matrícula</th>
                        <th scope ='col'>Ciclo Escolar</th>
                        <th scope ='col'>Cumpleaños</th>
                        <th scope ='col'>Lugar de nacimiento</th>
                        <th scope ='col'>Lugar de procedencia</th>
                        <th scope ='col'>Estado Civil</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($result)){
                    while($row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <th scope='row'><?php echo $row['id']; ?></td>
                            <td><?php echo $row['stName']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['sex']; ?></td>
                            <td><?php echo $row['major']; ?></td>
                            <td><?php echo $row['stGroup']; ?></td>
                            <td><?php echo $row['numberId']; ?></td>
                            <td><?php echo $row['scPeriod']; ?></td>
                            <td><?php echo $row['birthday']; ?></td>
                            <td><?php echo $row['birthplace']; ?></td>
                            <td><?php echo $row['provenance']; ?></td>
                            <td><?php echo $row['maritalStatus']; ?></td>
                        </tr>
                <?php } } else{
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>