<?php



$notas = ['DO', 'RE','MI','FA','SOL','LA', 'SI'];


echo 'Bienvenid@ a la practica' . PHP_EOL;
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