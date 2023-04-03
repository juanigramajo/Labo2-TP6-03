<?php
    $ruta = '../css';
    require_once ('../html/head.html');
?>

    <section id="sectionChoices">
        <header>
            <h1>Financiera "Pagas o Cobras"</h1> 
        </header>
        
        <main id="mainChoices">
            <p>
                ¡Prestamo aprobado con éxito!
            </p>

            <section id="buttonsChoices">
                <a id="buttonSolicitarChoices" href="secondIndex.php">Solicitar un nuevo préstamo</a>
        
                <a id="buttonPagarChoices" href="pagar.php">Pagar un préstamo autorizado</a>
            </section>
        </main>
    </section>
    


<?php 
    require_once ('../html/footer.html');
?>