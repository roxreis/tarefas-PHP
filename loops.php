<?php
//exercicio 4

$cara = 0;
$totalRodadas = 0;

while ($cara <= 5) {
    $caraCoroa = mt_rand(0,1);  
    $totalRodadas++;
        if ($caraCoroa == 1) {
            $cara++;
        }
      
}
echo "Foram necessarios $totalRodadas rodadas para tirar 5 vezes cara <br> <br>";

// exercicio 5

$totalRodadas = 0;
    do {
        $caraCoroa = mt_rand(0,1);
        $totalRodadas++;
    } while ($caraCoroa ==1);
    echo "foram necessarios $totalRodadas de rodadas para tirar cara <br> <br>";

// exercicio 6

$nomes = ["Camila, Esther, Nathan, Rodrigo, Vilma"];

for ($i=0; $i <count($nomes); $i++) { 
    echo $nomes[$i]."<br> <br>";
}

foreach($nomes as $nome){
    echo $nome."<br> <br>";
}

$i = 0;
while ($i<count($nomes)) {
    echo $nomes[$i]."<br> <br>";
    $i++;
}

$i= 0;
do {
    echo $nomes[$i]."<br> <br>";
    $i++;
} while ($i<count($nomes));
     
// exercicio 7

$zeroADez = [0,1,2,3,4,5,6,7,8,9,10];

for ($i=0; $i <count($zeroADez); $i++) { 
        if ($i == 5) {
            echo "Encontramos um $zeroADez[$i]! <br> <br>";
        }
}

$e= 0;
while ($e < count($zeroADez)) {
        $e++;
        if ($e == 5) {
            echo "Encontramos um $zeroADez[$e]! <br> <br>";
        }
        
}

$a= 0;
do {
   $a++; 
    if ($a==5) {
        echo "Encontramos um $zeroADez[$a]!<br> <br>";
    }
} while ($a < count($zeroADez));


// exercicio 8

foreach (range('a', 'n') as $index => $value) {

    echo "Na posição $index está a letra $value <br>";
} 

// exercicio 9

$mascote = ["Animal"=>"Cachorro", "Idade"=> 7, "Altura"=> "50cm", "Nome"=>"Rex"];
foreach ($mascote as $key => $value) {
    echo "<br> $key = $value <br>";
}


// exercicio 11

$ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
"Áustria" => "Viena", "Polônia"=>"Varsóvia"];

ksort($ceu);

foreach ($ceu as $key => $value) {
    echo "<br> A capital do país $key é $value<br>";
}

// exercicio 12

$mundo = [
    "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    "França" => ["Paris", "Nantes", "Lyon"],
    "Itália" => ["Roma", "Milão", "Veneza"],
    "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];
    
    ksort($mundo); 

    foreach ($mundo as $pais => $cidade) {
        echo "<br> As cidades da $pais são: <br> ";
        foreach ($cidade as $são => $cidade) {
            echo $cidade."<br>";
        }
    }

// exercicio 13

