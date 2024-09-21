<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pendaftaran Sidang Keliling Online</title>
	<meta charset="utf-8" />
	<meta name="description" content="Aplikasi Pendaftaran Sidang Keliling Online" />
	<meta name="keywords" content="Sidang Keliling Online" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="application" />
	<meta property="og:title" content="Pendaftaran Sidang Keliling Online" />
	<meta property="og:url" content="https://pa-penajam.go.id" />
	<meta property="og:site_name" content="Sidang Keliling Online Oleh Pengadilan Agama Penajam" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link href="<?= base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
		type="text/css" />
	<link href="<?= base_url() ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
		type="text/css" />
	<link href="<?= base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top !=window.self){ window.top.location.replace(window.self.location.href)}</script>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
	<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
	<div class="d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php $this->load->view('new_layouts/header'); ?>
				<?php $this->load->view('new_layouts/subheader'); ?>
				<?php $this->load->view('new_layouts/container'); ?>
				<?php $this->load->view('new_layouts/footer'); ?>
			</div>
		</div>
	</div>
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true"><i class="ki-duotone ki-arrow-up"><span
				class="path1"></span><span class="path2"></span></i></div>
	<?php $this->load->view($modal); ?>
	<script>var hostUrl = "<?= base_url() ?>assets/";</script>
	<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
	<?php if (isset($scripts)): ?>
		<?php foreach ($scripts as $script): ?>
			<script type="text/javascript" src="<?= base_url(); ?>assets/js/pages/custom/pages/<?= $script ?>.js"></script>
		<?php endforeach; ?>
	<?php endif; ?>
</body>

</html>