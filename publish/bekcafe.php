<?php
include_once('./header_ui.php');
$main = true;
$sub = true;
$page = 3;
$s_page = 0;
?>
<div class="header-image bek-cafe">
	<div class="header-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="vimeo">
						<div id="made-in-ny"></div>
						<script src="https://player.vimeo.com/api/player.js"></script>
						<script>
						    var options = {
						        id: 252642586,
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
						<?php echo $langCode['BKCafeHeaderTitle']; ?>
					</h1>
					<div class="header-content mt-4">
						<?php echo $langCode['BKCafeHeaderContent']; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bek-cafe-our-menu my-5">
	<div class="container container-5">
		<div class="row-5 py-5">
			<div class="col-lg-6">
				<h2 class="title">
					<?php $OurMenu = strtolower($langCode['OurMenu']); ?>
					<?php echo ucwords($OurMenu); ?>
				</h2>
				<p class="content mt-5">
					<?php echo $langCode['bkCafeOurMenuCon']; ?>
				</p>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek2.jpg" alt="Our Menu" class="img-fluid" />
			</div>
		</div>
		
	</div>
</div>
<div class="bek-cafe-our-menu my-5">
	<div class="container container-5">
		<div class="row-5 py-5 menu-item">
			<div class="col-lg-4">
				<div class="row-5">
					<div class="col-lg-6">
						<div class="menu-image">
							<img src="<?php echo $front_img_url; ?>/bekcafe/bek-gallery1.jpg" alt="bek gallery1" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="menu-title">
							<?php echo $langCode['BkcafeMenuOneTitle1']; ?>
						</h2>
						<p class="menu-content">
							<?php echo $langCode['BkcafeMenuOneContent1']; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row-5">
					<div class="col-lg-6">
						<div class="menu-image">
							<img src="<?php echo $front_img_url; ?>/bekcafe/bek-gallery2.jpg" alt="bek gallery2" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="menu-title">
							<?php echo $langCode['BkcafeMenuOneTitle2']; ?>
						</h2>
						<p class="menu-content">
							<?php echo $langCode['BkcafeMenuOneContent2']; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row-5">
					<div class="col-lg-6">
						<div class="menu-image">
							<img src="<?php echo $front_img_url; ?>/bekcafe/bek-gallery3.jpg" alt="bek gallery3" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="menu-title">
							<?php echo $langCode['BkcafeMenuOneTitle3']; ?>
						</h2>
						<p class="menu-content">
							<?php echo $langCode['BkcafeMenuOneContent3']; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row-5">
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="menu-image">
							<img src="<?php echo $front_img_url; ?>/bekcafe/bek-gallery4.jpg" alt="bek gallery4" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-6 order-2 order-lg-1">
						<h2 class="menu-title">
							<?php echo $langCode['BkcafeMenuOneTitle4']; ?>
						</h2>
						<p class="menu-content">
							<?php echo $langCode['BkcafeMenuOneContent4']; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row-5">
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="menu-image">
							<img src="<?php echo $front_img_url; ?>/bekcafe/bek-gallery5.jpg" alt="bek gallery5" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-6 order-2 order-lg-1">
						<h2 class="menu-title">
							<?php echo $langCode['BkcafeMenuOneTitle5']; ?>
						</h2>
						<p class="menu-content">
							<?php echo $langCode['BkcafeMenuOneContent5']; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row-5">
					<div class="col-lg-6 order-1 order-lg-2">
						<div class="menu-image">
							<img src="<?php echo $front_img_url; ?>/bekcafe/bek-gallery6.jpg" alt="bek gallery6" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-6 order-2 order-lg-1">
						<h2 class="menu-title">
							<?php echo $langCode['BkcafeMenuOneTitle6']; ?>
						</h2>
						<p class="menu-content">
							<?php echo $langCode['BkcafeMenuOneContent6']; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bek-cafe-our-work text-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 p-0">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek4.jpg" alt="Bingsu – Snow Flakes Desserts" class="img-fluid w-100" />
			</div>
			<div class="col-lg-6 p-0">
				<h2><?php echo $langCode['BingsuSnowFlakesDesserts']; ?></h2>
				<p class="px-5">
					<?php echo $langCode['BingsuSnowFlakesDessertsCon']; ?>
				</p>
			</div>
			<div class="col-lg-6 p-0 order-1 order-lg-2">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek3-768x768.jpg" alt="Wide selection on the menu" class="img-fluid" />
			</div>
			<div class="col-lg-6 p-0 order-2 order-lg-1">
				<h2><?php echo $langCode['WideSelectionOnTheMenu']; ?></h2>
				<p class="px-5">
					<?php echo $langCode['WideSelectionOnTheMenuCon']; ?>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="bek-cafe-our-menu-cate my-5">
	<div class="container">
		<h2 class="menu-cate-title text-center py-5"><?php echo ucwords($OurMenu); ?></h2>
		<!-- BIGIN :: 1. Bingsu Menu -->
		<div class="row py-4">
			<div class="col-lg-7 order-2 order-lg-1">
				<h2 class="mrnu-cate-subject text-center py-4"><?php echo $langCode['BingsuMenu']; ?></h2>
				<div class="row-10">
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName01']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent01']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName02']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent02']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName03']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent03']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName04']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent04']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName05']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent05']; ?>
						</p>
					</div>
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName06']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent06']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName07']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent07']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName08']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent08']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName09']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent09']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName10']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent10']; ?>
						</p>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BingsuMenuName11']; ?>
						</h3>
						<p class="mrnu-cate-content">
							<?php echo $langCode['BingsuMenuContent11']; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5 order-1 order-lg-2">
				<div class="menu-cate-image py-4">
					<img src="<?php echo $front_img_url; ?>/bekcafe/menu-type1-bingsu.jpg" alt="bingsu" class="img-fluid" />
				</div>
			</div>
		</div>
		<!-- END :: 1. Bingsu Menu -->
		<!-- BIGIN :: 2. HONEY BREAD​ MENU -->
		<div class="row py-4">
			<div class="col-lg-5">
				<div class="menu-cate-image py-4">
					<img src="<?php echo $front_img_url; ?>/bekcafe/menu-type2-bread.jpg" alt="bingsu" class="img-fluid" />
				</div>
			</div>
			<div class="col-lg-7">
				<h2 class="mrnu-cate-subject text-center py-4"><?php echo $langCode['HoneyBreadMenu']; ?></h2>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['HoneyBreadMenuName01']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['HoneyBreadMenuContent01']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['HoneyBreadMenuName02']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['HoneyBreadMenuContent02']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['HoneyBreadMenuName03']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['HoneyBreadMenuContent03']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['HoneyBreadMenuName04']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['HoneyBreadMenuContent04']; ?>
				</p>
			</div>
		</div>
		<!-- END :: 2. HONEY BREAD​ MENU -->
		<!-- BIGIN :: 3. BREAKFAST MENU -->
		<div class="row py-4">
			<div class="col-lg-7 order-2 order-lg-1">
				<h2 class="mrnu-cate-subject text-center py-4"><?php echo $langCode['BreakfastMenu']; ?></h2>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['BreakfastMenuName01']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['BreakfastMenuContent01']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['BreakfastMenuName02']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['BreakfastMenuContent02']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['BreakfastMenuName03']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['BreakfastMenuContent03']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['BreakfastMenuName04']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['BreakfastMenuContent04']; ?>
				</p>
			</div>
			<div class="col-lg-5 order-1 order-lg-2">
				<div class="menu-cate-image py-4">
					<img src="<?php echo $front_img_url; ?>/bekcafe/menu-type3-breakfast.jpg" alt="bingsu" class="img-fluid" />
				</div>
			</div>
		</div>
		<!-- END :: 3. BREAKFAST MENU -->
		<!-- BIGIN :: 4. VITA SALADS -->
		<div class="row py-4">
			<div class="col-lg-5">
				<div class="menu-cate-image py-4">
					<img src="<?php echo $front_img_url; ?>/bekcafe/menu-type4-salads.jpg" alt="bingsu" class="img-fluid" />
				</div>
			</div>
			<div class="col-lg-7">
				<h2 class="mrnu-cate-subject text-center py-4"><?php echo $langCode['VitaSalads']; ?></h2>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['VitaSaladsName01']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<span class="d-block mb-4 font-amatic font-18">
						<?php echo $langCode['VitaSaladsIngredient01']; ?>
					</span>
					<?php echo $langCode['VitaSaladsContent01']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['VitaSaladsName02']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<span class="d-block mb-4 font-amatic font-18">
						<?php echo $langCode['VitaSaladsIngredient02']; ?>
					</span>
					<?php echo $langCode['VitaSaladsContent02']; ?>
				</p>
			</div>
		</div>
		<!-- END :: 4. VITA SALADS -->
		<!-- BIGIN :: 5. KOREAN FRIED CHICKEN MENU -->
		<div class="row py-4">
			<div class="col-lg-7 order-2 order-lg-1">
				<h2 class="mrnu-cate-subject text-center py-4"><?php echo $langCode['KoreanFriedCHickenMenu']; ?></h2>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['KoreanFriedCHickenMenuName01']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['KoreanFriedCHickenMenuContent01']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['KoreanFriedCHickenMenuName02']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['KoreanFriedCHickenMenuContent02']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['KoreanFriedCHickenMenuName03']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['KoreanFriedCHickenMenuContent03']; ?>
				</p>
				<h3 class="mrnu-cate-name">
					<?php echo $langCode['KoreanFriedCHickenMenuName04']; ?>
				</h3>
				<p class="mrnu-cate-content">
					<?php echo $langCode['KoreanFriedCHickenMenuContent04']; ?>
				</p>
			</div>
			<div class="col-lg-5 order-1 order-lg-2">
				<div class="menu-cate-image py-4">
					<img src="<?php echo $front_img_url; ?>/bekcafe/menu-type5-chicken.jpg" alt="bingsu" class="img-fluid" />
				</div>
			</div>
		</div>
		<!-- END :: 5. KOREAN FRIED CHICKEN MENU -->
		<!-- BIGIN :: 6. FRESH DAILY ROASTED COFFEE -->
		<div class="row py-4">
			<div class="col-lg-5">
				<div class="menu-cate-image py-4">
					<img src="<?php echo $front_img_url; ?>/bekcafe/menu-type6-coffee.jpg" alt="bingsu" class="img-fluid" />
				</div>
			</div>
			<div class="col-lg-7">
				<h2 class="mrnu-cate-subject text-center py-4"><?php echo $langCode['FreshDailyRoastedCoffee']; ?></h2>
				<div class="row-10">
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['ItalianCoffee']; ?>
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li><?php echo $langCode['Americano']; ?></li>
								<li><?php echo $langCode['Macchiato']; ?></li>
								<li><?php echo $langCode['CafeLatte']; ?></li>
								<li><?php echo $langCode['FlatWhite']; ?></li>
								<li><?php echo $langCode['Cappuccino']; ?></li>
								<li><?php echo $langCode['Mocha']; ?></li>
								<li><?php echo $langCode['HotChocolate']; ?></li>
							</ul>
						</div>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['FlavoredLatte']; ?>
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li><?php echo $langCode['MatchaGreenTea']; ?></li>
								<li><?php echo $langCode['Taro']; ?></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['IceDrinks']; ?>
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li><?php echo $langCode['IceCoffee']; ?></li>
								<li><?php echo $langCode['IceMocha']; ?></li>
								<li><?php echo $langCode['IceChocolate']; ?></li>
							</ul>
						</div>
						<h3 class="mrnu-cate-name">
							<?php echo $langCode['BabyChino']; ?>
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li><?php echo $langCode['Sprinkles']; ?></li>
								<li><?php echo $langCode['Marshmallow']; ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END :: 6. FRESH DAILY ROASTED COFFEE -->
		<!-- BIGIN :: 7. BUBBLE TEA, SPARKLING & CREAMY BLENDED -->
		<div class="row py-4">
			<div class="col-lg-7 order-2 order-lg-1">
				<h2 class="mrnu-cate-subject text-center py-4">
					<?php echo $langCode['BubbleTeaSparklingCreamyBlended']; ?>
				</h2>
				<div class="row-10">
					<div class="col-lg-6">
						<h5 class="font-amatic font-23 bold mb-3">
							1. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu01']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							2. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu02']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							3. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu03']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							4. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu04']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							5. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu05']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							6. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu06']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							7. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu07']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							8. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu08']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							9. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu09']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							10. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu10']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							11. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu11']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							12. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu12']; ?>
						</h5>
					</div>
					<div class="col-lg-6">
						<h5 class="font-amatic font-23 bold mb-3">
							13. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu13']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							14. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu14']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							15. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu15']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							16. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu16']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							17. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu17']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							18. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu18']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							19. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu19']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							20. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu20']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							21. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu21']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							22. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu22']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							23. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu23']; ?>
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							24. <?php echo $langCode['BubbleTeaSparklingCreamyBlendedMenu24']; ?>
						</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-5 order-1 order-lg-2">
				<div class="menu-cate-image py-4">
					<img src="<?php echo $front_img_url; ?>/bekcafe/menu-type5-chicken.jpg" alt="bingsu" class="img-fluid" />
				</div>
			</div>
		</div>
		<!-- END :: 7. BUBBLE TEA, SPARKLING & CREAMY BLENDED -->
	</div>
</div>
<div class="bek-cafe-image-gallery">
	<div class="row m-0">
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-01.jpg" alt="image gallery 1" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-02.jpg" alt="image gallery 2" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-03.jpg" alt="image gallery 3" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-04.jpg" alt="image gallery 4" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-05.jpg" alt="image gallery 5" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-06.jpg" alt="image gallery 6" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-07.jpg" alt="image gallery 7" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-08.jpg" alt="image gallery 8" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-09.jpg" alt="image gallery 9" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-10.jpg" alt="image gallery 10" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-11.jpg" alt="image gallery 11" class="img-fluid">
			</a>
		</div>
		<div class="col-6 col-lg-2 p-0">
			<a href="#">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek-image-gallery-12.jpg" alt="image gallery 12" class="img-fluid">
			</a>
		</div>
	</div>
</div>
<div class="tail-image bek-cafe">
	<div class="tail-wrap">
		<div class="container">
			<h2 class="title text-center"><?php echo $langCode['LearnFromTheVeryBest']; ?></h2>
			<div class="content text-center py-4">
				<?php echo $langCode['LearnFromTheVeryBestCon']; ?>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="bekcafe-info working">
						<span class="icon"><i class="fa fa-clock-o"></i></span>
						<h2 class="title"><?php echo $langCode['WorkingHours']; ?></h2>
						<div class="content">
							<?php echo $langCode['BarskoreaWorkTime1']; ?><br />
							<?php echo $langCode['BarskoreaWorkTime2']; ?>
						</div>
					</div>
					<div class="bekcafe-info we-here">
						<span class="icon"><i class="fa fa-map-marker"></i></span>
						<h2 class="title"><?php echo $langCode['WeAreHere']; ?></h2>
						<div class="content">
							<?php echo $langCode['BarskoreaHeadquarter']; ?><br /> 
							<?php echo $langCode['Address2'].$langCode['Address1']; ?><br />
							<?php echo $langCode['Email']; ?> : barskorea@hanmail.net <br />
							<?php echo $langCode['Tel']; ?> : +82-32-581-3466 <br />
							<?php echo $langCode['Fax']; ?> : +82-32-581-8937 <br />
							<?php echo $langCode['Email']; ?>. barskorea@hanmail.net<br /> 
							<?php echo $langCode['Web']; ?>. http://www.barskorea.com
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="gmap" id="gmap">
						<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=jomaru-ro%20405&amp;t=m&amp;z=17&amp;output=embed&amp;iwloc=near" aria-label="jomaru-ro 405"></iframe>
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