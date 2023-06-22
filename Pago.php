<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Pago Empleado</title>
</head>
<body>
    <header>
        <h1 id= "centrado">PAGO DE EMPLEADO</h1>
    </header>
    <section>
        <table align="center">
            <form action="pago.php" method="post">

<tr>
<td width="200">Empleado</td>
<td><input type="text" name="txtEmpleado" id="" size="40"></td>
</tr>
<tr>
<td width="200">Horas Trabajadas</td>
<td><input type="text" name="txtHoras" id=""></td>
</tr>
<tr>
<td width="200">Tarifa Por Hora</td>
<td><input type="text" name="txtTarifa" id=""></td>
</tr>
<tr>    
    <td width="200"></td>
    <td>
         <input type="submit" value="Procesar">
         <input type="reset" value="Limpiar">
    </td>
</tr>
 

<!-- Codigo php -->
<?php
error_reporting(0);
$empleado = $_POST['txtEmpleado'];
$horas = $_POST['txtHoras'];
$tarifa = $_POST['txtTarifa'];

// calculos

$salarioBruto = $horas * $tarifa;
$descuentosAnses = $salarioBruto * 0.14;
$obraSocial = $salarioBruto * 0.03;
$salarioNeto = $salarioBruto - $descuentosAnses - $obraSocial;

?>

<tr>
<td>Empleado</td>
                 <td><?php echo $empleado; ?></td>
               </tr>


               <tr>
<td>Horas Trabajadas</td>
                 <td><?php echo $horas; ?></td>
               </tr>
               <tr>
<td>Tarifa Horas</td>
                 <td><?php echo "$" . number_format($tarifa, 2); ?></td>
               </tr>
               <tr>
<td>Sueldo Bruto</td>
<td><?php echo "$" . number_format($salarioBruto, 2); ?></td>
               </tr>

               <td>Descuento Obra Social</td>
<td><?php echo "$" . number_format($obraSocial, 2); ?></td>
               </tr>
               <td>Descuento Anses</td>
<td><?php echo "$" . number_format($descuentosAnses, 2); ?></td>
               </tr>

               <td>Sueldo Neto</td>
<td><?php echo "$" . number_format($salarioNeto, 2); ?></td>
               </tr>

            </form>
        </table>
    </section>
</body>
</html>