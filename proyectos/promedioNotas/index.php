<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Promedio notas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<?php $totalAlumnos = 0 ?>
    <div class="container-md">
        <div class="row">
            <h1 align="center">Promedio de notas de alumnos</h1>
        </div>

        <div class="row">
            <form action="" method="post" id="calcular" name="calcular" autocomplete="off">
                <div class="form-group">
                    <label for="sueldo_base">Cantidad de alumnos:</label>
                    <input type="number" class="form form-control" name="numeroAlumnos" id="numeroAlumnos" placeholder="Introdusca la cantidad de alumnos" autofocus required>
                </div>
                <br>
                <div class="form form-group">
                    <button class="btn btn-primary" id="continuar" name="continuar" type="submit">Continuar</button>
                </div>
            </form>
        </div>

        <br><br>
        <div class="row">
            <form action="" method="post" id="calcular" name="calcular" autocomplete="off">
                <div class="form-group">

                    <?php

                    if (isset($_POST['continuar'])) {
                        $totalAlumnos = $_POST['numeroAlumnos'];

                        for ($i = 0; $i < $totalAlumnos; $i++) {
                            echo
                            "
                            <br>
                            <input type='text' class='form form-control' name='nombres[]' id='nombre' placeholder='Introdusca el nombre del alumno' autofocus required>
                            <input type='text' class='form form-control' name='notas[]' id='nota' placeholder='Introdusca la nota del alumno' required>";
                        }
                        echo "
                        </div>
                        <br>                   
                        <div class='form form-group'>
                            <button class='btn btn-primary' id='calcular' name='calcular' type='submit'>Guardar</button>
                        </div>
                        ";
                    }
                    ?>
            </form>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nota</th>

                </tr>
            </thead>
            <tbody>

                <?php
                $suma = 0;
                if (isset($_POST["calcular"])) {
                    $txtnombres = $_POST["nombres"];
                    $txtnotas = $_POST["notas"];

                    $totalAlumnos = count($txtnombres);
                    for ($j = 0; $j < $totalAlumnos; $j++) {
                        $suma += $txtnotas[$j];
                        echo "
                        <tr>
                        <th scope='row'>" . ($j + 1) . "</th>
                        <td>$txtnombres[$j]</td>
                        <td>$txtnotas[$j]</td>
                        </tr>
                        ";
                    }
                }
                ?>

                <tr>
                    <td colspan=2>
                        Promedio de la materia
                    </td>
                    <td>
                        <?php
                        if ($totalAlumnos != 0) {
                            echo $suma / $totalAlumnos;
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

