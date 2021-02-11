<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Validar Formulario PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Validar Formulario PHP</h1>
        
         <?php
            if( isset( $_GET['error'] ) ) {
                $error = $_GET['error'];
                if ($error == 'faltan_datos') {
                    echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario </strong>';
                }
            }
         ?>
        
        <form action="procesar_formulario.php" method="POST">
            
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[a-zA-Z]+" /><br/>
           
            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[a-zA-Z]+"  /><br/>
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"  /><br/>
            
            <label for="email">Email</label><br/>
            <input type="text" name="email" required="required"  /><br/>
            
            <label for="pass">Password</label><br/>
            <input type="password" name="pass" required="required" minlength="5"  /><br/>
            
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
