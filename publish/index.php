<?php
include_once('./header_ui.php');
$main = true;
$sub = false;
$page = 0;
?>
<div class="header-image index"></div>
<div class="min-h500 d-flex align-item-center">
	<div class="container text-center">
		<h2 class="title handling-title">
			<?php echo $langCode['BrandingPartner']; ?>
		</h2>
		<p class="content">
			<?php echo $langCode['BrandingPartnerCon']; ?>
		</p>
	</div>
</div>
<div class="min-h500 join-bkkorea-family">
	<div class="min-h500 box d-flex align-item-center">
		<div class="container text-center">
			<h2 class="title handling-title">
				<?php echo $langCode['JoinBKKOREAFamily']; ?>
			</h2>
			<div class="row content">
				<div class="col-12 col-lg-6">
					<p class="text-lg-right pr-3">
						<?php echo $langCode['JoinBKKOREAFamilyCon1']; ?>
					</p>
				</div>
				<div class="col-12 col-lg-6">
					<p class="text-lg-left pl-3">
						<?php echo $langCode['JoinBKKOREAFamilyCon2']; ?>
					</p>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="featured-franchises text-center">
	<div class="container">
		<h2 class="title handling-title py-5"><?php echo $langCode['FeaturedFranchises']; ?></h2>
		<div class="row m-0">
			<div class="col-12 col-lg-6 p-0">
				<img src="<?php echo $front_img_url; ?>/index/showcase.jpg" alt="bek dessert cafe" class="img-fluid">
			</div>
			<div class="col-12 col-lg-6 p-0 d-flex align-item-center">
				<div class="px-5">
					<img src="<?php echo $front_img_url; ?>/logo/bk_logo_small.jpg" alt="bek dessert cafe logo">
					<p class="content">
						<?php echo $langCode['FeaturedFranchisesConBek']; ?>
					</p>
					<a href="<?php echo $site_url; ?>/bekcafe.php" class="btn btn-danger"><?php echo $langCode['btnVisit']; ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-4 gallery">
		<div class="row m-0">
			<div class="col-3 p-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/index/bek-gallery-4.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-3 p-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/index/bek-gallery-6.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-3 p-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/index/IMG_4651_view-2-768-768.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-3 p-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/index/korean-fried-dounut-768-768.jpg" alt="" class="img-fluid">
				</a>
			</div>
		</div>
	</div>
	<div class="container mt-4">
		<div class="row">
			<div class="col-12 col-lg-6 d-flex align-item-center text-center">
				<div class="px-5">
					<h1>
						<img src="<?php echo $front_img_url; ?>/logo/bingbox-logo-small-150x150.jpg" alt="bingbox" class="img-fluid" />
					</h1>
					<p class="content">
						<?php echo $langCode['FeaturedFranchisesConBingBox']; ?>
					</p>
					<a href="<?php echo $site_url; ?>/bingbox.php" class="btn btn-danger"><?php echo $langCode['btnVisit']; ?></a>
				</div>
			</div>
			<div class="col-12 col-lg-6 mt-3 mt-lg-0">
				<img src="<?php echo $front_img_url; ?>/index/bingsu.jpg" alt="bingbox" class="img-fluid" />
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-12 col-lg-6">
				<img src="<?php echo $front_img_url; ?>/index/IMG_5554_view_a.jpg" alt="sulmida" class="img-fluid" />
			</div>
			<div class="col-12 col-lg-6 d-flex align-item-center text-center">
				<div class="px-5">
					<h1>
						<img src="<?php echo $front_img_url; ?>/logo/sulmida-logo-small-150x150.jpg" alt="sulmida">
					</h1>
					<p class="content">
						<?php echo $langCode['FeaturedFranchisesConSulmida']; ?>
					</p>
					<a href="<?php echo $site_url; ?>/sulmida.php" class="btn btn-danger"><?php echo $langCode['btnVisit']; ?></a>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-12 col-lg-6 d-flex align-item-center text-center">
				<div class="px-5">
					<h1>
						<img src="<?php echo $front_img_url; ?>/logo/mepkbang-logo-small.jpg" alt="mukbang">
					</h1>
					<p class="content">
						<?php echo $langCode['FeaturedFranchisesConMeokbang']; ?>
					</p>
					<a href="<?php echo $site_url; ?>/meokbang.php" class="btn btn-danger"><?php echo $langCode['btnVisit']; ?></a>
				</div>
			</div>
			<div class="col-12 col-lg-6 mt-3 mt-lg-0">
				<img src="<?php echo $front_img_url; ?>/index/mukbang.jpg" alt="먹방불고기" class="img-fluid" />
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-12 col-lg-6">
				<img src="<?php echo $front_img_url; ?>/index/becoffee-slide-4-560x560-1.jpg" alt="becoffee" class="img-fluid" />
			</div>
			<div class="col-12 col-lg-6 d-flex align-item-center text-center">
				<div class="px-5">
					<h1>
						<img src="<?php echo $front_img_url; ?>/logo/becoffee-logo-small.jpg" alt="becoffee">
					</h1>
					<p class="content">
						<?php echo $langCode['FeaturedFranchisesConBeCoffee']; ?>
					</p>
					<a href="becoffee" class="btn btn-danger"><?php echo $langCode['btnVisit']; ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="gallery mt-4">
	<h2 class="title handling-title py-5 text-center"><?php echo $langCode['OurMenu']; ?></h2>
	<div class="row mx-0">
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/bek-gallery-4.jpg" alt="slide-image1" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/6-560x560.jpg" alt="slide-image2" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/bek-gallery-8-1.jpg" alt="slide-image3" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/11-560x560.jpg" alt="slide-image4" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/bing-slider-10.jpg" alt="slide-image5" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/bek-gallery-2-1.jpg" alt="slide-image6" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/bek-gallery-10-1.jpg" alt="slide-image7" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/Becoffee-Dessert-7-560x560.jpg" alt="slide-image8" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/grid8.jpg" alt="slide-image9" class="img-fluid" />
			</a>
		</div>
		<div class="col-20 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/index/2-560x560.jpg" alt="slide-image10" class="img-fluid" />
			</a>
		</div>
	</div>
</div>
<div class="map-wrap mt-4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 d-flex align-item-center">
				<div>
					<h2 class="title handling-title text-center"><?php echo $langCode['ContactUs']; ?></h2>
					<div class="content">
						<div class="row">
							<div class="col-1">
								<span class="color-light-green">
									<i class="fa fa-phone"></i>
								</span>
							</div>
							<div class="col-11">
								<span>+82-32-581-3466</span>
							</div>
							<div class="col-1 mt-4">
								<span class="color-light-green">
									<i class="fa fa-envelope"></i>
								</span>
							</div>
							<div class="col-11 mt-4">
								<span>barskorea@hanmail.net</span>
							</div>
							<div class="col-1 mt-4">
								<span class="color-light-green">
									<i class="fa fa-address-book"></i>
								</span>
							</div>
							<div class="col-11 mt-4">
								<span>
									<?php echo $langCode['Address1']; ?><br />
									<?php echo $langCode['Address2']; ?>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 px-lg-0">
				<div id="gmap">
					<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=jomaru-ro%20405&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" aria-label="jomaru-ro 405"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
(function($) {
	jQuery('.gallery a').on('click', function() {
		return false;
	})
})(jQuery);
</script>
<?php
include_once('./footer_ui.php');
?>