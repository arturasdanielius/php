<?php
// for, do while,
echo '<pre>';

for($i = 0; $i < 5; $i++){
    echo "Dabar: $i \n";
}

echo '<br>';

$x = 0;

do{
    echo "Dabar: $x \n";
    $x++;
}while($x < 7);

echo '<br>';

$y = 0;

while($y < 4){
    echo "Dabar: $y \n";
    $y++;
}


echo '<br>=============';
echo '<br>';
// ciklas cikle
$x = 0;

do{
    echo "Dabar: $x \n";
    $x++;

    $y = 0;
    while($y < 4){
    echo "D->:$y \n";
    $y++;

    for($i = 0; $i < 3; $i++){
        echo "+++++++++++++++++++++++++ $i \n";
    }
    

}

}while($x < 7);

