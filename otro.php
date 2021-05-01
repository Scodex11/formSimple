<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario PHP y MySQL</title>
</head>
<body>
    <!-- Cabecera -->
    <header>
        <div class="menu">
        <!-- Imagen para la cabecera -->
            <img src="imagenes/tiburon.svg" alt="">
        <!-- Lista -->
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    

    <div class="form1">
        <h1>Sus datos: </h1>

        <!-- Calculos -->
        <?php 
        // $_POST[''];

            // Datos
            $horasTrab = 0; $horasNoct = 0; $horasExtras = 0;
            $nombre = $_POST['nombre'];
            $porHora = $_POST['salarioPorHora'];
            $hijos = $_POST['CantHijos'];
            $horasTrab = $_POST['horasTrab'];
            $horasExtras = $_POST['horasExtras'];
            $horasNoct = $_POST['horasNoct'];
            

            // Calculamos sueldoNominal según salario por hora
            $ExtrasTotal = 0; $sueldoNominal = 0; $NoctTotal = 0;
            $ExtrasTotal = ($horasExtras * $porHora) * 2;
            $NoctTotal = ($horasNoct * $porHora) * 1.50;
            $sueldoNominal = ($porHora * $horasTrab) + $ExtrasTotal + $NoctTotal;

            // DESCUENTOS
            $BPS = 0;
            $FONASA = 0;
            $IRPF = 0;
            $FRL = 0;
            $salarioLiquido = 0;

            $BPS = $sueldoNominal * 0.18;
            
            if ($sueldoNominal>25000) {
                $IRPF = $sueldoNominal * 0.15;
            }

            if ($hijos>0) {
                $FONASA = $sueldoNominal * 0.06;
            }else {
                $FONASA = $sueldoNominal * 0.04;
            }
            
            

            $FRL = $sueldoNominal * 0.125;

            // Salario líquido
            $descuentos = $BPS + $IRPF + $FONASA + $FRL;
            $salarioLiquido = $sueldoNominal - $descuentos;
        ?>
        
 <h3>Empleado: </h3>
        <p><?php 
            echo "$nombre";
        ?></p>
 <h3>Descuentos: </h3>

        <p><b>Salario Nominal:</b> <?php 
            echo "$$sueldoNominal";
        ?></p>
        <p><b>BPS:</b> <?php 
            echo "$$BPS";
        ?></p>
        <p><b>IRPF:</b> <?php 
            echo "$$IRPF";
        ?></p>
        <p><b>FRL:</b> <?php 
            echo "$$FRL";
        ?></p>
        <p><b>FONASA:</b> <?php 
            echo "$$FONASA";
        ?></p>
        <p><b>Total:</b> <?php 
            echo "$$descuentos";
        ?></p>
        <br>
        <p><b>Salario Líquido:</b>
        <?php 
            echo "$$salarioLiquido";
        ?></p>
        <p><b>¿Le corresponde adelanto?</b>
        <?php 
        
        $adelanto = $_REQUEST['adelanto'];
        if ($adelanto == "si") {
                echo "SI ";
        }
        if ($adelanto == "no") {
            echo "NO";
         }
            
        ?></p>

    </div>
</body>
</html>


