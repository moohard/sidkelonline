<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>
		<?= base_url(); ?>
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Web font -->
	<!--begin::Base Styles -->
	<!--begin::Page Vendors -->
	<link href="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors -->
	<link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<link href="<?= base_url(); ?>assets/css/skins/header/base/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/css/skins/header/menu/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/css/skins/aside/light.css" rel="stylesheet" type="text/css" />
	<!-- <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon_bak2.ico" /> -->
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
	<!-- begin:: Page -->
	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="index.html">
				<div style="position:absolute;top:30%;left:14px;font-size:16px;font-weight:bold;color:aliceblue">
					<?= $_SERVER['SERVER_NAME']; ?>
				</div>
				<!-- <img alt="Logo" src="assets/media/logos/logo-light.png" /> -->
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
			<!-- <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button> -->
			<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
		</div>
	</div>

	<!-- end:: Header Mobile -->


	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<?php $this->load->view('layouts/sidebar'); ?>

			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<?php $this->load->view('layouts/header'); ?>

				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">



					<!-- begin:: Content -->
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

						<!--Begin::Dashboard 1-->

						<?php
						if (!empty($page))
							$this->load->view($page);
						else
							$this->load->view('layouts/error_page');
						?>

						<!--End::Dashboard 1-->
					</div>

					<!-- end:: Content -->
				</div>

				<?php $this->load->view('layouts/footer'); ?>

			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>

	<!-- end::Scrolltop -->

	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#5d78ff",
					"dark": "#282a3c",
					"light": "#ffffff",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": [
						"#c5cbe3",
						"#a1a8c3",
						"#3d4465",
						"#3e4466"
					],
					"shape": [
						"#f0f3ff",
						"#d9dffa",
						"#afb4d4",
						"#646c9a"
					]
				}
			}
		};
	</script>

	<!-- end::Global Config -->

	<!--begin::Base Scripts -->
	<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>assets/js/scripts.bundle.js" type="text/javascript"></script>

	<!--begin::Page Vendors -->
	<script src="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<!--end::Page Vendors -->
	<!--begin::Page Snippets -->
	<script src="<?= base_url(); ?>assets/plugins/custom/flot/flot.bundle.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>assets/js/pages/custom/pages/dashboard.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>assets/js/pages/custom/pages/form-submit-general.js" type="text/javascript"></script>
	<!--end::Page Snippets -->

	<!--begin::Custom Page -->
	<?php if (isset($scripts)) : ?>
		<?php foreach ($scripts as $script) : ?>
			<script type="text/javascript" src="<?= base_url(); ?>assets/js/pages/custom/pages/<?= $script ?>.js"></script>
		<?php endforeach; ?>
	<?php endif; ?>
	<!--end::Custom Page -->
</body>
<!-- end::Body -->

</html>