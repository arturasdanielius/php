<?php



echo '<pre>';

$mas = ['balta', 9 => 'juoda', 'raudona'];

// $mas = array('balta', 9 => 'juoda', 'raudona'); taip nerasomas Arejus.;

$mas['super'] = 'Super Katė';

$mas[] = 'Katė';

$mas[7] = 'Šunius';

$mas['0.87'] = 'Dramblys';

$mas[] = 'Katė';

echo count($mas);

echo '<br>';

print_r($mas);

// for($i = 0; $i < 5; $i++){
//     echo "Dabar: $i \n";
// }
echo '<br>';

// foreach(range(0,4) as $val){
//     echo "Dabar: $val \n";
// }

// echo '<br>';

// print_r(range(1, 5));



// $colors = ['red', 'valio' => 'green', 'blue', 'yellow'];

// foreach ($colors as $index => $value) {
//     echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
// };

// print_r($colors);

$colors = [
    ['red', 'green', 'blue', 'yellow'],
    'labas',
    ['Dramblys', 'bebras', 'briedis', 'barsukas', 'traktoriukas'],
    [77, 12]
];

echo $colors[1][0];
echo '<br>';
echo '<br>';
foreach ($colors as $stalcius) {
    if(is_array($stalcius)){
    foreach ($stalcius as $daiktas){
        echo "$daiktas\n";
    }
    } else {
    echo "$daiktas\n";
    }
};

$masmas = [[1,2,3], [4,5,6], [7,8,9]];

print_r(range(1,9));

print_r($masmas);


echo '<br><br>--------------------------<br>';

$_3X3 = [];
$count = 0;

// foreach (range(1, 3) as $_) {

//     $_3 = [];
//     foreach (range(1, 3) as $_) {
//         $_3[] = ++$count;
//     }

//     $_3X3[] = $_3;
// }

foreach (range('a', 'Z') as $a) {
    foreach (range('a', 'Z') as $b) {
        $_3X3[$a][$b][rand(1, 9)][$a][$b][rand(1, 9)][$a][$b][rand(1, 9)] = ++$count;
    }
}

print_r($_3X3);




