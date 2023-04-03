<?php
    $ruta = '../css';
    require_once("../html/head.html");
    echo '<main>';
?>


    <article id="speech">

        <?php
            if (!empty($_POST['DNI'])) {

                $DNI = trim($_POST['DNI']);

                if (!empty($_POST['Monto'])) {

                    $monto = trim(($_POST['Monto']));

                    if (($DNI > 10000000) && ($DNI <= 57000000)) {

                        if ($monto >= 0) {
                            require_once('../php/choices.php');

                            require_once('../php/functions.php');
                            guardarRegistro($DNI, $monto);
                            

                        } else {
                            echo '<p>Ingrese un monto válido</p>';
                            header('refresh:3; url=../index.php');
                        }
                        
                    } else {
                        echo '<p>Ingrese un DNI válido</p>';
                        header('refresh:3; url=../index.php');
                    }
                } else {
                    echo '<p>Ingrese un monto válido</p>';
                    header('refresh:3; url=../index.php');
                }
 
            } else {
                echo '<p>Ingrese su número de documento.</p>';
                header('refresh:3; url=../index.php');
            }
        ?>

    </article>


    
<?php
    echo '</main>';

    require_once('../html/footer.html');
?>