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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="https://www.instagram.com/facu_dev/">Instagram</a></li>
                    <li><a href="#">Contactoss</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
    
    <section>
    <!-- Formulario  -->
        <form class="form1" action="otro.php" method="post">
            <h1>Calculadora Liquidación</h1>
            <!-- textfields -->
            <label for="1">Ingrese su nombre: </label>
            <input class="controls" type="text" name="nombre" placeholder="Nombre del empleado">

            <label for="2">Salario por hora: </label>
            <input class="controls" type="number" name="salarioPorHora" placeholder="Sueldo por hora">
            
            <label for="3">Hijos a cargo: </label>
            <input class="controls" type="number" name="CantHijos" placeholder="Ingrese cuantos hijos">

            <label for="4">Horas trabajadas: </label>
            <input class="controls" type="number" name="horasTrab" placeholder="Ingrese horas trabajadas">
            
            <label for="5">Horas extras: </label>
            <input class="controls" type="number" name="horasExtras" placeholder="Ingrese horas extras">
            
            <label for="6">Horas nocturnas: </label>
            <input class="controls" type="number" name="horasNoct" placeholder="Ingrese horas nocturnas">

            <label for="6">Corresponde adelanto: </label>
            <br>
            <input type="radio" name="adelanto" value="si">Si
            <input type="radio" name="adelanto" value="no">No
     
            <!-- botón "enviar" -->
            <div id = "boton">
                <input class="send" type="submit" name ="enviar" value = "Calcular">
            </div>
            
        </form>
    </section>

</body>
</html>

