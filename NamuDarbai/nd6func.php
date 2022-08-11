<?php

// echo '<pre>';

echo '<br>---------1----------<br>';
// 1 Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function tekstas($txt) : string{
    return "<h1>$txt</h1>";
} 

echo tekstas('Hello world!!!');

echo '<br>---------2----------<br>';

// 2.Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function duArgumentai(string $arg1, int $arg2){
    return "<h$arg2>$arg1</h$arg2>";
} 

echo duArgumentai('Hello world!!!', 3);

// (string $argumentas1, int $argumentas2) //duos tik stringa su pirmu argumentu ir skaiciu su antru.

echo '<br>---------3----------<br>';
//3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();


$randStr = md5(time());  //md5 randomina stringa su raidem ir skaiciais. 

echo $randStr;
echo '<br>';

$blabla = preg_replace_callback('/[0-9]+/', function($matches){return '<h1 style="display: inline">'.$matches[0].'</h1>';}, $randStr);


//galima apsirasyti regeksa ir taip
// $blabla = preg_replace_callback('/(([0-9]{1]))(([0-9]{1]))/', function($matches){return '<h1 style="display: inline">'.$matches[0].'</h1>';}, $randStr);   

echo $blabla;

echo '<br>---------4----------<br>';
//4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;




function uzduotis4($arg3) :int{
    $skaitiklis = 0;
    for($i = 2; $i < $arg3; $i++){
        if($arg3 %$i === 0){
        $skaitiklis++;
        }
    }
    return $skaitiklis;
}

echo uzduotis4(7);

echo '<br>---------5----------<br>';
echo '<pre>';

//5.Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.


print_r($mas);

$mas = [];
for($i = 0; $i < 100; $i++){
    $mas[] = rand(33, 77);
}
usort($mas, fn($a, $b) => uzduotis4($b) - uzduotis4($a));
         

print_r($mas);


echo '<br>---------6----------<br>';
echo '<pre>';

//6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.



$mas1 = [];
for($a = 0; $a < 100; $a++){
    $mas1[] = rand(333, 777);
}
function deletePrime($arr){
    foreach ($arr as $key => &$value) {
       if(uzduotis4($value) === 0 ){
        unset($arr[$key]);
       }
    }
    return $arr;
}
         
$naujasMas1 = deletePrime($mas1);
print_r($mas1);
print_r($naujasMas1);
echo (count($naujasMas1));


echo '<br>---------7----------<br>';
echo '<pre>';
//7.Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

$gylis = rand(10,30);
  function fun7 (int $gylis){
    $mas=[];
    static $s=0;
    while($s<$gylis){ 
        $s++;
        for($i=0; $i<rand(10,20); $i++){
        $mas[]=rand(0,10);
    }
    if($s === $gylis){
        $mas[count($mas)]= 0;
     }else{
        $mas[count($mas)]= fun7($gylis);
     }

    };
      return $mas;
  }
  print_r(fun7($gylis));
 



// function beta($c) :int{
//     $mas2 = rand(10, 20);
//     if($c === 1){
//         $c = 1;
//     }foreach (range(0,9) as $b){
//         if($b!==9){
//         $mas2[] = 0;
//         }else{
//             foreach (range(0,9) as $b){
//                 if($b!==9){
//                 }else{
//                 $mas2[] = function beta($c-1);
//                 }
//             } 
//         }
//     }
// }

// print_r($mas2);


//8.Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.

//9.Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 

//10.Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 
	
//       11.     Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai. Santykis skaičiuojamas atsitiktinai, bet taip, kad skaičiai sudarytų didesnę dalį nei masyvai. Reikšmių masyvų ilgis nuo 1 iki 5, o reikšmės analogiškos (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, o likusios masyvai) ir t.t. kol visos galutinės reikšmės bus skaičiai ne masyvai. Suskaičiuoti kiek elementų turi masyvas. Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą. Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai . Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje yra skaičiai. Kiekvienas div elementas turi savo unikalų id ir unikalią background spalvą (spalva pvz nepavaizduota). pvz: <div id=”M1”>10, 46, 67, <div id=”M2”> 89, 45, 89, 34, 90, <div id=”M3”> 84, 97 </div> 90, 56 </div> </div>
