<?php

$countryName = '';
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
function mb_ucfirst($string)
{
	return mb_strtoupper(mb_substr($string, 0, 1)).mb_substr($string, 1);
}
require "index.view.php";