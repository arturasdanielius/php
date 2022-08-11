<?php

echo '<br>-------------1-------------<br>';

// 1.Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
echo '<pre>';

$mas1 = range(0 , 29);
foreach($mas1 as &$val){
    $val = rand(5, 25);
};

unset($val);

print_r($mas1);

echo '<br><br>-------------2-------------<br>';
//  2.Naudodamiesi 1 uždavinio masyvu:
echo '<br>-------------2a-------------<br>';
// a.Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

$greater10 = 0;

foreach($mas1 as $val){
    if($val > 10){
        $greater10++;
    }
};

echo "Reiksmiu didesniu uz(10): $greater10";
echo '<br>-------------2b-------------<br>';
// b.Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;

echo '<pre>';

foreach ($mas1 as $index => $val){
    if($val == max($mas1)){
        echo "Maks value: $val, index: $index<br>";
        
    }
};
echo '<br>-------------2c-------------<br>';
// c.Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

$suma = 0;

foreach ($mas1 as $index => $val) {
    if($index % 2 == 0){
        $suma += $val;
    }
};
echo $suma;

echo '<br>-------------2d-------------<br>';

// d.Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$mas2 = [];
foreach ($mas1 as $index => $val) {
   $mas2[] = $val - $index;
}

print_r($mas2);

echo '<br>-------------2e-------------<br>';
// e.Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

for($a = 0; $a < 10; $a++){
    $mas2[] = rand(5, 25);
}
print_r($mas2);

echo '<br>-------------2f-------------<br>';
// f.Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

$masEqual = [];
$masOdd = [];

foreach($mas2 as $index => $val){
    if($index %2 == 0){
        $masEqual[] = $val;
    }else{
        $masOdd[] = $val;
    }
};

print_r($masEqual);
print_r($masOdd);

echo '<br>-------------2g-------------<br>';
// g.Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach($mas1 as $index => &$val ){
    if($index %2 == 0 && $val > 15){
        $val = 0;
    }
}
unset($val);
print_r($mas1);

echo '<br>-------------2h-------------<br>';
// h.Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;



foreach($mas1 as $index => $val){
    if($val > 10){
        echo $index;
        break;
    }
};

echo '<br>-------------2i-------------<br>';

// i.Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;


foreach($mas1 as $index => &$val ){
    if($index %2 == 0){
        unset($mas1[$index]);
    }
}
unset($val);
print_r($mas1);

echo '<br>-------------3-------------<br>';
// 3.Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$raides = ['A', 'B', 'C', 'D'];

$masRaides = [];

foreach(range(1, 200) as $_){
    $masRaides[] = $raides[rand(0, 3)]; 
}

print_r($masRaides);

// $kiekisA = 0;
// $kiekisB = 0;
// $kiekisC = 0;
// $kiekisD = 0;

// foreach ($masRaides as $_ => $value) {
//     if($value == $raides[0]){
//     $kiekisA++;
//     }else if($value == $raides[1]){
//     $kiekisB++;
//     }else if($value == $raides[2]){
//     $kiekisC++;
//     }else if($value == $raides[3]){
//     $kiekisD++;
//     }
// };

$skaitiklis = array_count_values($masRaides);


print_r($skaitiklis);

// prit_r($raides[0], $kiekisA);
// prit_r($raides[1], $kiekisB);
// prit_r($raides[2], $kiekisC);
// prit_r($raides[3], $kiekisD);




// 4.Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
// 5.Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
// 6.Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
// 7.Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
// 8.Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
// 9.Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
// 10.Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
// 11.Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)


