<?php
include_once('./header_ui.php');
$main = true;
$sub = true;
$page = 3;
$s_page = 5;
?>
<div class="header-image meokbang">
	<div class="header-wrap">
		<div class="container">
			<h1 class="header-title">
				<?php echo $langCode['meokbangHeaderTitle']; ?>
			</h1>
		</div>
	</div>
</div>
<div class="meokbang-our-story my-5">
	<div class="container container-5">
		<h2 class="title font-37 bold text-center">
			<?php echo $langCode['meokbangOurStory']; ?>
		</h2>
		<div class="row py-5">
			<div class="col-lg-6 order-2 order-lg-1">
				<p class="content mt-0 pt-0 ">
					<?php echo $langCode['meokbangOurStoryCon']; ?>
				</p>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 our-story-image">
				<img src="<?php echo $front_img_url; ?>/meokbang/image-1.jpg" alt="Our Menu" class="img-fluid" />
			</div>
		</div>
		
	</div>
</div>
<div class="meokbang-work">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 px-0">
				<img src="<?php echo $front_img_url; ?>/meokbang/image-2.jpg" alt="Business Profile" class="img-fluid w-100" />
			</div>
			<div class="col-lg-6 px-0">
				<h2 class="title font-30 bold text-center">
					<?php echo $langCode['meokbangBusinessProfile']; ?>
				</h2>
				<p class="content px-2 px-lg-5 line-height-1-6">
					<?php echo $langCode['meokbangBusinessProfileCon']; ?>
				</p>
			</div>
			<div class="col-lg-6 px-0 order-1 order-lg-2">
				<img src="<?php echo $front_img_url; ?>/meokbang/image-5.jpg" alt="Interior" class="img-fluid w-100" />
			</div>
			<div class="col-lg-6 px-0 order-2 order-lg-1">
				<h2 class="title font-30 bold text-center">
					<?php echo $langCode['meokbangInterior']; ?>
				</h2>
				<div class="content px-2 px-lg-5 line-height-1-6">
					<ul class="bar-list-1">
						<li>
							<?php echo $langCode['meokbangInteriorLI1']; ?>
						</li>
						<li>
							<?php echo $langCode['meokbangInteriorLI2']; ?>
						</li>
						<li>
							<?php echo $langCode['meokbangInteriorLI3']; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="meokbang-menu py-5">
	<div class="row m-0 align-items-center">
		<div class="col-lg-3 px-0 py-4">
			<img src="<?php echo $front_img_url; ?>/meokbang/menu-1.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-lg-3">
			<h2 class="menu-title"><?php echo $langCode['PorkFromJejuIsland']; ?></h2>
			<p class="menu-content">
				<?php echo $langCode['PorkFromJejuIslandCon']; ?>
			</p>
		</div>
		<div class="col-lg-3 px-0 py-4">
			<img src="<?php echo $front_img_url; ?>/meokbang/menu-2.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-lg-3">
			<h2 class="menu-title"><?php echo $langCode['FreshCrabsDirectlyFromKorea']; ?></h2>
			<p class="menu-content">
				<?php echo $langCode['FreshCrabsDirectlyFromKoreaCon']; ?>
			</p>
		</div>
		<div class="col-lg-3 px-0 py-4">
			<img src="<?php echo $front_img_url; ?>/meokbang/menu-3.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-lg-3">
			<h2 class="menu-title"><?php echo $langCode['FeiedRiceWithCheese']; ?></h2>
			<p class="menu-content">
				<?php echo $langCode['FeiedRiceWithCheeseCon']; ?>
			</p>
		</div>
		<div class="col-lg-3 px-0 py-4">
			<img src="<?php echo $front_img_url; ?>/meokbang/menu-4.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-lg-3">
			<h2 class="menu-title"><?php echo $langCode['KreanSnowIce']; ?></h2>
			<p class="menu-content">
				<?php echo $langCode['KreanSnowIceCon']; ?>
			</p>
		</div>
	</div>
</div>
<div class="tail-image meokbang">
	<div class="tail-wrap py-5">
		<div class="container">
			<h2 class="title text-center"><?php echo $langCode['meokbangHeaderTitle']; ?></h2>
			<div class="row">
				<div class="col-lg-6">
					<div class="bekcafe-info working">
						<span class="icon"><i class="fa fa-clock-o"></i></span>
						<h2 class="title"><?php echo $langCode['WorkingHours']; ?></h2>
						<div class="content">
							<?php echo $langCode['neokbangWorkTime1']; ?><br />
							<?php echo $langCode['neokbangWorkTime2']; ?>
						</div>
					</div>
					<div class="bekcafe-info we-here">
						<span class="icon"><i class="fa fa-map-marker"></i></span>
						<h2 class="title"><?php echo $langCode['WeAreHere']; ?></h2>
						<div class="content">
							<?php echo $langCode['meokbangAddress1']; ?><br />
							<?php echo $langCode['meokbangAddress2']; ?><br />
							<?php echo $langCode['MeokBangPhone']; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="gmap" id="gmap">
						<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Hong%20Kong%2C%20Causeway%20Bay%2C%20Hennessy%20Rd%2C%20502%E8%99%9F%E8%99%9F%206F%20Goldmark&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" aria-label="Hong Kong, Causeway Bay, Hennessy Rd, 502號號 6F Goldmark"></iframe>
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