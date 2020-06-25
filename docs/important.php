<?php
    $mostrar = true;
    if($mostrar === true){
?>

<section class="importante center">
    <div class="data center">
        <h1 class="title__important">Covid <span>México</span></h1>
        <p class="fechaHora"></p>
        <div class="data__cont center">
            <div class="data__tipo">
                <div class="data__celda">Nuevos Confirmados</div>
                <div class="data__celda">Nuevos Muertos</div>
                <div class="data__celda">Nuevos Recuperados</div>
                <div class="data__celda">Total Confirmados</div>
                <div class="data__celda">Total Muertos</div>
                <div class="data__celda">Total Recuperados</div>
            </div>
            <div class="data__numero">
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
            </div>
        </div>

        <h1 class="title__important">Covid <span>Global</span></h1>
        <p class="fechaHora"></p>
        <div class="data__cont center">
            <div class="data__tipo">
                <div class="data__celda">Nuevos Confirmados</div>
                <div class="data__celda">Nuevos Muertos</div>
                <div class="data__celda">Nuevos Recuperados</div>
                <div class="data__celda">Total Confirmados</div>
                <div class="data__celda">Total Muertos</div>
                <div class="data__celda">Total Recuperados</div>
            </div>
            <div class="data__numero">
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
                <div class="data__celda-numero"></div>
            </div>
        </div>
        <img id="img-importante" src="">
        <span class="countri">
            <a id="countri" href="https://covid19api.com/" target="_blank" rel="noopener" title="Datos por api">Datos por api  </a>
        </span>
    </div>
    <script src="important-sec/js/covid.js"></script>
</section>

<?php
    }
?>