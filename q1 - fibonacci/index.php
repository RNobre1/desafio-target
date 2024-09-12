<?php
    $numero = 98; //número a ser verificado
    $fibonacci = array(0, 1);

    if($numero < 0)
        echo "Esse numero não faz parte da sequência de fibonnaci\n";
    else{
        for ($i = 0; $i < $numero; $i++) {
            $aux = $fibonacci[$i] + $fibonacci[$i + 1]; //soma os dois últimos da sequência
            $fibonacci[] = $aux; //adiciona o novo número

            if ($numero == $aux){
                echo "Esse número faz parte da sequência de Fibonnaci\n";
                break;
            }
            elseif ($aux > $numero) {
                echo "Esse número não faz parte da sequência de Fibonnaci\n";
                break;
            }
        }
    }
    //imprime a sequência de fibonacci
    echo "Sequência de Fibonacci: [";
    for ($i=0; $i < count($fibonacci); $i++) {
        echo $fibonacci[$i] . ", ";
    }
    echo "]";
?>