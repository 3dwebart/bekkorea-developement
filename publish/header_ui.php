<?php
$header_path = dirname(__FILE__)."/header.php";
include_once($header_path);
include_once($include_dir.'/language_set.php');
?>
<!DOCTYPE html>
<?php if(empty($currentLang)) { ?>
<html lang="en">
<?php } else { ?>
<html lang="<?php echo($langCode['code2']); ?>">
<?php } ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>BK KOREA</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Playfair+Display|Poppins|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/bootstrap-grid.min.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/bootstrap-reboot.min.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/common.css">
<link rel="stylesheet" href="<?php echo $front_css_url; ?>/custom.css">
<script src="<?php echo $front_js_url; ?>/jquery-3.3.1.min.js"></script>
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
		<a class="navbar-brand" href="<?php echo $site_url; ?>">
			<img src="<?php echo $front_img_url; ?>/logo/bk-dark-logo.png" alt="" class="img-fluid">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo $site_url; ?>"><?php echo $langCode['home']; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site_url; ?>/process.php"><?php echo $langCode['process']; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site_url; ?>/products.php"><?php echo $langCode['products']; ?></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $langCode['brands']; ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo $site_url; ?>/bekcafe.php" data-navno="0">
							<?php echo $langCode['bkcafe']; ?>
						</a>
						<?php if($currentLang == 'eng' || $currentLang == 'usa') { ?>
						<a class="dropdown-item" href="<?php echo $site_url; ?>/bejcafe.php"  data-navno="1"><?php echo $langCode['bejcafe']; ?></a>
						<a class="dropdown-item" href="<?php echo $site_url; ?>/sobing.php" data-navno="2"><?php echo $langCode['sobing']; ?></a>
						<?php } ?>
						<a class="dropdown-item" href="<?php echo $site_url; ?>/bingbox.php" data-navno="3"><?php echo $langCode['bingbox']; ?></a>
						<a class="dropdown-item" href="<?php echo $site_url; ?>/sulmida.php" data-navno="4"><?php echo $langCode['sulmida']; ?></a>
						<a class="dropdown-item" href="<?php echo $site_url; ?>/meokbang.php" data-navno="5"><?php echo $langCode['meokbang']; ?></a>
						<a class="dropdown-item" href="<?php echo $site_url; ?>/becoffee.php" data-navno="6"><?php echo $langCode['becafe']; ?></a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo $site_url; ?>/contact.php"><?php echo $langCode['contact']; ?></a>
				</li>
			</ul>
		</div>
	</div>
</nav>