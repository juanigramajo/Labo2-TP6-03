<?php
    $ruta = '../css';
    require_once("../html/head.html");
?>


    <article id="speech">

        <?php
            if (!empty($_POST['DNI'])) {

                $DNI = trim($_POST['DNI']);

                    if (($DNI > 10000000) && ($DNI <= 57000000)) {

                        $nombreArchivo = '../txt/datos.txt';
                            $archivo = fopen ($nombreArchivo, 'r');
                            $login = false;
        
                            while (!feof($archivo) && $login == false) {
                                $linea = fgets($archivo);
                                if ($linea != '') {
                                    $cliente = explode(';', $linea);
                                }
        
                                $dniFile = trim($cliente[0]);
                                $montoFile = trim($cliente[1]);
                                $timeFile = trim($cliente[2]);
        
                                if ($DNI == $dniFile) {
                                    $login = true;
                                    require_once('datos.php');
                                }
                            }
                            
                            if ($login == false) {
                                echo '<p>No encontramos un DNI similar, ingrese otro...</p>';
                                header('refresh:3; url=../index.php');
                            }

                        
                    } else {
                        echo '<p>Ingrese un DNI válido</p>';
                        header('refresh:3; url=../index.php');
                    }
 
            } else {
                echo '<p>Ingrese su número de documento.</p>';
                header('refresh:3; url=../index.php');
            }
        ?>

    </article>

    
<?php

    require_once('../html/footer.html');
?>