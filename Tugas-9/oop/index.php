<?php
require('animal.php');
require('frog.php');
require('ape.php');

$sheep = new Animal("Shaun");
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br><br>";

$kodok = new Frog('Buduk');
echo "Name : " . $kodok->name . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump() . "<br><br>";

$sungokong = new Ape('kera sakti');
echo "Name : " . $sungokong->name . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell() . "<br>";
