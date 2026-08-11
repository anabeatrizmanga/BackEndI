<?php

//var site
$titulo = "Aula de PHP";
$contexto = "Está é uma aula introdutória";
$aluno = "Beatriz";
$numero = rand(0,20);

//var parte site
$header = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"style.css\">
    <title>$titulo</title>
    </head>
<body>";

$main = "<header>
    <div>oi</div>
    <div>oioi</div>
    <div>oioioi</div>
   </header>
   <main><h3>$contexto</h3></main>
   <main><p>Desenvolvido por $aluno gerado em $numero segs</p></main>";

$footer =  "<footer>Esse é o footer</footer>";

echo $header;
echo $main;
echo $footer;

?>