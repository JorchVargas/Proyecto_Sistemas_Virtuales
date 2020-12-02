<?php
    //Conexión a sql
    $mysqli = new mysqli("db","root","123qwe*","");
    //Se crea la base de datos si no existe
    $sql = 'CREATE DATABASE IF NOT EXISTS registro_estudiantes';
    //Si se creo la bd entonces se crea la tabla
    if(mysqli_query($mysqli, $sql)){
        //Se selecciona la bd
        $mysqli->select_db('registro_estudiantes');
        //Query de create table
        $sql2 = "CREATE TABLE alumno (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            stName VARCHAR(60) NOT NULL,
            age int(3) NOT NULL,
            sex VARCHAR(20) NOT NULL,
            major VARCHAR(6) NOT NULL,
            stGroup VARCHAR(10) NOT NULL,
            numberId int(6) NOT NULL,
            scPeriod VARCHAR(20) NOT NULL,
            birthday VARCHAR(10) NOT NULL,
            birthplace VARCHAR(200) NOT NULL,
            provenance VARCHAR(200) NOT NULL,
            maritalStatus VARCHAR(8) NOT NULL
        )";
        $mysqli->query($sql2);
    }else{
        $mysqli->select_db('registro_estudiantes');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Formulario nuevo ingreso</title>
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
                    <span class="text-uppercase font-weight-bold">Formulario primera tutoría</span>
                </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="consulta.php">Consultar registros</a></a></li>
            </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="card">
            <div class="container">
                <br>
                <h1>Ficha del estudiante</h1>
                <p>Estimado (a) Profesor (a) – Tutor (a): Los datos que consigne en este instrumento, serán obtenidos 
                a partir de la primera entrevista que desarrolle con el Estudiante Tutelado. Informe al Estudiante que la 
                información es de carácter reservado, invitándolo a responder con sinceridad a las preguntas que se le plantean. 
                Muchas Gracias por su colaboración.</p>
                <form method="POST" action="guardado.php" autocomplete="off">

                    <div class="form-group">
                    <label for="stName">Nombre del alumno:</label>
                        <input placeholder="Nombre completo" class="form-control" id="stName" name="stName" type="text" required>
                    </div>

                    <div class="form-group">
                    <label for="age">Edad:</label>
                        <input placeholder="00" class="form-control" id="age" name="age" type="number" required>
                    </div>

                    <div class="form-group">
                    <label >Sexo:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input"type="radio" id="male" name="sex" value="Masculino" required>
                                <label class="form-check-label" for="male">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="female" name="sex" value="Femenino">
                                <label class="form-check-label" for="female">Femenino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="other" name="sex" value="Otro">
                                <label class="form-check-label" for="other">Otro</label>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="major">Carrera:</label>
                        <input id="major" name="major" list="carreras" required>
                            <datalist id="carreras">
                                <option value="LAG">
                                <option value="LMKT">
                                <option value="ISTI">
                                <option value="ITMA">
                                <option value="ITI">
                                <option value="ITEM">
                            </datalist>
                    </div>

                    <div class="form-group">
                    <label for="stGroup">Grupo:</label>
                        <input placeholder="TDX-0000" class="form-control" id="stGroup" name="stGroup" type="text" required>
                    </div>

                    <div class="form-group">
                    <label for="numberId">Matrícula:</label>
                        <input placeholder="XXXXXX" minlength="6" maxlength="6"class="form-control" id="numberId" name="numberId" type="number" required>
                    </div>

                    <div class="form-group">
                    <label for="scPeriod">Ciclo escolar:</label>
                        <input placeholder="Ene-Jun 20XX" class="form-control" id="scPeriod" name="scPeriod" type="text">
                    </div>

                    <div class="form-group">
                    <label for="birthday">Fecha de nacimiento:</label>
                        <input placeholder="XX/XX/XXXX" class="form-control" id="birthday" name="birthday" type="text" required>
                    </div>

                    <div class="form-group">
                    <label for="birthplace">Lugar de nacimiento:</label>
                        <input placeholder="Lugar de nacimiento" class="form-control" id="birthplace" name="birthplace" type="text" required>
                    </div>

                    <div class="form-group">
                    <label for="provenance">Lugar de procedencia:</label>
                        <input placeholder="Procedencia" class="form-control" id="provenance" name="provenance" type="text" required>
                    </div>

                    <div class="form-group">
                    <label for="">Estado Civil:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="maritalStatus" name="maritalStatus" value="Soltero" required>
                                <label class="form-check-label" for="maritalStatus">Soltero</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="maritalStatus" name="maritalStatus" value="Casado">
                                <label class="form-check-label" for="maritalStatus">Casado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="maritalStatus" name="maritalStatus" value="Otro">
                                <label class="form-check-label" for="maritalStatus">Otro</label>
                        </div>
                    </div>
                    <input onclick="return confirm('Are you sure you want to submit this form?');" class="btn btn-primary" type="submit" value="Enviar"><br>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<footer class="page-footer font-small pt-4" style="background: rgba(255, 255, 255,  0.5)">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <h5 class="text-uppercase">Univrersidad Politécnica de San Luis Potosí</h5>
                <p> Calle Urbano Villalón 500, La Ladrillera, 78369 San Luis, S.L.P.</p>
            </div>
        </div>
    </div>
</footer>
</html>