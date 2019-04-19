<?php
include_once('./header_ui.php');
$main = true;
$sub = true;
$page = 3;
$s_page = 4;
?>
<div class="header-image sulmida">
	<div class="header-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="vimeo">
						<div id="made-in-ny"></div>
						<script src="https://player.vimeo.com/api/player.js"></script>
						<script>
						    var options = {
						        id: 242704202,
						        loop: true
						    };

						    var player = new Vimeo.Player('made-in-ny', options);

						    player.setVolume(0);

						    player.on('play', function() {
						        console.log('played the video!');
						    });
						</script>
					</div>
				</div>
				<div class="col-lg-6">
					<h1 class="header-title">
						<?php echo $langCode['sulmidaHeaderTitle']; ?>
					</h1>
					<div class="header-content mt-4">
						<?php echo $langCode['sulmidaHeaderContent']; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sulmida-who">
	<div class="container">
		<div class="row py-5 align-items-center">
			<div class="col-lg-6 order-2 order-lg-1 pl-0 pr-5">
				<h2 class="title font-37 bold"><?php echo $langCode['SulmidaWhoAreWe']; ?></h2>
				<p class="content pr-5 line-height-2">
					<?php echo $langCode['SulmidaWhoAreWeCon']; ?>
				</p>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida2-small.jpg" alt="Who are we?" class="img-fluid w-100" />
			</div>
		</div>
		<div class="row py-5">
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery1.jpg" alt="sulmida gallery 1" class="img-fluid" />
			</div>
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery2.jpg" alt="sulmida gallery 2" class="img-fluid" />
			</div>
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery3.jpg" alt="sulmida gallery 3" class="img-fluid" />
			</div>
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery4.jpg" alt="sulmida gallery 4" class="img-fluid" />
			</div>
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery5.jpg" alt="sulmida gallery 5" class="img-fluid" />
			</div>
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery6.jpg" alt="sulmida gallery 6" class="img-fluid" />
			</div>
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery7.jpg" alt="sulmida gallery 7" class="img-fluid" />
			</div>
			<div class="col-6 col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/sulmida-gallery8.jpg" alt="sulmida gallery 8" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<div class="about-sulmida py-5">
	<div class="container">
		<div class="row align-items-center text-center">
			<div class="col-lg-6 px-0">
				<img src="<?php echo $front_img_url; ?>/sulmida/Sulmida-Downtown-Vancouver-Denman-Street.jpg" alt="" class="img-fluid w-100" />
			</div>
			<div class="col-lg-6 px-0">
				<h2 class="title fint-32 bold">
					<?php echo $langCode['SulmidaBusinessPhilosophy']; ?>
				</h2>
				<p class="content line-height-2 px-5">
					<?php echo $langCode['SulmidaBusinessPhilosophyCon']; ?>
				</p>
			</div>
			<div class="col-lg-6 px-0 order-3 order-lg-4">
				<img src="<?php echo $front_img_url; ?>/sulmida/927d1d7a95c8ad51c48ff468bc229b81.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-6 px-0 order-4 order-lg-3">
				<h2 class="title fint-32 bold">
					<?php echo $langCode['FocusOnQuality']; ?>
				</h2>
				<p class="content line-height-2 px-5">
					<?php echo $langCode['FocusOnQualityCon']; ?>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="sulmida-our-menu py-5">
	<div class="container">
		<?php $OurMenu = ucwords(strtolower($langCode['OurMenu'])); ?>
		<h2 class="title font-37 text-center bold"><?php echo $OurMenu; ?></h2>
		<div class="content">
			<img src="<?php echo $front_img_url; ?>/sulmida/006C0000018CZ8RIAW-sulmida-snow-dessert-cafe-downtown-vancouver-100.jpg" alt="Our Menu" class="img-fluid" />
		</div>
	</div>
</div>
<div class="tail-image sulmida">
	<div class="tail-wrap py-5">
		<div class="container">
			<h2 class="title text-center">
				<?php echo $langCode['SulmidaProudMemberOfBKKoreaFamily']; ?>
			</h2>
			<div class="row">
				<div class="col-lg-6">
					<div class="bekcafe-info working">
						<span class="icon"><i class="fa fa-clock-o"></i></span>
						<h2 class="title"><?php echo $langCode['WorkingHours']; ?></h2>
						<div class="content">
							<?php echo $langCode['SulmidaWorkTime1']; ?><br />
							<?php echo $langCode['SulmidaWorkTime2']; ?>
						</div>
					</div>
					<div class="bekcafe-info we-here">
						<span class="icon"><i class="fa fa-map-marker"></i></span>
						<h2 class="title">We are here</h2>
						<div class="content">
							<?php echo $langCode['SulmidaAddress']; ?><br />
							<?php echo $langCode['Phone']; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="gmap" id="gmap">
						<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Sulmida%20Dessert%20Cafe&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" aria-label="Sulmida Dessert Cafe"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="partners">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 col-lg text-lg-center">
				<?php echo $langCode['CheckOtherBrands']; ?>
			</div>
			<div class="col-6 col-lg">
				<img src="<?php echo $front_img_url; ?>/logo/round-bek.png" alt="" class="img-fluid rounded-circle">
			</div>
			<div class="col-6 col-lg">
				<img src="<?php echo $front_img_url; ?>/logo/round-bingbox.png" alt="" class="img-fluid rounded-circle">
			</div>
			<div class="col-6 col-lg">
				<img src="<?php echo $front_img_url; ?>/logo/round-sulmida.png" alt="" class="img-fluid rounded-circle">
			</div>
			<div class="col-6 col-lg">
				<img src="<?php echo $front_img_url; ?>/logo/round-meokbang.png" alt="" class="img-fluid rounded-circle">
			</div>
			<div class="col-6 col-lg">
				<img src="<?php echo $front_img_url; ?>/logo/round-becoffee.png" alt="" class="img-fluid rounded-circle">
			</div>
			<div class="col-6 col-lg">
				<img src="<?php echo $front_img_url; ?>/logo/round-sobing.png" alt="" class="img-fluid rounded-circle">
			</div>
			<div class="col-6 col-lg">
				<img src="<?php echo $front_img_url; ?>/logo/round-bej.png" alt="" class="img-fluid rounded-circle">
			</div>
		</div>
	</div>
</div>
<?php
include_once('./footer_ui.php');
?>