<?php
$header_path = dirname(__FILE__)."/header.php";
include_once($header_path);
$langguge = array(
	array(
		'code' => 'eng',
		'text' => 'ENG',
		'lang2Code' => 'en'
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
<!DOCTYPE html>
<?php if(empty($currentLang)) { ?>
<html lang="en">
<?php } else { ?>
<html lang="<?php echo($langCode['code2']); ?>">
<?php } ?>
<head>
	<meta charset="UTF-8">
	<title>BEK KOREA</title>
</head>
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/bootstrap-grid.min.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/bootstrap-reboot.min.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/common.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/custom.css">
<script src="<?php echo $front_js_url; ?>/jquery-3.3.1.min.js"></script>
<script src="<?php echo $front_js_url; ?>/bootstrap.bundle.min.js"></script>
<script src="<?php echo $front_js_url; ?>/jquery.cookie.js"></script>
<script src="<?php echo $front_js_url; ?>/common.js"></script>
<script src="<?php echo $front_js_url; ?>/custom.js"></script>
<body>
<div class="flag-wrap">
	<div class="container">
		<ul class="flag-list">
			<?php for ($i=0; $i < count($langguge); $i++) { ?>
			<li<?php echo $langguge[$i]['code'] == $currentLang ? ' class="active"' : ''; ?>>
				<a href="#" data-lang="<?php echo $langguge[$i]['code']; ?>">
					<img src="<?php echo $front_img_url.'/flag/'.$langguge[$i]['code']; ?>.png" alt="">
					<?php echo $langguge[$i]['text']; ?>
				</a>
			</li>
			<?php } ?>
		</ul>
				
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	<a class="navbar-brand" href="#">
		<img src="<?php echo $front_img_url; ?>/logo/bk-dark-logo.png" alt="" class="img-fluid">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
		</ul>
	</div>
	</div>
</nav>