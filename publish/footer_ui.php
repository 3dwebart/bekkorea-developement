<div class="footer">
	<div class="container">
		<div class="copyright">
			Copyright©2019 BEKKOREA All Rights reserved.
		</div>
	</div>
</div>
<script>
var pageNo = '<?php echo $page; ?>';
var sPageChk = '<?php echo $sub; ?>';
if(sPageChk == true) {
	var sPageNo = '<?php echo $s_page; ?>';
}
</script>
<script src="<?php echo $front_js_url; ?>/bootstrap.bundle.min.js"></script>
<script src="<?php echo $front_js_url; ?>/jquery.cookie.js"></script>
<script src="<?php echo $front_js_url; ?>/common.js"></script>
<script src="<?php echo $front_js_url; ?>/custom.js"></script>
</body>
</html>