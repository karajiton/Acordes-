<?php
$notas = [];


echo 'Bienvenid@ a la practica' . PHP_EOL;
echo 'Cuantas acordes quieres practicar?' . PHP_EOL;
$numero = readline();
$i = 0;
 While($i < $numero){
    echo 'Cual acorde quieres practicar? (Coloca el numero del acorde) 1-DO,2-RE,3-MI,4-FA,5-SOL,6-LA,7-SI ' . PHP_EOL;
    $nota = readline();
    if(!(is_numeric($nota) && $nota >= 1 && $nota <= 7)){
        echo 'tienes que introducir un numero del 1 al 7 que son los acordes' . PHP_EOL;
    }else{
        switch($nota){
            case '1':
                $notas[] = 'DO';
                break;
            case '2':
                $notas[] = 'RE';
                break;        
            case '3':
                $notas[] = 'MI';
                break;
            case '4':   
                $notas[] = 'FA';
                break;
            case '5':
                $notas[] = 'SOL';
                break;
            case '6':
                $notas[] = 'LA';
                break;
            case '7':
                $notas[] = 'SI';
                break;
        
        }
        $i++;
    }
}
echo 'Cada cuantos segundos quieres que sea el intervalo entre acordes' . PHP_EOL;
$intervalo = readline();
echo 'Cuanto tiempo quieres practicar (en segundos)?' . PHP_EOL;
$tiempoDePractica = readline();
$inicio = time();
while(true){
    if((time()- $inicio) >= $tiempoDePractica){
        break;
    }
    $Random = array_rand($notas);
    $notasRandom =$notas[$Random];
    echo $notasRandom . PHP_EOL;

    Sleep($intervalo);
}
echo 'termino la practica';