<?php

echo '<br>';
echo '---------------1-----------';
echo '<br>';
// 1.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.


$vardas = 'Will';
$pavarde = 'Smith';

if(strlen($vardas) < strlen($pavarde)){
    echo $vardas;
}else{
    echo $pavarde;
}


echo '<br>';
echo '---------------2-----------';
echo '<br>';
// 2.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

$vardas = 'Will';
$pavarde = 'Smith';

echo strtoupper($vardas);
echo '<br>';
echo strtolower($pavarde);

echo '<br>';
echo '---------------3-----------';
echo '<br>';
// 3.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$vardas = 'Will';
$pavarde = 'Smith';

$pirmosRaides = $vardas[0].$pavarde[0];

echo $pirmosRaides;

echo '<br>';
echo '---------------4-----------';
echo '<br>';
// 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$vardas = 'Will';
$pavarde = 'Smith';

$trysPaskutines = substr($vardas, -3).substr($pavarde, -3);

echo $trysPaskutines;

echo '<br>';
echo '<br><br>---------------5-----------<br>';

// 5.Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$amerikonas = 'An American in Paris';

echo str_ireplace('a', '*', $amerikonas);

echo '<br><br>---------------6-----------<br>';

// 6.Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.


$amerikietis = 'An American in Paris';

echo preg_match_all("/[A,a]/", $amerikietis);

echo '<br><br>---------------7-----------<br>';

// 7.Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.


$americano = 'An American in Paris';

$newAmericano = str_ireplace(array('a','e','i','o','u', 'A','E','I','O','U'), '', $americano);

echo $newAmericano;

echo '<br>';

$tiffany = "Breakfast at Tiffany's";

$newTiffany = str_ireplace(array('a','e','i','o','u', 'A','E','I','O','U'), '', $tiffany);

echo $newTiffany;

// (2001: A Space Odyssey) ir (It's a Wonderful Life.);

echo '<br><br>---------------8-----------<br>';

// 8.Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

$starWars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $starWars; 

echo '<br>';

$epicDigit = preg_replace('/\D/', '', $starWars);
echo $epicDigit;

echo '<br><br>---------------9-----------<br>';

//9.Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood"; 
// “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

print_r(str_word_count($string, 0, '0..3'));


// if(strlen($string) < strlen($pavarde)){
//     echo $vardas;
// }else{
//     echo $pavarde;
// }

echo '<br>';echo '<br>';

echo strlen($string);

echo '<br>';echo '<br>';

// $zodziai = ' ';



// echo count_chars($string, $string[i].length <= 5);



// $words = explode($delimiter, $str);
 
// foreach ($words as $word) {
//     echo $word;
//     echo "<br>";
// }

echo '<br><br>---------------10-----------<br>';
// 10.Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.














