
<?php

    require_once('functions.php');
    $fechaHoraActual = fechaHoraActual();
    $dias = dias($timeFile);
    if ($dias == 0) {
        $montoAPagar = $montoFile;
    } else {
        $montoAPagar = total($montoFile, $dias);
    }

    echo '
        <section id="sectionDatos">
            <header>
                <h1>Financiera "Pagas o Cobras"</h1> 
            </header>

            <main>

                <h3>
                    Cálculo de deuda
                </h3>


                <hr>


                <p>
                    Monto del préstamo: <strong>$'. $montoFile. '</strong>
                </p>


                <hr>


                <p>
                    Fecha de solicitud: <strong>'. $timeFile. '</strong>.
                </p>


                <hr>


                <p>
                    Fecha actual: <strong>'. $fechaHoraActual. '</strong>.
                </p>


                <hr>


                <p>
                    Cantidad de días: <strong>'. $dias. '</strong>.
                </p>


                <hr>


                <p id="pmontofinal">
                    Monto a pagar: <strong>$'. $montoAPagar. '</strong>.
                </p>
            
            </main>
        </section>


        ';
?>