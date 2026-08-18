<?php

function somar ($a, $b){
    return $a + $b;
}

//$resultado = somar(2,3);
//echo $resultado;

function creatHeader($titulo){
    $header =
    "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"style.css\">
    <title>$titulo</title>
    </head>
    <body>
    <header>
    <div>oi</div>
    <div>oioi</div>
    <div>oioioi</div>
    </header>";
    return $header;

}

function creatMain($contexto) {
    $main = 
     "<main><h3>$contexto</h3></main>";
     return $main;
     

}

function creatFooter($footer) {
    $footer =
    "<br>
    <footer>$footer</footer>";
    return $footer;
}


echo creatHeader('Back-EndI - PHP');
echo creatMain('Main');
echo creatFooter('footer');

?>