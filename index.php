<?php

//$numero = rand(0,10);
//$nome = "Bia";

//$frase1 = "O(a) aluno se chama $nome e está estudando BackEndI $numero"; /*"" processa oq ta dentro, vai mostrar oq ta dentro da var*/  
//$frase2 = 'O(a) aluno se chama ' .$nome. ' e está estudando BackEndI'; /*'' so imprimi a frase que tá, não le a variavel em si, precisa colocar .$var.*/

//echo $frase1;
//echo "<br>";
//echo $frase2;
//echo "<br>";
//echo $numero;

//echo "Oioi!";

$titulo = "Aula de PHP";
$contexto = "Está é uma aula introdutória";
$aluno = "Beatriz";
$numero = rand(0,20);

echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>PHP</title>
</head>
<body>
    <h3>$contexto</h3>
    <br>
    <p>Desenvolvido por $aluno gerado em $numero segs</p>
</body>
</html>";

?>