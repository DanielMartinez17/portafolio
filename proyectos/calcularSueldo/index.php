<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jercicio 2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<?php
    $sueldo_base = 0;
    $total_ventas = 0;
    $comision = 0;
    $ueldo_total = 0;
?>
    <div class="container-md">
            <div class="row">
                <h1 align="center">Calcular sueldo</h1>
            </div>

            <div class="row">
                <form action="" method="post" id="calcular" name="calcular" autocomplete="off">
                    <div class="form-group">
                        <label for="sueldo_base">Sueldo base:</label>
                        <input type="number" class="form form-control" name="sueldo_base" id="sueldo_base" placeholder="Introdusca su sueldo" autofocus required>
                    </div>
                    <br>                   
                    <div class="form-group">
                        <label for="total_ventas">Total de ventas:</label>
                        <input type="number" class="form form-control" name="total_ventas" id="total_ventas" placeholder="Introdusca el total de ventas realizadas" autofocus required>
                    </div>
                    <br>
                    <div class="form form-group">
                        <button class="btn btn-primary" id="calcular" name="calcular" type="submit">Calcular</button>
                    </div>
                </form>

            </div>

            <?php
            $sueldo_total = 0;

            if (isset($_POST['calcular'])) {
                $sueldo_base = $_POST['sueldo_base'];
                $total_ventas = $_POST['total_ventas'];

                $comision = $total_ventas * 0.10;

                $sueldo_total = $sueldo_base + $comision;
            }
            ?>

            <br><br>
            <div class="alert alert-primary" role="alert">
                <strong>Sueldo base: $</strong><?php echo $sueldo_base ?>
            </div>
            <div class="alert alert-primary" role="alert">
                <strong>Comisión: $</strong><?php echo $comision ?>
            </div>
            <div class="alert alert-primary" role="alert">
                <strong>Sueldo total: $</strong><?php echo $sueldo_total?>
            </div>
    </div>
</body>
</html>