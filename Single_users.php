<?php



$mario = new Users('Mario','Rossi',31,'marior@gmail.com');
$mario->setName('Mariolino');
$mario->setSurname('Pistola');
$mario->setAge(46);


$lucia = new Payment_user('Lucia','verdi',66,'luciav@gmail.com',0);
$lucia->setDisconut('');


var_dump($mario);
var_dump($lucia);