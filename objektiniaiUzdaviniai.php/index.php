<?php

echo '<br>---------1(Kibiras1)----------';
echo '<pre>';

require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';

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
$pinigine->ideti(1);
$pinigine->ideti(2);
$pinigine->ideti(7);


echo 'pinigineje:' . $pinigine->skaiciuoti() . 'EU';

echo '<br>---------3(Kibiras2)----------';
echo '<pre>';

