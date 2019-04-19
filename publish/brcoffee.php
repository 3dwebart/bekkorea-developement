<?php
include_once('./header_ui.php');
$main = true;
$sub = true;
$page = 3;
$s_page = 4;
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
						Sulmida Dessert Café
					</h1>
					<div class="header-content mt-4">
						The ‘SULMIDA’ focused on being most innovative retailer in the world offering delicious and nutritious selections of  fresh menus and other dessert selection.
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
					Our Menu
				</h2>
				<p class="content mt-5">
					Bk Korea R&D team develops the menu with variety of option every seasons to increase the sales revenue and offers great menus to our clients. We also bring the new dining revolution through professional, high quality, diversity, and unique products. We find individual approach to each customer and offer our menu based on local tastes and preferences.
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
							Healthy Food
						</h2>
						<p class="menu-content">
							We use only the best ingredients
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
							Rich Menu
						</h2>
						<p class="menu-content">
							Rich and unique menu customized upon local  preferences and tastes.
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
							Unique approach
						</h2>
						<p class="menu-content">
							Individual approach to each customer
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
							Vegeterian options
						</h2>
						<p class="menu-content">
							We offer vegeterian and vegan menu to our customers
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
							Training
						</h2>
						<p class="menu-content">
							Our professional team will train Your staff and transfer know-how
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
							Support
						</h2>
						<p class="menu-content">
							In BeK Cafe we offer full 24/7 support to all our customers
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
				<h2>Bingsu – Snow Flakes Desserts</h2>
				<p class="px-5">
					Barskorea offers flavored snow with variety toppings on top. The snow flake dessert is originated from Korea, named ‘Bingsu’. The old-fashioned bingsu was just shaved ice with red bean paste and condensed milk. Nowadays snow flake dessert becomes one of popular dessert in the world loved by all ages and everywhere.
				</p>
			</div>
			<div class="col-lg-6 p-0 order-1 order-lg-2">
				<img src="<?php echo $front_img_url; ?>/bekcafe/bek3-768x768.jpg" alt="Wide selection on the menu" class="img-fluid" />
			</div>
			<div class="col-lg-6 p-0 order-2 order-lg-1">
				<h2>Wide selection on the menu</h2>
				<p class="px-5">
					Be.K also serves various waffle, honey bread, pancakes, fresh salads as well as simple bite dishes. Always made from real ingredients that are free of any artificial flavorings, colors or additives. All menus are trained by professional trainer in local site.
				</p>
			</div>
		</div>
	</div>
</div>
<div class="bek-cafe-our-menu-cate my-5">
	<div class="container">
		<h2 class="menu-cate-title text-center py-5">Our menu</h2>
		<!-- BIGIN :: 1. Bingsu Menu -->
		<div class="row py-4">
			<div class="col-lg-7 order-2 order-lg-1">
				<h2 class="mrnu-cate-subject text-center py-4">Bingsu Menu</h2>
				<div class="row-10">
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							SWEET RED BEANS
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Condensed Milk, Sweet Red Bean Paste, Nuts
						</p>
						<h3 class="mrnu-cate-name">
							LOTUS CARAMEL
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Caramel Sauce, Lotus Biscuits, Nuts, Ice Cream
						</p>
						<h3 class="mrnu-cate-name">
							MANGO BANANA
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Mango sauce, Mango, Banana, Ice Cream
						</p>
						<h3 class="mrnu-cate-name">
							MANGO CHEESECAKE
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Mango Sauce, Homemade Cheesecake, Mango
						</p>
						<h3 class="mrnu-cate-name">
							CHOCO CRUNCH
						</h3>
						<p class="mrnu-cate-content">
							Choco Snow, Choco Sauce, Oreo Cookies, Ice Cream
						</p>
					</div>
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							INJEOLMI
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Condensed Milk, Soybean Powder, Nuts
						</p>
						<h3 class="mrnu-cate-name">
							YOGHURT BERRY
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Yoghurt Sauce, Mixed Berries, Ice Cream
						</p>
						<h3 class="mrnu-cate-name">
							STRAWBERRY
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Strawberry Sauce, Strawberries, Ice Cream
						</p>
						<h3 class="mrnu-cate-name">
							HONEYDEW
						</h3>
						<p class="mrnu-cate-content">
							Milk Snow, Condensed Milk, Honeydew, Nuts
						</p>
						<h3 class="mrnu-cate-name">
							NUTELLA BANANA
						</h3>
						<p class="mrnu-cate-content">
							Choco Snow, Nutella Sauce, Banana, Ice Cream
						</p>
						<h3 class="mrnu-cate-name">
							GREEN TEA
						</h3>
						<p class="mrnu-cate-content">
							Green Tea Snow, Sweet Red Bean Paste, Green Tea Sauce, Nuts, Ice Cream
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
				<h2 class="mrnu-cate-subject text-center py-4">BiHONEY BREAD​ MENU</h2>
				<h3 class="mrnu-cate-name">
					PLAIN HONEY BREAD​
				</h3>
				<p class="mrnu-cate-content">
					Caramel Sauce, Almonds, Ice Cream, Whipped Cream
				</p>
				<h3 class="mrnu-cate-name">
					NUTELLA & STRAWBERRY HONEY BREAD​
				</h3>
				<p class="mrnu-cate-content">
					Nutella, Strawberries, Ice Cream, Whipped Cream
				</p>
				<h3 class="mrnu-cate-name">
					YOGHURT & BERRIES HONEY BREAD​
				</h3>
				<p class="mrnu-cate-content">
					Mixed Berries, Yoghurt Sauce, Ice Cream, Whipped Cream
				</p>
				<h3 class="mrnu-cate-name">
					MANGO & CHOCO HONEY BREAD​
				</h3>
				<p class="mrnu-cate-content">
					Mango, Chocolate Sauce, Ice Cream, Whipped Cream
				</p>
			</div>
		</div>
		<!-- END :: 2. HONEY BREAD​ MENU -->
		<!-- BIGIN :: 3. BREAKFAST MENU -->
		<div class="row py-4">
			<div class="col-lg-7 order-2 order-lg-1">
				<h2 class="mrnu-cate-subject text-center py-4">BREAKFAST MENU</h2>
				<h3 class="mrnu-cate-name">
					FRESH YOGHURT & FRUITS BOWL
				</h3>
				<p class="mrnu-cate-content">
					Plain Yoghurt, Homemade Granola, Honey, Mixed Berries, Goji Berries, Pomegranate, Banana
				</p>
				<h3 class="mrnu-cate-name">
					TOASTS & JAM
				</h3>
				<p class="mrnu-cate-content">
					2 toasts, Fresh Jam
				</p>
				<h3 class="mrnu-cate-name">
					BACON & EGG with FRESHLY BAKED FOCACCIA
				</h3>
				<p class="mrnu-cate-content">
					2 Toasts, 2 Eggs, 2 Bacon, Mixed Salad
				</p>
				<h3 class="mrnu-cate-name">
					AVOCADO & RICOTTA CHEESE SALAD with FRESHLY BAKED FOCACCIA
				</h3>
				<p class="mrnu-cate-content">
					2 Toasts, Avocado, Ricotta Cheese, Mixed Salad
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
				<h2 class="mrnu-cate-subject text-center py-4">VITA SALADS</h2>
				<h3 class="mrnu-cate-name">
					VITA RED
				</h3>
				<p class="mrnu-cate-content">
					<span class="d-block mb-4 font-amatic font-18">
						Prevention of anemia, with antioxidants and vitamin c.
					</span>
					Mixed Salad, Grapefruit, Tomato, Ricotta Cheese, Beet Spread, Mixed Nuts, Balsamic Dressing
				</p>
				<h3 class="mrnu-cate-name">
					VITA GREEN
				</h3>
				<p class="mrnu-cate-content">
					<span class="d-block mb-4 font-amatic font-18">
						Antiaging, with calcium, vitamins A, c, and e.
					</span>
					Mixed Salad, Avocado, Tomato, Bacon, Spinach Spread, Mixed Nuts, Oriental Dressing
				</p>
			</div>
		</div>
		<!-- END :: 4. VITA SALADS -->
		<!-- BIGIN :: 5. KOREAN FRIED CHICKEN MENU -->
		<div class="row py-4">
			<div class="col-lg-7 order-2 order-lg-1">
				<h2 class="mrnu-cate-subject text-center py-4">KOREAN FRIED CHICKEN MENU</h2>
				<h3 class="mrnu-cate-name">
					ORIGINAL
				</h3>
				<p class="mrnu-cate-content">
					Original Crispy Chicken, Marinated with Seasonal Herbs
				</p>
				<h3 class="mrnu-cate-name">
					SWEET & SOUR
				</h3>
				<p class="mrnu-cate-content">
					Homemade Sweet & Sour Sauce, Marinated with Seasonal Herbs
				</p>
				<h3 class="mrnu-cate-name">
					SNOWY CHEESE
				</h3>
				<p class="mrnu-cate-content">
					Snowy Cheese Powder, Marinated with Seasonal Herbs
				</p>
				<h3 class="mrnu-cate-name">
					SOY & GARLIC
				</h3>
				<p class="mrnu-cate-content">
					Soy & Garlic Sauce, Marinated with Seasonal Herbs
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
				<h2 class="mrnu-cate-subject text-center py-4">FRESH DAILY ROASTED COFFEE</h2>
				<div class="row-10">
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							ITALIAN COFFEE
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li>Americano</li>
								<li>Macchiato</li>
								<li>Cafe Latte</li>
								<li>Flat White</li>
								<li>Cappuccino</li>
								<li>Mocha</li>
								<li>Hot Chocolate</li>
							</ul>
						</div>
						<h3 class="mrnu-cate-name">
							FLAVORED LATTE
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li>Matcha Green Tea</li>
								<li>Taro</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<h3 class="mrnu-cate-name">
							ICE DRINKS
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li>Ice Coffee</li>
								<li>Ice Mocha</li>
								<li>Ice Chocolate</li>
							</ul>
						</div>
						<h3 class="mrnu-cate-name">
							BABY CHINO
						</h3>
						<div class="mrnu-cate-content">
							<ul>
								<li>Sprinkles</li>
								<li>Marshmallow</li>
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
				<h2 class="mrnu-cate-subject text-center py-4">BUBBLE TEA, SPARKLING & CREAMY BLENDED</h2>
				<div class="row-10">
					<div class="col-lg-6">
						<h5 class="font-amatic font-23 bold mb-3">
							1. MATCHA GREEN TEA BLENDED WITH PEARLS
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							2. OOLONG TEA MACCHIATO
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							3. ROASTED OOLONG TEA WITH LYCHEE, ALOE JELLY
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							4. OREO TIRAMISU WITH MILK FOAM
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							5. HONEYDEW PASSION POP WITH MANGO PUDDING
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							6. STRAWBERRY & CHEESECAKE BLENDED
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							7. TARO MILK TEA WITH PEARLS
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							8. COC XI MUI KENDONGDONG BLENDED WITH RAINBOW JELLY
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							9. MANGO & COCONUT BLENDED WITH GRASS JELLY
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							10. RED PLUM ICE BLENDED WITH YOGHURT POP
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							11. BLUEBERRY BLENDED WITH PASSION FRUIT POP
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							12. KUMQUAT YOGHURT WITH PASSION FRUIT POP
						</h5>
					</div>
					<div class="col-lg-6">
						<h5 class="font-amatic font-23 bold mb-3">
							13. WATERMELON ICE BLENDED WITH RAINBOW JELLY
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							14. PINEAPPLE& COCONUT BLENDED WITH RAINBOW JELLY
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							15. GREEN MANGO & RED PLUM BLENDED WITH RAINBOW JELLY
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							16. ORIGINAL MILK TEA
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							17. WILD GREEN TEA CREAMY BLENDED
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							18. COOKIE & CREAM CREAMY BLENDED
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							19. BLACK TEA & CARAMEL CREAMY BLENDED
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							20. LIME MOJITO SPARKLING
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							21. BLUE CARIBBEAN SPARKLING
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							22. GREENFIELD SUNRISE SPARKLING
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							23. ROSE COOLER SPARKLING
						</h5>
						<h5 class="font-amatic font-23 bold mb-3">
							24. JASMINE BLOSSOM SPARKLING
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
			<h2 class="title text-center">Learn from the very best</h2>
			<div class="content text-center py-4">
				Be K cafe is a growing network of Bingsu stores and Korean dessert cafes offering only the highest quality snow desserts and drinks.
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="bekcafe-info working">
						<span class="icon"><i class="fa fa-clock-o"></i></span>
						<h2 class="title">Working hours</h2>
						<div class="content">
							Monday- Friday:8:00-19:00 Hrs <br />
							Saturday - 8:00-15:00
						</div>
					</div>
					<div class="bekcafe-info we-here">
						<span class="icon"><i class="fa fa-map-marker"></i></span>
						<h2 class="title">We are here</h2>
						<div class="content">
							BARSKOREA HEADQUARTER<br /> 
							Gyeonggi-do, Bucheon-si, Wonmi-gu, Jomaru-ro 405<br />
							Email : barskorea@hanmail.net <br />
							Tel : +82-32-581-3466 <br />
							Fax : +82-32-581-8937 <br />
							Email. barskorea@hanmail.net<br /> 
							Web. http://www.barskorea.com
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
				Check <br class="d-none d-lg-block" />Other <br class="d-none d-lg-block" />Brands
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