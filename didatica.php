<?php

$n       = isset($_GET['n'])&&is_int($_GET['n'])?$_GET['n']:0; //n�mero inteiro a ser validado
$linha   = 2; //linhas iniciais
$coluna  = ($n - 1) / $linha;
$colunaN = 1; //Coluna da linha posterior sempre come�a com uma coluna

/*
    A verifica��o continua ate que a coluna retorne a posi��o 1,
    ou que na nova linha tenha a mesma quantidade de colunas das
    linhas anteriores.
*/
while ($coluna > 1){
    $coluna -=1;
    $colunaN+=$linha;

    if ($colunaN > $coluna) {
        $colunaN = ($colunaN - $coluna);
        $linha+=1;
    }
    
    if ($colunaN == $coluna) break; 
}

if ($n == 2 || $coluna == 1) {
    echo "<br>$n = primo.<br>";
}elseif ($n > 0){
    echo "<br>$n = composto.<br>";
}