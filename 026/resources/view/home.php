<?php

App\App::view('top', ['title' => $title]);

?>

<h1> <?= $welcome ?> </h1>;
<?

App\App::view('bottom');