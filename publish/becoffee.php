<?php
include_once('./header_ui.php');
$main = true;
$sub = true;
$page = 3;
$s_page = 6;
?>
<div class="header-image becoffee">
	<div class="header-wrap text-center">
		<div class="container">
			<div>
				<h1 class="header-title mb-4">
					<?php echo $langCode['becoffeeHeaderTitle']; ?>
				</h1>
				<div class="header-content">
					<?php echo $langCode['becoffeeHeaderContent']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="becoffee-wrapper about-becoffee text-center">
	<div class="container">
		<div class="title font-37 bold"><?php echo $langCode['becoffeeAboutUs']; ?></div>
		<div class="becoffee-subtitle pt-2"><?php echo $langCode['welcomeToBecoffee']; ?></div>
		<div class="bar py-2">
			<img src="<?php echo $front_img_url; ?>/becoffee/line-1.png" alt="line" />
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="content">
					<?php echo $langCode['becoffeeAboutUsCon']; ?>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo $front_img_url; ?>/becoffee/Image-1-no_back-1.jpg" alt="line" class="img-fluid" />
			</div>
		</div>
	</div>
</div>
<div class="becoffee-wrapper coffee-bean text-center">
	<div class="coffee-bean-wrap">
		<div class="container">
			<div class="title font-37 bold"><?php echo $langCode['CoffeeBeans']; ?></div>
			<div class="becoffee-subtitle pt-2"><?php echo $langCode['CoffeeBeansSubTitle']; ?></div>
			<div class="bar py-2">
				<img src="<?php echo $front_img_url; ?>/becoffee/line-2.png" alt="line" />
			</div>
			<div class="row align-items-center">
				<div class="col-lg-4">
					<img src="<?php echo $front_img_url; ?>/becoffee/coffee-stage1.jpg" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-4">
					<img src="<?php echo $front_img_url; ?>/becoffee/coffee-stage2.jpg" alt="line" class="img-fluid" />
				</div>
				<div class="col-lg-4">
					<img src="<?php echo $front_img_url; ?>/becoffee/coffee-stage3.jpg" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
</div>
<div class="cups"></div>
<div class="special-coffee text-center">
	<div class="special-coffee-wrap text-center">
		<div class="container">
			<div>
				<h1 class="title font-37 bold py-2">
					<?php echo $langCode['SpecialCoffee']; ?>
				</h1>
				<div class="bar py-3">
					<img src="<?php echo $front_img_url; ?>/becoffee/line-2.png" alt="line" />
				</div>
				<div class="content py-2">
					<?php echo $langCode['SpecialCoffeeSubTitle']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- BIGIN :: becoffee menu drinks -->
<div class="becoffee-wrapper becoffee-menu drinks text-center">
	<div class="container">
		<div class="title font-37 bold"><?php echo $langCode['BecoffeeMenu']; ?></div>
		<div class="becoffee-subtitle pt-2"><?php echo $langCode['BecoffeeMenu1SubTitle']; ?></div>
		<div class="bar py-2">
			<img src="<?php echo $front_img_url; ?>/becoffee/line-1.png" alt="line" />
		</div>
		<div class="row content">
			<div class="col-lg-4">
				<div class="item-image">
					<img src="<?php echo $front_img_url; ?>/becoffee/americano-768x576.jpg" alt="" class="img-fluid" />
				</div>
				<span><?php echo $langCode['BecoffeeMenu1Name1']; ?>Americano</span>
			</div>
			<div class="col-lg-4">
				<div class="item-image">
					<img src="<?php echo $front_img_url; ?>/becoffee/latte-768x576.jpg" alt="" class="img-fluid" />
				</div>
				<span><?php echo $langCode['BecoffeeMenu1Name2']; ?>Café Latté</span>
			</div>
			<div class="col-lg-4">
				<div class="item-image">
					<img src="<?php echo $front_img_url; ?>/becoffee/Cappiccino-768x576.jpg" alt="" class="img-fluid" />
				</div>
				<span><?php echo $langCode['BecoffeeMenu1Name3']; ?>Cappuccino</span>
			</div>
			<div class="col-lg-4">
				<div class="item-image">
					<img src="<?php echo $front_img_url; ?>/becoffee/Macchiato-768x576.jpg" alt="" class="img-fluid" />
				</div>
				<span><?php echo $langCode['BecoffeeMenu1Name4']; ?>Macchiato</span>
			</div>
			<div class="col-lg-4">
				<div class="item-image">
					<img src="<?php echo $front_img_url; ?>/becoffee/Vienna-coffee-768x576.jpg" alt="" class="img-fluid" />
				</div>
				<span><?php echo $langCode['BecoffeeMenu1Name5']; ?>Vienna Coffee</span>
			</div>
			<div class="col-lg-4">
				<div class="item-image">
					<img src="<?php echo $front_img_url; ?>/becoffee/Orange-bianco-768x576.jpg" alt="" class="img-fluid" />
				</div>
				<span><?php echo $langCode['BecoffeeMenu1Name6']; ?>Orange Bianco</span>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END :: becoffee menu drinks -->
<!-- BIGIN :: becoffee menu frash food -->
<div class="becoffee-wrapper becoffee-menu fresh-food text-center">
	<div class="container">
		<div class="title font-37 bold"><?php echo $langCode['BecoffeeMenu']; ?></div>
		<div class="becoffee-subtitle pt-2"><?php echo $langCode['BecoffeeMenu2SubTitle']; ?></div>
		<div class="bar py-2">
			<img src="<?php echo $front_img_url; ?>/becoffee/line-2.png" alt="line" />
		</div>
		<div class="row m-0 align-items-center text-center">
			<div class="col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/becoffee/frash-food1.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-3 px-0">
				<h2 class="title"><?php echo $langCode['BecoffeeMenu2Name1']; ?></h2>
				<div class="content px-3">
					<?php echo $langCode['BecoffeeMenu2Content1']; ?>
				</div>
			</div>
			<div class="col-lg-3 px-0">
				<img src="<?php echo $front_img_url; ?>/becoffee/frash-food2.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-3 px-0">
				<h2 class="title"><?php echo $langCode['BecoffeeMenu2Name2']; ?></h2>
				<div class="content px-3">
					<?php echo $langCode['BecoffeeMenu2Content2']; ?>
				</div>
			</div>
			<div class="col-lg-3 px-0 order-5 order-lg-6">
				<img src="<?php echo $front_img_url; ?>/becoffee/frash-food3.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-3 px-0 order-6 order-lg-5">
				<h2 class="title"><?php echo $langCode['BecoffeeMenu2Name3']; ?></h2>
				<div class="content px-3">
					<?php echo $langCode['BecoffeeMenu2Content3']; ?>
				</div>
			</div>
			<div class="col-lg-3 px-0 order-7 order-lg-8">
				<img src="<?php echo $front_img_url; ?>/becoffee/frash-food4.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-3 px-0 order-8 order-lg-7">
				<h2 class="title"><?php echo $langCode['BecoffeeMenu2Name4']; ?></h2>
				<div class="content px-3">
					<?php echo $langCode['BecoffeeMenu2Content4']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end :: becoffee menu frash food -->
<!-- BIGIN :: becoffee menu desserts -->
<div class="becoffee-wrapper becoffee-menu desserts text-center">
	<div class="container">
		<div class="title font-37 bold"><?php echo $langCode['BecoffeeMenu']; ?></div>
		<div class="becoffee-subtitle pt-2"><?php echo $langCode['BecoffeeMenu3SubTitle']; ?></div>
		<div class="bar py-2">
			<img src="<?php echo $front_img_url; ?>/becoffee/line-1.png" alt="line" />
		</div>
		<div class="row m-0 becoffee-gallery">
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery01.jpg" alt="becoffee gallery 01" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery02.jpg" alt="becoffee gallery 02" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery03.jpg" alt="becoffee gallery 03" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery04.jpg" alt="becoffee gallery 04" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery05.jpg" alt="becoffee gallery 05" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery06.jpg" alt="becoffee gallery 06" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery07.jpg" alt="becoffee gallery 07" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery08.jpg" alt="becoffee gallery 08" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery09.jpg" alt="becoffee gallery 09" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery10.jpg" alt="becoffee gallery 10" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery11.jpg" alt="becoffee gallery 11" class="img-fluid" />
				</a>
			</div>
			<div class="col-6 col-lg-3 px-0">
				<a href="#">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-gallery12.jpg" alt="becoffee gallery 12" class="img-fluid" />
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END :: becoffee menu desserts -->
<div class="tail-image becoffee text-center">
	<div class="tail-wrap py-5">
		<div class="container">
			<h2 class="title text-center"><?php echo $langCode['BecomeAFranchisee']; ?></h2>
			<h3 class="sub-title"><?php echo $langCode['joinBeKFamily']; ?></h3>
			<div class="bar py-2">
				<img src="<?php echo $front_img_url; ?>/becoffee/line-2.png" alt="line" />
			</div>
			<div class="row">
				<div class="col-lg-6">
					<h2 class="title font-37 bold"><?php echo $langCode['WorkingHours']; ?></h2>
					<div class="becoffee-worktime pt-2 pb-3">
						<?php echo $langCode['BecoffeeWorkTime1']; ?><br />
						<?php echo $langCode['BecoffeeWorkTime2']; ?>
					</div>
					<div class="barskorea-info">
						<?php echo $langCode['BecoffeeFooterInfo']; ?>
					</div>
				</div>
				<div class="col-lg-6">
					<img src="<?php echo $front_img_url; ?>/becoffee/becoffee-1-600x400.jpg" alt="becoffee coffee making" class="img-fluid" />
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