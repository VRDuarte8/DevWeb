<?php
    session_start();

    $texto = array();
    foreach($_POST as $valor){
        array_push($texto, $valor);
    }
    $texto = str_replace('#', '-', $texto);
    $texto = $_SESSION['id'] . '#' . implode('#', $texto) . PHP_EOL;

    $arquivo = fopen('arquivo.txt', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: abrir_chamado.php')
?> 