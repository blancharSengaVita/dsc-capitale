<?php


$countries = [
	'belgique' => [
		'capital-name' => 'bruxelles',
		'flag-file' => 'belgique-flag-icon-256.png'
	],
	'allemagne' => [
		'capital-name' => 'berlin',
		'flag-file' => 'allemagne-flag-icon-256.png'
	],
	'corée du nord' => [
		'capital-name' => 'pyongyang',
		'flag-file' => 'corée du nord-flag-icon-256.png'
	],
	'Afrique du sud' => [
		'capital-name' => 'pretoria',
		'flag-file' => 'afrique du sud-flag-icon-256.png'
	],
];

//Description du test

//On Détermine si $GET['country'] est déclarée et est différente de null / undefined
//Si non on rentre pas dans le test. Si oui on rentre dedans.
//Dedans on créer un variable $requestedCountry a qui on affect ce que vaut $_GET['country']

// j'utilise pas urldecode car $_GET (et $_REQUEST) est déjà decodé et ça peut provoqué des bugs si on utilise la fonction
//

$requestedCountry = '';
$countryInfos = '';
$errors = [];

if (isset($_GET['country'])){
	$requestedCountry = $_GET['country'];
	if(array_key_exists($requestedCountry,$countries)){
		$countryInfos = $countries[$requestedCountry];
	}else{
		$errors['inexistant-country'] = 'ce pays n\'hesite pas dans nos lsites';
	}


}


require "index.view.php";