<?php
    ob_start();
    if(!empty($_POST)){
        if(isset($_POST['stName']) && isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['major']) 
        && isset($_POST['stGroup']) && isset($_POST['numberId']) && isset($_POST['scPeriod']) && isset($_POST['birthday']) 
        && isset($_POST['birthplace']) && isset($_POST['provenance']) && isset($_POST['maritalStatus'])){
            $mysqli = new mysqli("db","root","123qwe*","registro_estudiantes");
            //print_r($_POST);
            $stName         = $_POST['stName'];
            $age            = $_POST['age'];
            $sex            = $_POST['sex'];
            $major          = $_POST['major'];
            $group          = $_POST['stGroup'];
            $numberId       = $_POST['numberId'];
            $scPeriod       = $_POST['scPeriod'];
            $birthday       = $_POST['birthday'];
            $birthplace     = $_POST['birthplace'];
            $provenance     = $_POST['provenance'];
            $maritalStatus  = $_POST['maritalStatus'];

            $sql="INSERT INTO `alumno` (`stName`,`age`,`sex`,`major`,`stGroup`,`numberId`,`scPeriod`,`birthday`,`birthplace`,`provenance`,`maritalStatus`) 
                VALUES ('$stName','$age','$sex','$major','$group','$numberId','$scPeriod','$birthday','$birthplace','$provenance','$maritalStatus')";
            if($mysqli->query($sql)){
                echo "<script language='javascript'>alert('Se han guardado con éxito los datos');</script>";
                header('Location: index.php');
            }else{
                echo "<script language='javascript'>alert('No se pudieron guardar los datos');</script>";
                header('Location: index.php');
            }
        }else{
            echo "<script language='javascript'>alert('Error, no se han llenado todos los campos requeridos');</script>";
            header('Location: index.php');
        }
    }
?>