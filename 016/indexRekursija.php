<?php

echo '<pre>';

echo "<h1>Rekursija</h1>";


function recursive($num){
    echo "Enter: $num \n";
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
       recursive($num + 1);
    }
    echo "Exit: $num \n";
}

$startNum = 1;
recursive($startNum);


echo '<br>-------------------<br>';
$mas = [

    5,

    [4, 2, [

        8, 9

    ], 78, [

        87, 37

    ]],

    [4],

    8,

    [87, 96, [8, [98, [2], [69, [45, 47]]]], 66, 7]

];

print_r($mas);



function getSum(array|int $val, bool $resetStatic = false){
    static $sum = 0;
    if ($resetStatic){
        $sum = 0;
    }
    if(is_int($val)){
        $sum += $val;
    }else{
        foreach($val as $v){
            getSum($v);
        }
    }
    return $sum;
};

getSum($mas);
print_r(getSum($mas,  true));

// destytojo  ###################################################################


// <?php

// echo '<pre>';
// echo '<h1>Rekursija</h1>';

// function recursive($num){
//     echo "Enter: $num \n";

//     if ($num < 5){
//         recursive($num + 1);
//     }

//     echo "Exit: $num \n";
// }



// $startNum = 1;
// recursive($startNum);


// $mas = [
//     5,
//     [4, 2, [
//         8, 9
//     ], 78, [
//         87, 37
//     ]],
//     [4],
//     8,
//     [87, 96, [8, [98, [2], [69, [45, 47]]]], 66, 7]
//     ];

// // print_r($mas);

// function foo() {
//     static $index = 0;
//     $index++;
//     echo "$index\n";
// }


// // foo();
// // foo();
// // foo();

// function getSum(array|int $val, bool $resetStatic = false) {
//     $sum = 0;
//     // if ($resetStatic) {
//     //     $sum = 0;
//     // }
//     if (is_int($val)) {
//         $sum += $val;
//     } else {
//         foreach($val as $v) {
//             $sum += getSum($v);
//         }
//     }
//     return $sum;
// }



// // print_r(getSum($mas));

// $masyvas = [
//     ['a','d'],
//     ['v','e'],
//     ['a','c'],
//     ['s','r'],
// ];
// usort($masyvas, function($a, $b){
//     return $a[1] <=> $b[1];
// });

// // print_r($masyvas);


// $result = 0;

// $one = function(){ 
//     var_dump($result); 
// };
 
// $two = function() use ($result) {
//      var_dump($result); 
// };
 
// $three = function() use (&$result) {
//      var_dump($result); 
// };
 
// $result++;
 
// // $one();    
// // $two();    
// // $three(); 

// $func = function ($limit = NULL) use (&$func) { 
//     static $current = 10; 
     
//     // tikrinam eigą
//     if ($current <= 0) { 
//         //išeinam 
//         return FALSE;
//     } 
     
//     // spausdinam reikšmę.
//     echo "$current<br>"; 
     
//     $current--; 
     
//     $func(); 
//  }; 
//   //  Kviečiam funkciją
// //  $func();

//  $str = md5(time());
//  echo "\n\n\n\n";
//  echo $str;

//  $n = preg_replace_callback('/(([0-9]{1})([0-9]{1}))/', function($m){
//     echo "\n";
//     print_r($m);
//     echo "\n";
//     return '<h1 style="display: inline">'.$m[0].'</h1>';
//  }, $str);

//  echo "\n\n";
//  echo $n;
