<?php
    $ruta = '../css';
    require_once ('../html/head.html');
?>

    <section id="sectionSecondIndex">
        <header class="objectsSecondIndex">
            <h1>Financiera "Pagas o Cobras"</h1> 
        </header>
        
        <main class="objectsSecondIndex">
            <form action="../php/registro.php" method="POST" enctype="multipart/form-data">
            
                <section>
                    <label for="DNI">DNI:</label>
                    <input class="inputs" type="text" id="DNI" name="DNI" placeholder="Ingrese su DNI">
                </section>

                <section>
                    <label for="Monto">Monto:</label>
                    <input class="inputs" type="number" id="Monto" name="Monto">
                </section>

                <input type="submit" class="inputs" value="Solicitar Préstamo" id="buttonSubmitSolicitar"> 

            </form>
        </main>
    </section>
        


<?php 
    require_once ('../html/footer.html');
?>