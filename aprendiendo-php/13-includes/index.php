        <?php 
        include 'includes/cabecera.php';
        //include_once 'includes/cabecera.php';//eso hace que solo lo va a incluir una vez
        //require '';//si se escribe mal el archivo se detiene la ejecucion y marca error
        
        /** Diferencia include y require
         * Los dos permiten incluir un archivo específico. Sin embargo, con la función require() 
         * el proceso termina con un error fatal si el archivo no puede ser incluido. Mientras que 
         * con include() el proceso puede pasar y saltárselo al próximo paso en la ejecución. 
        */
        ?>
        <hr/>
        <!--Contenido-->
        <div>
            <h2>Esta es a página de inicio</h2>
            <p>Texto de prueba de la paginad de inicio</p>
        </div>
        <hr/>
        
        <?php 
        include 'includes/footer.php';
        ?>