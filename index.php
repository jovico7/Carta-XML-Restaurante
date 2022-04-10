<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- título de página -->
    <title>Título de la página</title>
    <!-- ícono de pàgina -->
    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <!-- javascript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row rowprincipal">
<?php
if (file_exists('xml/carta.xml')) {
    $menu = simplexml_load_file('xml/carta.xml');
} else {
    exit('Error abriendo carta.xml.');
}
?> 
<div class="column-1">
    <h1 class="centrado titulo">La Española</h1>
</div>
        <br>
        <ul>
            <div class="row rowinterno">
                <?php
                $aux=[];
                $tipos=array();
            foreach($menu->plato as $plato) {
                switch((string)$plato['tipo']){
                    case 'TAPITAS':
                        if (!in_array('TAPITAS',$tipos)) {
                            array_push($tipos,'TAPITAS');
                            echo '<div class="column-1" onClick="tapitas();">'; // onClick = tapitas
                            echo '<h3 class="centrado fuentetitulo">TAPITAS</h3>';
                            echo '</div>';
                        }
                        echo '<div class="column-1 plato_tapitas oculto">';
                        echo '<b class="nombre texto">'.$plato->nombre.'</b><b class="nombre texto derecha">'.$plato->precio.'</b><br>';
                        echo '<p class="descripcion texto">'.$plato->descripcion.' '.$plato->calorias.'</p>';
                        foreach ($plato->caracteristicas->caracteristica as $carac) {
                            if (($carac) == 'carne') {
                                echo "<img class='svg' src='./img/carne.svg' alt='carne'>";
                            }
                            if (($carac) == 'gluten') {
                                echo "<img class='svg' src='./img/gluten.svg' alt='gluten'>";
                            }
                            if (($carac) == 'huevos') {
                                echo "<img class='svg' src='./img/huevos.svg' alt='huevos'>";
                            }
                            if (($carac) == 'lacteo') {
                                echo "<img class='svg' src='./img/lacteo.svg' alt='lacteo'>";
                            }
                            if (($carac) == 'marisco') {
                                echo "<img class='svg' src='./img/marisco.svg' alt='marisco'>";
                            }
                            if (($carac) == 'pescado') {
                                echo "<img class='svg' src='./img/pescado.svg' alt='pescado'>";
                            }
                            if (($carac) == 'picante') {
                                echo "<img class='svg' src='./img/picante.svg' alt='picante'>";
                            }
                            if (($carac) == 'vegano') {
                                echo "<img class='svg' src='./img/vegano.svg' alt='vegano'>";
                            }
                        }
                        echo '</div>';
                        break;
                    case 'PLATOS':
                        if (!in_array('PLATOS',$tipos)) {
                            array_push($tipos,'PLATOS');
                            echo '<div class="column-1" onClick="platazos();">'; // onClick = platazos
                            echo '<h3 class="centrado fuentetitulo">PLATOS</h3>';
                            echo '</div>';
                        }
                        echo '<div class="column-1 plato_platazos oculto">';
                        echo '<b class="nombre texto">'.$plato->nombre.'</b><b class="nombre texto derecha">'.$plato->precio.'</b><br>';
                        echo '<p class="descripcion texto">'.$plato->descripcion.' '.$plato->calorias.'</p>';
                        foreach ($plato->caracteristicas->caracteristica as $carac) {
                            if (($carac) == 'carne') {
                                echo "<img class='svg' src='./img/carne.svg' alt='carne'>";
                            }
                            if (($carac) == 'gluten') {
                                echo "<img class='svg' src='./img/gluten.svg' alt='gluten'>";
                            }
                            if (($carac) == 'huevos') {
                                echo "<img class='svg' src='./img/huevos.svg' alt='huevos'>";
                            }
                            if (($carac) == 'lacteo') {
                                echo "<img class='svg' src='./img/lacteo.svg' alt='lacteo'>";
                            }
                            if (($carac) == 'marisco') {
                                echo "<img class='svg' src='./img/marisco.svg' alt='marisco'>";
                            }
                            if (($carac) == 'pescado') {
                                echo "<img class='svg' src='./img/pescado.svg' alt='pescado'>";
                            }
                            if (($carac) == 'picante') {
                                echo "<img class='svg' src='./img/picante.svg' alt='picante'>";
                            }
                            if (($carac) == 'vegano') {
                                echo "<img class='svg' src='./img/vegano.svg' alt='vegano'>";
                            }
                        }
                        echo '</div>';
                        break;
                    case 'ALERGENOS':
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/carne.svg' alt='carne'><b class='texto'> - Carne</b>";
                        echo '</div>';
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/gluten.svg' alt='gluten'><b class='texto'> - Gluten</b>";
                        echo '</div>';
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/huevos.svg' alt='huevos'><b class='texto'> - Huevos</b>";
                        echo '</div>';
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/lacteo.svg' alt='lacteo'><b class='texto'> - Lácteo</b>";
                        echo '</div>';
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/marisco.svg' alt='marisco'><b class='texto'> - Marisco</b>";
                        echo '</div>';
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/pescado.svg' alt='pescado'><b class='texto'> - Pescado</b>";
                        echo '</div>';
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/picante.svg' alt='picante'><b class='texto'> - Picante</b>";
                        echo '</div>';
                        echo '<div class="column-3">';
                        echo "<ul><img class='svg2' src='./img/vegano.svg' alt='vegano'><b class='texto'> - Vegano</b>";
                        echo '</div>';
                    }
                }
                ?>

            </div>
            <div class="row rowinterno">
            <?php
            foreach($menu->plato as $plato) {
                switch((string)$plato['tipo']){
                    case 'PASTAS':
                        if (!in_array('PASTAS',$tipos)) {
                            array_push($tipos,'PASTAS');
                            echo '<div class="column-1" onClick="pastas();">'; // onClick = pastas
                            echo '<h3 class="centrado fuentetitulo">PASTAS</h3>';
                            echo '</div>';
                        }
                        echo '<div class="column-1 plato_pastas oculto">';
                        echo '<b class="nombre texto">'.$plato->nombre.'</b><b class="nombre texto derecha">'.$plato->precio.'</b><br>';
                        echo '<p class="descripcion texto">'.$plato->descripcion.' '.$plato->calorias.'</p>';
                        foreach ($plato->caracteristicas->caracteristica as $carac) {
                            if (($carac) == 'carne') {
                                echo "<img class='svg' src='./img/carne.svg' alt='carne'>";
                            }
                            if (($carac) == 'gluten') {
                                echo "<img class='svg' src='./img/gluten.svg' alt='gluten'>";
                            }
                            if (($carac) == 'huevos') {
                                echo "<img class='svg' src='./img/huevos.svg' alt='huevos'>";
                            }
                            if (($carac) == 'lacteo') {
                                echo "<img class='svg' src='./img/lacteo.svg' alt='lacteo'>";
                            }
                            if (($carac) == 'marisco') {
                                echo "<img class='svg' src='./img/marisco.svg' alt='marisco'>";
                            }
                            if (($carac) == 'pescado') {
                                echo "<img class='svg' src='./img/pescado.svg' alt='pescado'>";
                            }
                            if (($carac) == 'picante') {
                                echo "<img class='svg' src='./img/picante.svg' alt='picante'>";
                            }
                            if (($carac) == 'vegano') {
                                echo "<img class='svg' src='./img/vegano.svg' alt='vegano'>";
                            }
                        }
                        echo '</div>';
                        break;
                    case 'POSTRES':
                        if (!in_array('POSTRES',$tipos)) {
                            array_push($tipos,'POSTRES');
                            echo '<div class="column-1" onClick="postre();">'; // onClick = postre
                            echo '<h3 class="centrado fuentetitulo">POSTRES</h3>';
                            echo '</div>';
                        }
                        echo '<div class="column-1 plato_postres oculto">';
                        echo '<b class="nombre texto">'.$plato->nombre.'</b><b class="nombre texto derecha">'.$plato->precio.'</b><br>';
                        echo '<p class="descripcion texto">'.$plato->descripcion.' '.$plato->calorias.'</p>';
                        foreach ($plato->caracteristicas->caracteristica as $carac) {
                            if (($carac) == 'carne') {
                                echo "<img class='svg' src='./img/carne.svg' alt='carne'>";
                            }
                            if (($carac) == 'gluten') {
                                echo "<img class='svg' src='./img/gluten.svg' alt='gluten'>";
                            }
                            if (($carac) == 'huevos') {
                                echo "<img class='svg' src='./img/huevos.svg' alt='huevos'>";
                            }
                            if (($carac) == 'lacteo') {
                                echo "<img class='svg' src='./img/lacteo.svg' alt='lacteo'>";
                            }
                            if (($carac) == 'marisco') {
                                echo "<img class='svg' src='./img/marisco.svg' alt='marisco'>";
                            }
                            if (($carac) == 'pescado') {
                                echo "<img class='svg' src='./img/pescado.svg' alt='pescado'>";
                            }
                            if (($carac) == 'picante') {
                                echo "<img class='svg' src='./img/picante.svg' alt='picante'>";
                            }
                            if (($carac) == 'vegano') {
                                echo "<img class='svg' src='./img/vegano.svg' alt='vegano'>";
                            }
                        }
                        echo '</div>';
                        break;
                    case 'VINOS':
                        if (!in_array('VINOS',$tipos)) {
                            array_push($tipos,'VINOS');
                            echo '<div class="column-1" onClick="vinos();">'; // onClick = vinos
                            echo '<h3 class="centrado fuentetitulo">VINOS</h3>';
                            echo '</div>';
                        }
                        echo '<div class="column-1 plato_vinos oculto">';
                        echo '<b class="nombre texto">'.$plato->nombre.'</b><b class="nombre texto derecha">'.$plato->precio.'</b><br>';
                        echo '<p class="descripcion texto">'.$plato->descripcion.' '.$plato->calorias.'</p>';
                        foreach ($plato->caracteristicas->caracteristica as $carac) {
                            if (($carac) == 'carne') {
                                echo "<img class='svg' src='./img/carne.svg' alt='carne'>";
                            }
                            if (($carac) == 'gluten') {
                                echo "<img class='svg' src='./img/gluten.svg' alt='gluten'>";
                            }
                            if (($carac) == 'huevos') {
                                echo "<img class='svg' src='./img/huevos.svg' alt='huevos'>";
                            }
                            if (($carac) == 'lacteo') {
                                echo "<img class='svg' src='./img/lacteo.svg' alt='lacteo'>";
                            }
                            if (($carac) == 'marisco') {
                                echo "<img class='svg' src='./img/marisco.svg' alt='marisco'>";
                            }
                            if (($carac) == 'pescado') {
                                echo "<img class='svg' src='./img/pescado.svg' alt='pescado'>";
                            }
                            if (($carac) == 'picante') {
                                echo "<img class='svg' src='./img/picante.svg' alt='picante'>";
                            }
                            if (($carac) == 'vegano') {
                                echo "<img class='svg' src='./img/vegano.svg' alt='vegano'>";
                            }
                        }
                        echo '</div>';
                        break;
                }
                }
            ?>
            </div>
        </ul>
    </div>
</body>
<script>
    // Tapitas
var tapi=true; // Sentencio la variable
function tapitas() { // LLamo a la función tapitas antes mencionada con onClick
    if (tapi) { // Si tapi existe...
        tapi = false; // Digo que es falso
        var platos = document.getElementsByClassName("plato_tapitas"); // Llamo al elemento que tiene el nombre de clase de plato_tapitas
        for (var i = 0; i < platos.length; i+=1) { // Digo que i=0 y le digo que i < la cantidad de platos que hay y luego le añado 1 a i
            platos[i].classList.remove("oculto"); // Remuevo la característica "oculto" de la clase de Tapitas
        }
    }
    else { // Si tapi no existe es porque anteriormente la hemos abierto, entonces volvemos a decir que tapi es true
        tapi = true;
        var platos = document.getElementsByClassName("plato_tapitas"); // Creo una variable que se llama platos de cada uno de los platos anteriores (un array)
        for (var i = 0; i < platos.length; i+=1) { // Recorro el array platos
            platos[i].classList.add("oculto"); // Le añado la característica "oculto" de la clase de Tapitas a cada plato
        }
    }
    
    
}

    // Platos
var plat=true;
function platazos() {
    if (plat) {
        plat = false;
        var platos = document.getElementsByClassName("plato_platazos");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.remove("oculto");
        }
    }
    else {
        plat = true;
        var platos = document.getElementsByClassName("plato_platazos");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.add("oculto");
        }
    }
}

    // Pastas
var past=true;
function pastas() {
    if (past) {
        past = false;
        var platos = document.getElementsByClassName("plato_pastas");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.remove("oculto");
        }
    }
    else {
        past = true;
        var platos = document.getElementsByClassName("plato_pastas");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.add("oculto");
        }
    }    
}

    // Postres
var post=true;
function postre() {
    if (post) {
        post = false;
        var platos = document.getElementsByClassName("plato_postres");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.remove("oculto");
        }
    }
    else {
        post = true;
        var platos = document.getElementsByClassName("plato_postres");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.add("oculto");
        }
    }
}

    // Vinos
var vino=true;
function vinos() {
    if (vino) {
        vino = false;
        var platos = document.getElementsByClassName("plato_vinos");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.remove("oculto");
        }
    }
    else {
        vino = true;
        var platos = document.getElementsByClassName("plato_vinos");
        for (var i = 0; i < platos.length; i+=1) {
            platos[i].classList.add("oculto");
        }
    }  
}

</script>
</html>