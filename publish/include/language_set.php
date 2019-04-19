<?php
$langguge = array(
	array(
		'code' => 'usa',
		'text' => 'ENG',
		'lang2Code' => 'us'
	),
	array(
		'code' => 'fra',
		'text' => 'FRA',
		'lang2Code' => 'fr'
	),
	array(
		'code' => 'rus',
		'text' => 'RUS'
	),
	array(
		'code' => 'esp',
		'text' => 'ESP',
		'lang2Code' => 'es'
	),
	array(
		'code' => 'prt',
		'text' => 'PRT',
		'lang2Code' => 'pt'
	)
);
$currentLang = $_COOKIE['language'];
if(empty($currentLang)) {
	$currentLang = 'eng';
}
if(empty($currentLang)) {
	$lang2Code = 'en';
} else {
	$lang2Code = $langCode['code2'];
}
include_once($site_dir.'/language/'.$currentLang.'.php');
?>