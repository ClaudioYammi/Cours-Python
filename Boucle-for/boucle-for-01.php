<?php
// $i = 0;

// for ($i; $i < 10; $i++) {
//     echo "$i ";
// }

// $fullname = "Claudio";

// echo "Bounjour";

// echo "Comment tu vas {$fullname} ".$fullname;

// $result = $i * $j;

// echo "le resultat est de ".$result;
// echo " voici le mode concatener {$result}";

// $i = 20;
// $j = 41;

// $total = ($i + $j) * 5;

// $number = $total + 8 ;

// echo "le nombre total est de {$number}";

// $y = 5;
// $u = 5;

// $result = $y % $u;
// $result2 = $y / $u;

// echo "le nombre est de ".$result." et aussi ".$result2;


$note = true;
$cuisine = false;

// if ($note === false) {
//     echo 'note correcte';
// } else {
//     echo 'note mauvaise';
// }

// if($cuisine === "oui"){
//     echo "je suis toute oui";
// } elseif ($cuisine === "non") {
//     echo "je suis toute non";
// } else {
//     echo "je ne sais pas";
// }

if($note && $cuisine) {
    echo "Tout les deux son oke";
} elseif($note) {
    echo "Seul la note est oke";
} elseif($cuisine) {
    echo "seul la cuisine";
} else {
    echo "tout les 2 ne sont pas oke";
}                                                          










