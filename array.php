<?php

$a1= array ();

$a1 [0][0] = "Pedro";
$a1 [0][1] = "25";
$a1 [0][2] = "M";
$a1 [0][3] = "Casado";
$a1 [0][4] = "Programador";


$a1 [1][0] = "Ana";
$a1 [1][1] = "23";
$a1 [1][2] = "F";
$a1 [1][3] = "Casada";
$a1 [1][4] = "Personal Treiner";


$a1 [2][0] = "Matheus";
$a1 [2][1] = "30";
$a1 [2][2] = "M";
$a1 [2][3] = "Casado";
$a1 [2][4] = "Psicologo";


$a1 [3][0] = "Maria";
$a1 [3][1] = "23";
$a1 [3][2] = "F";
$a1 [3][3] = "Casada";
$a1 [3][4] = "Nutricinista";


$a1 [4][0] = "Leticia";
$a1 [4][1] = "24";
$a1 [4][2] = "F";
$a1 [4][3] = "Solteira";
$a1 [4][4] = "Agronoma";


$a1 [5][0] = "Luiz";
$a1 [5][1] = "24";
$a1 [5][2] = "M";
$a1 [5][3] = "Solteiro";
$a1 [5][4] = "Garçom";


$a1 [6][0] = "Carol";
$a1 [6][1] = "23";
$a1 [6][2] = "F";
$a1 [6][3] = "Solteira";
$a1 [6][4] = "Balconista";

$a1 [7][0] = "Eduarda";
$a1 [7][1] = "23";
$a1 [7][2] = "F";
$a1 [7][3] = "Casada";
$a1 [7][4] = "Direito";

$a1 [8][0] = "Kaun";
$a1 [8][1] = "25";
$a1 [8][2] = "M";
$a1 [8][3] = "viuvo";
$a1 [8][4] = "costureiro";

$a1 [9][0] = "Joao";
$a1 [9][1] = "24";
$a1 [9][2] = "M";
$a1 [9][3] = "casado";
$a1 [9][4] = "Professor";



foreach ($a1 as $indice => $valor) {
    foreach ($valor as $indice_1 => $valor_1) {
        echo "[$indice] [$indice_1] $valor_1 <br/>";
    }
}
