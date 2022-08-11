<?php


// 1. Kintamieji ir sąlygos

// Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).


echo '<br>';
echo '---------------1-----------';
echo '<br>';

// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį : "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".


$vardas = 'Artūras';
$pavarde = 'Danielius';
$gimimoMetai =1979;
$sieMetai = 2022;

$kiekMetu = $sieMetai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man sueis $kiekMetu metai(ų), nice!!!";

echo '<br>';
echo '---------------2-----------';
echo '<br>';
// 2.Naudokite funkcija rand()(https://www.php.net/manual/en/function.rand.php). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.


$pirmas = rand(1, 5);
$antras = rand(1, 5);

echo "$pirmas, $antras";
echo '<br>';

if($pirmas > $antras){
    echo round($pirmas / $antras, 2);
}else{
    echo round($antras / $pirmas, 2);
}



echo '<br>';
echo '---------------3-----------';
echo '<br>';

// 3.Naudokite funkcija rand()(https://www.php.net/manual/en/function.rand.php). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.


$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);

echo "$pirmas, $antras, $trecias";
echo '<br>';

if ($pirmas > $antras && $pirmas < $trecias || $pirmas < $antras && $pirmas > $trecias) {
    echo $pirmas;
}else{
    if ($antras > $pirmas && $antras < $trecias || $antras < $pirmas && $antras > $trecias) {
    echo $antras;
    }else if($trecias > $pirmas && $trecias < $antras || $trecias < $pirmas && $trecias > $antras) {
        echo $trecias;
    }
}

echo '<br>';
echo '---------------4-----------';
echo '<br>';

// 4.Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()(https://www.php.net/manual/en/function.rand.php)​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 


$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "$a, $b, $c";
echo '<br>';

if(($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b){
    echo 'galima sudaryti trikampi';
}else{
    echo 'negalima sudaryti trikampio';
}

echo '<br>';
echo '---------------5-----------';
echo '<br>';
// 5.Sukurkite keturis kintamuosius ir ​rand()(https://www.php.net/manual/en/function.rand.php)​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).


$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);

echo "$a, $b, $c, $d";
echo '<br>';

$kiekis0 = 0;
$kiekis1 = 0;
$kiekis2 = 0;

if($a === 0) {
    ++$kiekis0;  
}if($b === 0) {
    ++$kiekis0;
}if($c === 0) {
    ++$kiekis0;
}if($d === 0) {
    ++$kiekis0;
};

if($a === 1 ) {
    ++$kiekis1;  
}if($b === 1) {
    ++$kiekis1;
}if($c === 1) {
    ++$kiekis1;
}if($d === 1) {
    ++$kiekis1;
};

if($a === 2 ) {
    ++$kiekis2;  
}if($b === 2) {
    ++$kiekis2;
}if($c === 2) {
    ++$kiekis2;
}if($d === 2) {
    ++$kiekis2;
};



// ++kiekis, pirma prideda po to isveda.
echo '<br>';
echo "(0: $kiekis0), (1: $kiekis1), (2: $kiekis2)";
echo '<br>';

//apsirasysime kitu budu:

echo '<br>';

$e = rand(0, 2);
$f = rand(0, 2);
$g = rand(0, 2);
$h = rand(0, 2);

echo "$e, $f, $g, $h";


$kiek0 = 0;
$kiek1 = 0;
$kiek2 = 0;

if ($e === 0){
    $kiek0++;
}else if($e === 1){
    $kiek1++;
}else{
    $kiek2++;
}

if ($f === 0){
    $kiek0++;
}else if($f === 1){
    $kiek1++;
}else{
    $kiek2++;
}

if ($g === 0){
    $kiek0++;
}else if($g === 1){
    $kiek1++;
}else{
    $kiek2++;
}

if ($h === 0){
    $kiek0++;
}else if($h === 1){
    $kiek1++;
}else{
    $kiek2++;
}

echo '<br>';
echo "(0: $kiek0), (1: $kiek1), (2: $kiek2)";
echo '<br>';


echo '<br>';
echo '---------------6-----------';
echo '<br>';
// 6.Naudokite funkcija rand()(https://www.php.net/manual/en/function.rand.php). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$hx = rand(1, 6);

echo "<h$hx>$hx</h$hx>";

echo '<br>';
echo '---------------7-----------';
echo '<br>';

// 7.Naudokite funkcija rand()(https://www.php.net/manual/en/function.rand.php). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 


$skaicius1 = rand(-10, 10);
$skaicius2 = rand(-10, 10);
$skaicius3 = rand(-10, 10);

echo "$skaicius1, $skaicius2, $skaicius3";

echo '<br>';

if($skaicius1 > 0){
    echo "<span style='color: green'>$skaicius1 </span>";
}else if($skaicius1 == 0){
    echo "<span style='color: red'>$skaicius1 </span>";
}else{
    echo "<span style='color: blue'>$skaicius1 </span>";
};

if($skaicius2 > 0){
    echo "<span style='color: green'>$skaicius2 </span>";
}else if($skaicius2 == 0){
    echo "<span style='color: red'>$skaicius2 </span>";
}else{
    echo "<span style='color: blue'>$skaicius2 </span>";
};

if($skaicius3 > 0){
    echo "<span style='color: green'>$skaicius3 </span>";
}else if($skaicius3 == 0){
    echo "<span style='color: red'>$skaicius3 </span>";
}else{
    echo "<span style='color: blue'>$skaicius3 </span>";
};


echo '---------------8-----------';
echo '<br>';

// 8.Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()(https://www.php.net/manual/en/function.rand.php)​ funkcija nuo 5 iki 3000.


$zvKaina = 1;
$zvKiekis = rand(5, 3000);
$visoZvKaina = 0;

if($zvKiekis < 1000){
    $visoZvKaina = $zvKiekis;
}else if($zvKiekis > 2000){
    $visoZvKaina = $zvKiekis*0.96; 
}else{
    $visoZvKaina = $zvKiekis*0.97;
}

 
echo "Zvakiu $zvKiekis vnt. mokesi: $visoZvKaina eur.";



echo '<br><br>---------------9-----------<br>';

// 9.Naudokite funkcija rand()(https://www.php.net/manual/en/function.rand.php). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.


$sk1 = rand(0, 100);
$sk2 = rand(0, 100);
$sk3 = rand(0, 100);

$naujasVidurkis = 0;
$suma = 0;
$kiekis = 0;

$vidurkis = ($sk1 + $sk2 + $sk3)/3;

if($sk1 > 10 && $sk1 < 90){
    ++$kiekis;
    $suma += $sk1; 
}
if($sk2 > 10 && $sk2 < 90){
    ++$kiekis;
    $suma = $suma + $sk2;
}
if($sk3 > 10 && $sk3 < 90) {
    ++$kiekis;
    $suma = $suma + $sk3;
};

$naujasVidurkis = $suma/$kiekis;

echo "$sk1, $sk2, $sk3";
echo '<br>';

echo intval($vidurkis);
echo '<br>';
echo intval($naujasVidurkis);

echo '<br><br>---------------10-----------<br>';
// 10.Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand()(https://www.php.net/manual/en/function.rand.php). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$valandos = rand(0,23);
$minutes = rand(0,59);
$sekundes = rand(0,59);
echo '<br>';
$laikas = "$valandos : $minutes : $sekundes";
echo $laikas;
echo '<br>';

$randomSekundes = rand(0, 300);
echo $randomSekundes;
echo '<br>';

$totalSekundes = $sekundes + $randomSekundes;
echo $totalSekundes;
echo '<br>';

$extraLaikas = "$valandos : $minutes : $totalSekundes";
echo $extraLaikas;

if($totalSekundes > 59){
   while($totalSekundes > 59){
    $totalSekundes -= 60;
    $minutes += 1;
    $newSekundes = $totalSekundes;
   }
}else{
    $newSekundes = $totalSekundes;
}

if($minutes > 59){
    while($minutes > 59){
     $minutes -= 60;
     $valandos += 1;
     $newMinutes = $minutes;
    }  
 }else{
    $newMinutes = $minutes;
}

if($valandos > 23){
    $valandos += 0;
    $newValandos = $valandos;
 }else{
    $newValandos = $valandos;
}

$newLaikas = "$newValandos : $newMinutes : $newSekundes";

echo '<br>';

echo $newLaikas;

echo '<br>';

$newHH = sprintf("%02d",$newValandos);
$newMM = sprintf("%02d",$newMinutes);
$newSS = sprintf("%02d",$newSekundes);

$newTime = "$newHH:$newMM:$newSS";

echo $newTime;




echo '<br><br>---------------11-----------<br>';
// Papildomas.
// Naudokite funkcija rand()(https://www.php.net/manual/en/function.rand.php). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.
