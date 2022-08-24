<?php

echo '<br>---------1(Kibiras1)----------';
echo '<pre>';

require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';
require __DIR__ . '/Kibiras2.php';
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';
require __DIR__ . '/Pinigine2.php';

//bucket - kibiras
$bucket1 = new Kibiras1; 
$bucket2 = new Kibiras1;
$bucket3 = new Kibiras1;

$bucket1->prideti1Akmeni();
$bucket2->prideti1Akmeni();
$bucket1->prideti1Akmeni();
$bucket3->prideti1Akmeni();
$bucket2->prideti1Akmeni();
$bucket2->prideti1Akmeni();

$bucket1->pridetiDaugAkmenu(10);
$bucket2->pridetiDaugAkmenu(7);
$bucket3->pridetiDaugAkmenu(5);

echo '1: ' . $bucket1->kiekPririnktaAkmenu();
echo "\n";
echo '2: ' . $bucket2->kiekPririnktaAkmenu();
echo "\n";
echo '3: ' . $bucket3->kiekPririnktaAkmenu();

echo '<br>---------2(Pinigine)----------';
echo '<pre>';

$pinigine = new Pinigine;

$pinigine->ideti(10);
$pinigine->ideti(3);
$pinigine->ideti(2);
$pinigine->ideti(7);


echo 'pinigineje:' . $pinigine->skaiciuoti() . 'EU';

echo '<br>---------3(Kibiras2)----------';
echo '<pre>';

$bucket4 = new Kibiras2; 
$bucket5 = new Kibiras2;
$bucket6 = new Kibiras2;


$bucket4->prideti1Akmeni();
$bucket5->prideti1Akmeni();
$bucket4->prideti1Akmeni();
$bucket6->prideti1Akmeni();
$bucket5->prideti1Akmeni();
$bucket5->prideti1Akmeni();

$bucket4->pridetiDaugAkmenu(4);
$bucket5->pridetiDaugAkmenu(8);
$bucket6->pridetiDaugAkmenu(9);

echo '4: ' . $bucket4->kiekPririnktaAkmenu();
echo "\n";
echo '5: ' . $bucket5->kiekPririnktaAkmenu();
echo "\n";
echo '6: ' . $bucket6->kiekPririnktaAkmenu();


echo "\n";
echo 'VISO: ' . Kibiras2::kiekBendraiYraAkmenu();

echo '<br>---------4(Kibiras3)----------';
echo '<pre>';


$kibirs1 = new KibirasNePo1;
$kibirs2 = new KibirasNePo1;
$kibirs3 = new KibirasNePo1;

$kibirs1->prideti1Akmeni();
$kibirs2->prideti1Akmeni();
$kibirs3->prideti1Akmeni();

echo '1: ' . $kibirs1->kiekPririnktaAkmenu();
echo "\n";
echo '2: ' . $kibirs2->kiekPririnktaAkmenu();
echo "\n";
echo '3: ' . $kibirs3->kiekPririnktaAkmenu();
// echo "\n";
// echo 'VISO: ' . Kibiras3::kiekPririnktaAkmenu();


//5 istrintas, grybai ir stiklines atliktos teorines paskaitos metu su destytoju 023 foldzeris
echo '<br>----5,6,7(023 foldzeryje)----------';
echo '<pre>';

echo '<br>---------8(pinigine update)----------';
echo '<pre>';


$pinigine2 = new Pinigine2;

$pinigine2->ideti(2);
$pinigine2->ideti(7);
$pinigine2->ideti(1);
$pinigine2->ideti(4);


echo 'banknotu pinigineje:' . $pinigine2->banknotai() . 'EU';
echo "\n";
echo 'monetu pinigineje:' . $pinigine2->monetos() . 'EU';
