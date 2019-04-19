<?php
include_once('./header_ui.php');
$main = true;
$sub = false;
$page = 1;
?>
<div class="header-image process">
	<div class="header-wrap">
		<div class="container">
			<h1 class="title">
				<?php echo $langCode['processHeaderTit']; ?>
			</h1>
			<div class="content">
				<?php echo $langCode['processHeaderCon']; ?>
			</div>
		</div>
	</div>
</div>
<div class="min-h500 d-flex align-item-center">
	<div class="container text-center">
		<h2 class="title handling-title">
			<?php echo $langCode['OurBrands']; ?>
		</h2>
		<p class="content">
			<?php echo $langCode['OurBrandsCon']; ?>
		</p>
	</div>
</div>
<div class="our-brand-kinds text-center">
	<div class="row-10 mx-0">
		<div class="col-lg">
			<a href="#" class="d-block">
				<img src="<?php echo $front_img_url; ?>/process/icon_bek-600x600.jpg" alt="be.k cafe" class="img-fluid" />
				<span class="subject"><?php echo $langCode['PremiumDessertCafe']; ?></span>
				<span class="content"><?php echo $langCode['PremiumDessertCafeCon']; ?></span>
			</a>
		</div>
		<div class="col-lg">
			<a href="#" class="d-block">
				<img src="<?php echo $front_img_url; ?>/process/icon_bingbox-600x600.jpg" alt="bingbox" class="img-fluid" />
				<span class="subject"><?php echo $langCode['ModernShavedIce']; ?></span>
				<span class="content"><?php echo $langCode['ModernShavedIceCon']; ?></span>
			</a>
		</div>
		<div class="col-lg">
			<a href="#" class="d-block">
				<img src="<?php echo $front_img_url; ?>/process/icon_sulmida_600x600.jpg" alt="sulmida" class="img-fluid" />
				<span class="subject"><?php echo $langCode['ContemporaryCafe']; ?></span>
				<span class="content"><?php echo $langCode['ContemporaryCafeCon']; ?></span>
			</a>
		</div>
		<div class="col-lg">
			<a href="#" class="d-block">
				<img src="<?php echo $front_img_url; ?>/process/icon_meokbang-600x600.jpg" alt="meokbang" class="img-fluid" />
				<span class="subject"><?php echo $langCode['KoreanBBQRestaurant']; ?></span>
				<span class="content"><?php echo $langCode['KoreanBBQRestaurantCon']; ?></span>
			</a>
		</div>
		<div class="col-lg">
			<a href="#" class="d-block">
				<img src="<?php echo $front_img_url; ?>/process/icon_becoffee-600x600.jpg" alt="be coffee" class="img-fluid" />
				<span class="subject"><?php echo $langCode['RoasteryCafe']; ?></span>
				<span class="content"><?php echo $langCode['RoasteryCafeCon']; ?></span>
			</a>
		</div>
	</div>
</div>
<div class="or-start-your-own-brand">
	<div class="container">
		<h2 class="title main-title text-center">
			<?php echo $langCode['StartYourOwnBrand']; ?>
		</h2>
		<div class="vimeo">
			<div id="made-in-ny"></div>
			<script src="https://player.vimeo.com/api/player.js"></script>
			<script>
			    var options = {
			        id: 253214687,
			        loop: true
			    };

			    var player = new Vimeo.Player('made-in-ny', options);

			    player.setVolume(0);

			    player.on('play', function() {
			        console.log('played the video!');
			    });
			</script>
		</div>
		<div class="row mx-0 mt-5">
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">1. <?php echo $langCode['SupportSystem']; ?></h2>
					<p class="content">
						<?php echo $langCode['SupportSystemCon']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">2. <?php echo $langCode['DecisionMaking']; ?></h2>
					<p class="content">
						<?php echo $langCode['DecisionMakingCon']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">3. <?php echo $langCode['SigningContract']; ?></h2>
					<p class="content">
						<?php echo $langCode['SigningContractCon']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">4. <?php echo $langCode['StartingConstruction​']; ?></h2>
					<p class="content">
						<?php echo $langCode['StartingConstruction​Con']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">5. <?php echo $langCode['Training​']; ?></h2>
					<p class="content">
						<?php echo $langCode['Training​Con']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">6. <?php echo $langCode['SoftOpening​']; ?></h2>
					<p class="content">
						<?php echo $langCode['SoftOpeningCon​']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">7. <?php echo $langCode['GrandOpening']; ?></h2>
					<p class="content">
						<?php echo $langCode['GrandOpeningCon']; ?>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mb-5">
					<h2 class="title sub-title">8. <?php echo $langCode['PostOpening']; ?></h2>
					<p class="content">
						<?php echo $langCode['PostOpeningCon']; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="brand-identity-design">
	<div class="container">
		<h2 class="title brand-title text-center">
			Brand Identity Design
		</h2>
		<p class="content">
			BK Korea is full-service design and branding company  focusing on restaurants, coffee-shops, and dessert cafes brand identity development. Providing total solution of multiple projects in food related business BK KOREA expanding market over 45 countries. All the brands and projects are strictly observed and performed by professional management team. We adapt our brand concepts and recipes to local cuisine in order to make it ore appealed to local market.
		</p>
		<div class="business-model mt-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="wrap">
						<h2 class="title">Business Consulting Fee</h2>
						<p class="content">
							Provide the whole concept from A-Z based on clients ideas. From planning to opening processes including ROI , Costing and expanding plan.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wrap">
						<h2 class="title">Menu Photo Work & Manual Work</h2>
						<p class="content">
							Provide outstanding and good quality photos of menus for brands, signage and CI,BI work called brands manual booklet, operational and recipe booklet.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wrap">
						<h2 class="title">Local Training Fee</h2>
						<p class="content">
							Provide professional training team for local training from preparing to opening. Training will including basic operation, menu and manual training for business. 2-3 professional trainers will stay 7-10 days in local transfer know-how from A-Z to make successful brands.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wrap">
						<h2 class="title">Social Marketing Layout Design</h2>
						<p class="content">
							Design full concept of Facebook and design for whole layout. Manage social media work for 1 month and transfer account to clients
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wrap">
						<h2 class="title">Store Design Work</h2>
						<p class="content">
							Provide from store layout to CAD design for the construction for the space.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wrap">
						<h2 class="title">General Equipment and Ingredients for opening</h2>
						<p class="content">
							Provide full lists of equipment will be used for store, import & local purchase items.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wrap">
						<h2 class="title">Cost of Equipment</h2>
						<p class="content">
							Provide the best equipment including highest quality bingsu machine from BARSKOREA.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="our-projects">
	<div class="container">
		<h2 class="title text-center"><?php echo $langCode['OurProjects']; ?></h2>
		<!-- BIGIN :: Cambodia -->
		<div class="our-project-wrap mt-5">
			<div class="our-project-image">
				<img src="<?php echo $front_img_url; ?>/process/bek-cambodia-1280x720.jpg" alt="bek cambodia" class="img-fluid" />
			</div>
			<div class="our-project-content mt-4">
				<div class="row-10 mx-0">
					<div class="col-lg-6 px-0 px-lg-2">
						<div class="project-name">
							<?php echo $langCode['ProjectName']; ?>:
						</div>
						<h2 class="project-title">
							<?php echo $langCode['BeKKoreaCambodia']; ?>
						</h2>
						<p class="project-content">
							<?php echo $langCode['BeKKoreaCambodiaCon']; ?>
						</p>
					</div>
					<div class="col-lg-6 px-0 px-lg-2">
						<img src="<?php echo $front_img_url; ?>/process/bek-cambodia-480x720-nnz8rarwute24uhb1y2qk6iws61e09w6bcknfee96o.jpg" alt="seol bang" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
		<!-- END :: Cambodia -->
		<!-- BIGIN :: Australia -->
		<div class="our-project-wrap mt-5">
			<div class="our-project-image">
				<img src="<?php echo $front_img_url; ?>/process/bek-australia-1280x720-2-1.jpg" alt="bek cambodia" class="img-fluid" />
			</div>
			<div class="our-project-content mt-4">
				<div class="row-10 mx-0">
					<div class="col-lg-6 px-0 px-lg-2">
						<div class="project-name">
							<?php echo $langCode['ProjectName']; ?>:
						</div>
						<h2 class="project-title">
							<?php echo $langCode['BeKKoreaAustralia']; ?>
						</h2>
						<p class="project-content">
							<?php echo $langCode['BeKKoreaAustraliaCon']; ?>
						</p>
					</div>
					<div class="col-lg-6 px-0 px-lg-2">
						<img src="<?php echo $front_img_url; ?>/process/bek-australia-480x720-3-nnz8rarwute24uhb1y2qk6iws61e09w6bcknfee96o.jpg" alt="seol bang" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
		<!-- END :: Australia -->
		<!-- BIGIN :: Philippines -->
		<div class="our-project-wrap mt-5">
			<div class="our-project-image">
				<img src="<?php echo $front_img_url; ?>/process/seolbang-philippines-1280x720-1.jpg" alt="bek cambodia" class="img-fluid" />
			</div>
			<div class="our-project-content mt-4">
				<div class="row-10 mx-0">
					<div class="col-lg-6 px-0 px-lg-2">
						<div class="project-name">
							<?php echo $langCode['ProjectName']; ?>:
						</div>
						<h2 class="project-title">
							<?php echo $langCode['SeolBangPhilippines']; ?>
						</h2>
						<p class="project-content">
							<?php echo $langCode['SeolBangPhilippinesCon']; ?>
						</p>
					</div>
					<div class="col-lg-6 px-0 px-lg-2">
						<img src="<?php echo $front_img_url; ?>/process/seolbang-philippines-480x720-nnz8rarwute24uhb1y2qk6iws61e09w6bcknfee96o.jpg" alt="seol bang" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
		<!-- END :: Philippines -->
		<!-- BIGIN :: Canada -->
		<div class="our-project-wrap my-5">
			<div class="our-project-image">
				<img src="<?php echo $front_img_url; ?>/process/sulmida-canada-1280x720-1.jpg" alt="bek cambodia" class="img-fluid" />
			</div>
			<div class="our-project-content mt-4">
				<div class="row-10 mx-0">
					<div class="col-lg-6 px-0 px-lg-2">
						<div class="project-name">
							<?php echo $langCode['ProjectName']; ?>:
						</div>
						<h2 class="project-title">
							<?php echo $langCode['SulmidaCanada']; ?>
						</h2>
						<p class="project-content">
							<?php echo $langCode['SulmidaCanadaCon']; ?>
						</p>
					</div>
					<div class="col-lg-6 px-0 px-lg-2">
						<img src="<?php echo $front_img_url; ?>/process/sulmida-canada-480x720-2-nnz8rarwute24uhb1y2qk6iws61e09w6bcknfee96o.jpg" alt="seol bang" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
		<!-- END :: Canada -->
	</div>
</div>
<?php
include_once('./footer_ui.php');
?>