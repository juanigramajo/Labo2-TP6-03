<?php
    $ruta = '../css';
    require_once ('../html/head.html');
?>
    <section id="sectionPagar">
        <header class="objectsPagar">
            <h1>Financiera "Pagas o Cobras"</h1> 
        </header>
        
        <main class="objectsPagar">
            <form action="../php/debts.php" method="POST" enctype="multipart/form-data">
            
                <section>
                    <label for="DNI">DNI:</label>
                    <input class="inputs" type="text" id="DNI" name="DNI" placeholder="Ingrese su DNI">
                </section>
    
                <input type="submit" class="inputs" value="Pagar" id="buttonSubmitPagar"> 
    
            </form>
        </main>
    </section>
    


<?php 
    require_once ('../html/footer.html');
?>