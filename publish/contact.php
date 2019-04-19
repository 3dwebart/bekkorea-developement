<?php
$main = true;
$sub = false;
$page = 4;
$s_page = 0;
include_once('./header_ui.php');
include_once($include_dir."/simple-php-captcha.php");
$captcha = simple_php_captcha();
$_SESSION['captcha'] = $captcha;
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<style>
#captcha_code { height: 100%; }
.form-control-plaintext {
	margin-top: -.375rem;
}
#frmContact {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
#frmContact div{margin-bottom: 15px}
#frmContact div label{margin-left: 5px}
.demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;}
.error{background-color: #FF6600;border:#AA4502 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:4px;}
.info{display: block;font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:#2FC332;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
.btnRefresh{background-color:#8B8B8B;border:0;padding:7px 10px;color:#FFF;float:left;}
</style>
<div class="header-image contact">
	<div class="header-wrap">
		<div class="container text-center">
			<h1 class="header-title text-center">
				<?php echo $langCode['ContactUs']; ?>
			</h1>
			<div class="header-content">
				<?php echo $langCode['ContactUsCon']; ?>
			</div>
		</div>
	</div>
</div>
<div class="customer text-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 cs">
				<span class="d-block icon">
					<i class="fa fa-home"></i>
				</span>
				<h2 class="us"><?php echo $langCode['VisitUs']; ?></h2>
				<span class="d-block con">
					Gyeonggi-do, Bucheon-si,<br />
					Wonmi-gu, Jomaru-ro 405
				</span>
			</div>
			<div class="col-lg-4 cs">
				<span class="d-block icon">
					<i class="fa fa-phone"></i>
				</span>
				<h2 class="us"><?php echo $langCode['CallUs']; ?></h2>
				<span class="d-block con">
					Tel : +82-32-581-3466<br />
					Fax : +82-32-581-8937
				</span>
			</div>
			<div class="col-lg-4 cs">
				<span class="d-block icon">
					<i class="fa fa-envelope"></i>
				</span>
				<h2 class="us"><?php echo $langCode['ContactUs2']; ?></h2>
				<span class="d-block con">
					barskorea@hanmail.net
				</span>
			</div>
		</div>
	</div>
</div>
<div class="contact-us">
	<div class="container">
		<div class="row-4 mx-0">
			<div class="col-lg-6">
				<form method="" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name" class="required"><?php echo $langCode['Name']; ?></label>
						<span id="name-info" class="info"></span>
						<input type="text" name="name" id="name" required="" class="form-control" />
					</div>
					<div class="form-group">
						<label for="email" class="required"><?php echo $langCode['Email']; ?></label>
						<span id="email-info" class="info"></span>
						<input type="text" name="email" id="email" required="" class="form-control" />
					</div>
					<div class="form-group">
						<label for="subject" class="required"><?php echo $langCode['Subject']; ?></label>
						<span id="subject-info" class="info"></span>
						<input type="text" name="subject" id="subject" required="" class="form-control" />
					</div>
					<div class="form-group">
						<label for="message" class="required"><?php echo $langCode['Message']; ?></label>
						<span id="message-info" class="info"></span>
						<textarea name="message" id="message" cols="30" rows="5" required="" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span id="captcha-info" class="info"></span>
							<label for="captcha" class="input-group-prepend required">
								<span class="form-control-plaintext">
									<?php
										echo '<img src="'. $site_url.$captcha['image_src'] . '" alt="CAPTCHA code" class="captcha-image" />';
									?>
								</span>
							</label>
							<input type="text" name="captcha" id="captcha" required="" class="form-control ml-2" />
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger submit-ok">
							<?php echo $langCode['Submit']; ?>
						</button>
					</div>
				</form>
			</div>
			<div class="col-lg-6" id="gmap">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=jomaru-ro%20405&amp;t=m&amp;z=17&amp;output=embed&amp;iwloc=near" aria-label="jomaru-ro 405"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="contact-qr text-center">
	<div class="container">
		<div class="row px-0">
			<div class="col-6 col-lg-3">
				<img src="<?php echo $front_img_url; ?>/contact/Kakao_qr-1-150x150.jpg" alt="kakao talk QR">
			</div>
			<div class="col-6 col-lg-3">
				<img src="<?php echo $front_img_url; ?>/contact/Line_QR1-150x150.jpg" alt="LINE QR">
			</div>
			<div class="col-6 col-lg-3">
				<img src="<?php echo $front_img_url; ?>/contact/wechat_qr1-150x150.jpg" alt="WeChat QR">
			</div>
			<div class="col-6 col-lg-3">
				<img src="<?php echo $front_img_url; ?>/contact/site_qr1-150x150.jpg" alt="BARSKOREA QR">
			</div>
		</div>
	</div>
</div>
<script>
(function($) {
	var captchaCode = '<?php echo $captcha["code"]; ?>';
	jQuery(document).on('click', '.submit-ok', function() {
		var name        = jQuery('#name').val();
		var email       = jQuery('#name').val();
		var subj        = jQuery('#subject').val();
		var msg         = jQuery('#message').val();
		var captcha     = jQuery('#captcha').val();
		if(name == '') {
			alert('Enter your name');
			jQuery('#name').focus();
			return false;
		}
		if(email == '') {
			alert('Enter your email');
			jQuery('#email').focus();
			return false;
		}
		if(subj == '') {
			alert('Please enter a subject');
			jQuery('#subject').focus();
			return false;
		}
		if(msg == '') {
			alert('Please enter a message');
			jQuery('#message').focus();
			return false;
		}
		if(captcha == '') {
			alert('Please enter a captcha code');
			jQuery('#captcha').focus();
			return false;
		}
		if(strtoupper(captcha) != strtoupper(captchaCode)) {
			alert('Capcha code differs from full image code');
			jQuery('#captcha').focus();
			return false;
		} else {
			jQuery(this).closest('form').attr('method', 'post');
			jQuery(this).closest('form').attr('action', '<?php echo $site_url; ?>/contact_ok.php');
			jQuery(this).closest('form').submit();
		}
	})
})(jQuery);
</script>
<?php
include_once('./footer_ui.php');
?>