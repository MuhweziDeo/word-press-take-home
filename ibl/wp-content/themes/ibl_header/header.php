<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ibl_header
 */

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#3498db">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="https://ibleducation.com/xmlrpc.php">

	<title>IBL Education &#8211; AI-Driven Open edX Platforms and Courses</title>
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="IBL Education &raquo; Feed" href="https://ibleducation.com/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/ibleducation.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.16"
			}
		};
		! function(a, b, c) {
			function d(a, b) {
				var c = String.fromCharCode;
				l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
				var d = k.toDataURL();
				l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
				var e = k.toDataURL();
				return d === e
			}

			function e(a) {
				var b;
				if (!l || !l.fillText) return !1;
				switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
					case "flag":
						return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
					case "emoji":
						return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
				}
				return !1
			}

			function f(a) {
				var c = b.createElement("script");
				c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
			}
			var g, h, i, j, k = b.createElement("canvas"),
				l = k.getContext && k.getContext("2d");
			for (j = Array("flag", "emoji"), c.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
			c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
				c.DOMReady = !0
			}, c.supports.everything || (h = function() {
				c.readyCallback()
			}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
				"complete" === b.readyState && c.readyCallback()
			})), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-notification-bars-css' href='https://ibleducation.com/wp-content/plugins/wp-notification-bars/public/css/wp-notification-bars-public.css?ver=1.0.5' type='text/css' media='all' />
	<link rel='stylesheet' id='ot-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto:300,300italic,regular,italic,500,500italic,700,700italic' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='https://ibleducation.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.5' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css' href='https://ibleducation.com/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.6.4' type='text/css' media='all' />
	<style id='rs-plugin-settings-inline-css' type='text/css'>
		#rs-demo-id {}
	</style>
	<link rel='stylesheet' id='video_popup_close_icon-css' href='https://ibleducation.com/wp-content/plugins/video-popup/css/vp-close-icon/close-button-icon.css' type='text/css' media='all' />
	<link rel='stylesheet' id='oba_youtubepopup_css-css' href='https://ibleducation.com/wp-content/plugins/video-popup/css/YouTubePopUp.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=5.4.5' type='text/css' media='all' />
	<link rel='stylesheet' id='js_composer_front-css' href='https://ibleducation.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.4.5' type='text/css' media='all' />
	<link rel='stylesheet' id='core-extend-css' href='https://ibleducation.com/wp-content/plugins/core-extend/assets/css/core-extend.css?ver=1' type='text/css' media='all' />
	<link rel='stylesheet' id='h5p-plugin-styles-css' href='https://ibleducation.com/wp-content/plugins/h5p/h5p-php-library/styles/h5p.css?ver=1.14.0' type='text/css' media='all' />
	<link rel='stylesheet' id='mnky_main-css' href='https://ibleducation.com/wp-content/themes/fintech-wp/style.css?ver=1.1.2' type='text/css' media='all' />
	<style id='mnky_main-inline-css' type='text/css'>
		input[type='submit'],
		button,
		#wp-calendar #today,
		.pricing-box .plan-badge,
		.scrollToTop,
		.widget-area .widget .tagcloud a:hover,
		blockquote.box-left,
		blockquote.box-right,
		blockquote.callout,
		.article-labels span,
		.archive-style-2:nth-child(odd) .post-content-bg,
		.archive-style-2.layout-two-column:nth-child(4n) .post-content-bg,
		.archive-style-2.layout-two-column:nth-child(4n+1) .post-content-bg,
		.rating-bar-value,
		.mp-container .mp-comment,
		#mobile-site-navigation .mobile-menu-header,
		#site-navigation-side ul li.menu-button-theme a,
		#header-container .menu-toggle-wrapper:hover span {
			background-color: #3498db;
		}

		input[type='submit'],
		button {
			border-bottom-color: #1175b8;
		}

		input[type=button]:hover,
		input[type='submit']:hover,
		button:hover {
			border-bottom-color: #1175b8;
			background-color: #1175b8;
		}

		.archive-layout.format-video .post-preview:before,
		.archive-layout.format-gallery .post-preview:before,
		.archive-layout.format-link .post-preview:before {
			background-color: rgba(52, 152, 219, 0.70);
		}

		.archive-layout.format-video .post-preview:hover:before,
		.archive-layout.format-gallery .post-preview:hover:before,
		.archive-layout.format-link .post-preview:hover:before {
			background-color: rgba(52, 152, 219, 0.80);
		}

		::selection {
			background-color: #f39c12;
		}

		::-moz-selection {
			background-color: #f39c12;
		}

		.archive-style-2:nth-child(even) .post-content-bg,
		.archive-style-2.layout-two-column .post-content-bg {
			background-color: #f39c12;
		}

		.themecolor_txt,
		a,
		a:hover,
		blockquote.center p,
		#comments span.required,
		#comments .comment-reply-link:hover,
		#comments h3.comment-reply-title #cancel-comment-reply-link:hover,
		#comments .comment-meta a:hover,
		.vc_toggle_default .vc_toggle_title .vc_toggle_icon:after,
		.single-post .entry-header h5 a:hover,
		.entry-header .entry-meta a:hover,
		#comments p.comment-notes:before,
		p.logged-in-as:before,
		p.must-log-in:before,
		.sticky .post-preview:after,
		.pagination a:hover,
		.page-links a:hover,
		.format-chat p:nth-child(odd):before,
		#comments .comment-navigation a:hover,
		.separator_w_icon i,
		.mnky_testimonials-slider .flex-control-paging li a.flex-active:after,
		.mnky-content-slider .flex-control-paging li a.flex-active:after,
		#site-navigation ul li a:hover,
		#site-navigation ul li.current-menu-item>a,
		#site-navigation ul li.megamenu ul li ul li a:hover,
		#site-navigation ul li.megamenu ul li.current-menu-item>a,
		.mnky-posts .mp-title a:hover,
		.mp-author a:hover,
		.entry-meta-blog .meta-author:hover,
		.meta-comments a:hover,
		.archive-layout .entry-category a:hover,
		.mp-category a:hover,
		.rating_aspect_value .rating-value,
		.rating_summary_value,
		.rating-stars,
		#mobile-site-navigation ul>li>a:hover,
		.mnky_team_wrapper .team_member_position,
		.mnky_team_wrapper .team_content_container i,
		.mnky_breadcrumbs a:hover span,
		.site-links .search_button:hover,
		.site-links .header_cart_link i:hover,
		.menu-toggle-wrapper:hover,
		.footer-sidebar .widget a:hover,
		.site-info .widget a:hover {
			color: #3498db;
		}

		.archive-layout .entry-category,
		.archive-layout .entry-category a,
		.single-post .entry-header h5,
		.single-post .entry-header h5 a,
		.mnky_team_wrapper:hover .team_content_container i,
		.mnky_breadcrumbs span {
			color: #f39c12;
		}

		input:focus,
		textarea:focus,
		blockquote.border p,
		blockquote.bold:after,
		.rating-bar-value:after,
		#site-navigation-side ul li.menu-button-theme a,
		#site-navigation-side ul li.menu-button-outline-theme a,
		#sidebar .widget.widget_nav_menu ul li.current-menu-item a,
		#sidebar.float-right .widget.widget_nav_menu ul li.current-menu-item a {
			border-color: #3498db;
		}

		.mp-container .mp-comment:after {
			border-left-color: #3498db;
			border-top-color: #3498db;
		}

		#main,
		#site-header #header-container,
		#top-bar,
		#mobile-site-header,
		#container,
		.inner,
		.page-header,
		.header-search,
		.header-search .search-input {
			max-width: 1200px;
		}

		#site-navigation ul li.megamenu>ul {
			max-width: 1200px;
			left: calc(50% - 600px);
		}

		@media only screen and (max-width : 1200px) {
			#site-navigation .menu-container ul li.megamenu>ul {
				left: 0;
			}
		}

		@media only screen and (max-width : 1260px) {
			.searchform-wrapper {
				padding: 0 30px;
			}

			.header-search .toggle-header-search {
				right: 30px;
			}
		}

		#mobile-site-header {
			width: 100% !important;
		}

		#site-header,
		#site-header #header-wrapper {
			height: 100px;
		}

		#site-header,
		#site-header #header-wrapper,
		#mobile-site-header {
			background-color: #ffffff;
		}

		#site-header #header-wrapper {
			box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.12);
		}

		#site-header.header-overlay #header-wrapper {
			box-shadow: none;
		}

		#top-bar-wrapper,
		#top-bar .widget_nav_menu ul li ul {
			background: #34495e
		}

		#top-bar-wrapper .widget,
		#top-bar-wrapper .widget a,
		#top-bar .widget-title,
		#top-bar .search-input {
			color: #ffffff
		}

		#top-bar-wrapper .widget a:hover {
			color: #ffffff
		}

		#site-navigation ul>li>a,
		.site-links .menu-toggle-wrapper,
		.site-links .header_cart_wrapper,
		.site-links .search_button,
		#site-logo .site-title,
		#site-navigation #menu-sidebar {
			line-height: 100px
		}

		.header-search .search-input {
			height: 100px
		}

		#site-navigation ul li a,
		.site-links .search_button,
		.site-links .header_cart_link i,
		.toggle-mobile-menu i,
		#mobile-site-header #mobile-site-logo h1.site-title a,
		#mobile-site-header .toggle-mobile-menu i,
		.header-search .search-input,
		.menu-toggle-wrapper {
			color: #717e9e
		}

		.header-search .toggle-header-search span,
		#header-container .menu-toggle-wrapper span {
			background-color: #717e9e
		}

		#site-navigation ul li ul li a,
		#site-navigation ul li ul li a:hover,
		#site-navigation ul li ul li.current-menu-item>a {
			color: #717e9e
		}

		#site-navigation ul li.megamenu>ul>li>a,
		#site-navigation ul li.megamenu>ul>li>a:hover {
			color: #0b3b5b !important
		}

		#mobile-site-header {
			background: #ffffff
		}

		#mobile-site-header .toggle-mobile-menu i,
		#mobile-site-header #mobile-site-logo h1.site-title a {
			color: #0088cc
		}

		.page-sidebar .widget {
			color: #666677
		}

		.page-sidebar .widget .widget-title:after {
			background: #f39c12
		}

		body,
		select,
		textarea,
		input,
		button {
			font-family: "Roboto", Arial, Helvetica, sans-serif;
		}

		body {
			color: #666677;
			font-size: 16px
		}

		#content h4.wpb_toggle,
		.mp-author a,
		.entry-meta-blog .meta-author,
		.meta-comments a,
		.entry-header .entry-meta,
		.entry-header .entry-meta a,
		.pagination a,
		.page-links a,
		#comments .comment-meta a,
		#comments .comment-reply-link,
		#comments h3.comment-reply-title #cancel-comment-reply-link,
		#comments .comment-navigation a,
		.mnky_breadcrumbs a span,
		.mnky-content-box,
		.mnky-accordion.vc_tta-style-classic.vc_tta.vc_general .vc_tta-panel-title>a {
			color: #666677;
		}

		#site-navigation,
		#site-navigation ul li a,
		.site-links .menu-toggle-wrapper {
			font-family: "Roboto", Arial, Helvetica, sans-serif;
			;
			font-weight: 500;
		}

		.single-post .entry-content,
		.single-post .post_lead_content {
			font-size: 16px
		}

		h1 {
			font-size: 30px
		}

		h2 {
			font-size: 24px
		}

		h3 {
			font-size: 20px
		}

		h4 {
			font-size: 18px
		}

		h5 {
			font-size: 16px
		}

		h6 {
			font-size: 14px
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		h1 a,
		h2 a,
		h3 a,
		h4 a,
		h5 a,
		h6 a {
			color: #0b3b5b
		}

		#site-logo .site-title a:hover,
		#comments .comment-author .fn,
		.mnky_counter_wrapper .count_data,
		.mnky-accordion.vc_tta-style-classic.vc_tta.vc_general .vc_tta-panel.vc_active .vc_tta-panel-title>a {
			color: #0b3b5b
		}

		.footer-sidebar .vc_col-sm-3:nth-child(1) {
			width: 20%
		}

		.footer-sidebar .vc_col-sm-3:nth-child(2) {
			width: 20%
		}

		.footer-sidebar .vc_col-sm-3:nth-child(3) {
			width: 20%
		}

		.footer-sidebar .vc_col-sm-3:nth-child(4) {
			width: 40%
		}

		.site-info {
			text-align: center
		}
	</style>
	<link rel='stylesheet' id='fancybox-css' href='https://ibleducation.com/wp-content/plugins/easy-fancybox/css/jquery.fancybox.1.3.23.min.css' type='text/css' media='screen' />
	<link rel='stylesheet' id='mailchimp-top-bar-css' href='https://ibleducation.com/wp-content/plugins/mailchimp-top-bar/assets/css/bar.min.css?ver=1.3.2' type='text/css' media='all' />
	<script type='text/javascript' src='https://ibleducation.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.6.4'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.6.4'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/video-popup/js/YouTubePopUp.jquery.js'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/video-popup/js/YouTubePopUp.js'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/wp-notification-bars/public/js/wp-notification-bars-public.js?ver=1.0.5'></script>
	<link rel='https://api.w.org/' href='https://ibleducation.com/wp-json/' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ibleducation.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://ibleducation.com/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 4.9.16" />
	<link rel="canonical" href="https://ibleducation.com/" />
	<link rel='shortlink' href='https://ibleducation.com/' />
	<link rel="alternate" type="application/json+oembed" href="https://ibleducation.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fibleducation.com%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://ibleducation.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fibleducation.com%2F&#038;format=xml" />
	<script type='text/javascript'>
		var video_popup_unprm_general_settings = {
			'unprm_r_border': ''
		};
	</script>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://ibleducation.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
	<meta name="generator" content="Powered by Slider Revolution 5.4.6.4 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
	<style type="text/css">
		.mctb-bar,
		.mctb-response,
		.mctb-close {
			background: #ffffff !important;
		}

		.mctb-bar,
		.mctb-label,
		.mctb-close {
			color: #717E9D !important;
		}

		.mctb-button {
			background: #ffffff !important;
			border-color: #ffffff !important;
		}

		.mctb-email:focus {
			outline-color: #ffffff !important;
		}

		.mctb-button {
			color: #3a99d9 !important;
		}
	</style>
	<link rel="icon" href="https://ibleducation.com/wp-content/uploads/2018/01/favicon.png" sizes="32x32" />
	<link rel="icon" href="https://ibleducation.com/wp-content/uploads/2018/01/favicon.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="https://ibleducation.com/wp-content/uploads/2018/01/favicon.png" />
	<meta name="msapplication-TileImage" content="https://ibleducation.com/wp-content/uploads/2018/01/favicon.png" />
	<script type="text/javascript">
		function setREVStartSize(e) {
			try {
				var i = jQuery(window).width(),
					t = 9999,
					r = 0,
					n = 0,
					l = 0,
					f = 0,
					s = 0,
					h = 0;
				if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
						f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
					}), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
					var u = (e.c.width(), jQuery(window).height());
					if (void 0 != e.fullScreenOffsetContainer) {
						var c = e.fullScreenOffsetContainer.split(",");
						if (c) jQuery.each(c, function(e, i) {
							u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
						}), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
					}
					f = u
				} else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
				e.c.closest(".rev_slider_wrapper").css({
					height: f
				})
			} catch (d) {
				console.log("Failure at Presize of Slider:" + d)
			}
		};
	</script>
	<style type="text/css" id="wp-custom-css">
		#mailchimp-top-bar>div>form>input.mctb-button:hover,
		#menu-item-1205>a:hover {
			background-color: #2891CE !important;
			border-color: #2891CE !important;
			color: #ffffff !important;
		}

		#mailchimp-top-bar>div>form>input.mctb-button,
		#menu-item-1205>a {
			background-color: #ffffff !important;
			border-color: #2891CE !important;
			color: #2891CE !important;
		}

		.primary-btn-cta>button:hover {
			background-color: #ffffff !important;
			border-color: #dcdcdc !important;
			color: #0b3b5b !important;
		}

		.secondary-btn-cta>button {
			background-color: #ffffff !important;
			border-color: #dcdcdc !important;
			color: #0b3b5b !important;
		}

		.secondary-btn-cta>button:hover {
			background-color: #0088cc !important;
			border-color: #0088cc !important;
			color: #ffffff !important;
		}

		#site-logo>a>img {
			width: 220px;
			margin-top: 30px;
		}

		#mobile-site-logo>a>img {
			width: 150px;
		}

		.meta-author-image {
			display: none;
		}

		.mc4wp-form-10490>.mc4wp-response>div>p {
			text-align: center;
			color: white;
			font-weight: 700;
		}

		.mc4wp-form-10490>.mc4wp-form-fields>input {
			font-size: 12px;
		}

		.mc4wp-form-10490>.mc4wp-form-fields>input[type="email"] {
			width: 400px;
		}

		#mailchimp-top-bar {
			display: none;
		}

		#mailchimp-top-bar>.mctb-bar>form>.mctb-label {
			font-size: 12px !important;
		}

		@media (max-width:510px) {
			.mc4wp-form-10490>.mc4wp-form-fields>input[type="email"] {
				width: 100% !important;
			}
		}

		div.vc_wp_search.wpb_content_element>div>div>form>input {
			text-align: center;
			display: block;
			margin: auto;
			width: 100%;
		}

		@media (min-width:700px) {
			div.vc_wp_search.wpb_content_element>div>div>form>input {
				width: 60%;
			}
		}

		@media (max-width:362px) {
			div.vc_wp_search.wpb_content_element>div>div>form>input {
				display: none;
			}
		}

		div.vc_gitem-zone.vc_gitem-zone-a.vc_custom_1419260513295.vc-gitem-zone-height-mode-auto.vc-gitem-zone-height-mode-auto-1-1.vc_gitem-is-link {
			background-color: #2D8DD6 !important;
		}
	</style>
	<style type="text/css" data-type="vc_custom-css">
		@media (max-width: 1200px) {
			.content-slider-custom-responsive {
				width: 90%;
				margin-left: 5%;
			}
		}
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1526605172500 {
			margin-top: -60px !important;
			background: #f6f7f8 url(https://ibleducation.com/wp-content/uploads/2018/05/analytics4.jpg?id=11250) !important;
		}

		.vc_custom_1526651329518 {
			padding-top: 60px !important;
			padding-bottom: 40px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1526579378942 {
			margin-top: -60px !important;
			background-color: #f6f7f8 !important;
		}

		.vc_custom_1526651388128 {
			margin-top: -60px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1526651444279 {
			padding-top: 60px !important;
			padding-bottom: 40px !important;
			background-color: #f6f7f8 !important;
		}

		.vc_custom_1515620970294 {
			padding-bottom: 40px !important;
			background-color: #f6f7f8 !important;
		}

		.vc_custom_1475064525186 {
			padding-top: 60px !important;
		}

		.vc_custom_1475746775118 {
			padding-top: 70px !important;
			padding-bottom: 30px !important;
			background-color: #f6f7f8 !important;
		}

		.vc_custom_1605555159960 {
			margin-right: 15% !important;
			margin-left: 15% !important;
		}

		.vc_custom_1526651359551 {
			background-color: #ffffff !important;
		}

		.vc_custom_1475665880928 {
			padding-left: 60px !important;
		}

		.vc_custom_1475669002616 {
			padding-top: 30px !important;
			padding-right: 30px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1475669004753 {
			padding-top: 30px !important;
			padding-right: 30px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1475669008064 {
			padding-top: 30px !important;
			padding-right: 30px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1475665880928 {
			padding-left: 60px !important;
		}

		.vc_custom_1475669002616 {
			padding-top: 30px !important;
			padding-right: 30px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1475669008064 {
			padding-top: 30px !important;
			padding-right: 30px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1475669004753 {
			padding-top: 30px !important;
			padding-right: 30px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			background-color: #ffffff !important;
		}

		.vc_custom_1516486373134 {
			padding-right: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1514936539486 {
			margin-left: 30px !important;
		}

		.vc_custom_1570918938544 {
			margin-left: 30px !important;
		}

		.vc_custom_1569454085580 {
			margin-left: 30px !important;
		}

		.vc_custom_1516486400900 {
			padding-right: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1514936553072 {
			margin-left: 30px !important;
		}

		.vc_custom_1570919078478 {
			margin-left: 30px !important;
		}

		.vc_custom_1516486407994 {
			padding-right: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1514936558534 {
			margin-left: 30px !important;
		}

		.vc_custom_1570919390671 {
			margin-left: 30px !important;
		}

		.vc_custom_1516486413199 {
			padding-right: 15% !important;
			padding-left: 15% !important;
		}

		.vc_custom_1514936563790 {
			margin-left: 30px !important;
		}

		.vc_custom_1570923147875 {
			margin-left: 30px !important;
		}

		.vc_custom_1475673987816 {
			padding-right: 60px !important;
		}
	</style><noscript>
		<style type="text/css">
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
	<!-- Pingdom Real User Monitoring -->
	<script>
		var _prum = [
			['id', '5a686d0e957ca9663c09ff41'],
			['mark', 'firstbyte', (new Date()).getTime()]
		];
		(function() {
			var s = document.getElementsByTagName('script')[0],
				p = document.createElement('script');
			p.async = 'async';
			p.src = '//rum-static.pingdom.net/prum.min.js';
			s.parentNode.insertBefore(p, s);
		})();
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86382811-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-86382811-1');
	</script>
</head>

<body class="home page-template page-template-page-no-paddings page-template-page-no-paddings-php page page-id-432 sticky-sidebar wpb-js-composer js-comp-ver-5.4.5 vc_responsive" id="site-body" itemscope itemtype="http://schema.org/WebPage">

	<div id="wrapper">

		<header id="mobile-site-header" class="mobile-header">
			<div id="mobile-site-logo">
				<a href="https://ibleducation.com/"><img src="https://ibleducation.com/wp-content/uploads/2018/01/IBLEducationlogo.png" alt="IBL Education" /></a> </div>



			<a href="#mobile-site-navigation" class="toggle-mobile-menu"><i class="fa fa-bars"></i></a>
		</header>



		<header id="site-header" class="header-style-default" itemscope itemtype="http://schema.org/WPHeader">
			<div id="header-wrapper">
				<div id="header-container" class="clearfix">
					<div id="site-logo">
						<a href="https://ibleducation.com/"><img src="https://ibleducation.com/wp-content/uploads/2018/01/IBLEducationlogo.png" alt="IBL Education" /></a> </div>

					<div id="site-navigation" class="" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<nav id="primary-navigation" class="menu-container">
							<ul id="menu-left" class="menu">
								<li id="menu-item-1676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1676"><a href="/clients">Testimonials</a></li>
								<li id="menu-item-1677" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1677"><a>About</a>
									<ul class="sub-menu">
										<li id="menu-item-12178" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12178"><a href="/about">About IBL</a></li>
										<li id="menu-item-12182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12182"><a href="https://ibleducation.com/nvidia/">NVIDIA Deep Learning Institute&#8217;s Case Study</a></li>
										<li id="menu-item-12181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12181"><a href="https://ibleducation.com/global-knowledge/">Global Knowledge&#8217;s Case Study</a></li>
										<li id="menu-item-12180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12180"><a href="https://ibleducation.com/the-george-washington-university/">The George Washington University&#8217;s Case Study</a></li>
										<li id="menu-item-12179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12179"><a href="https://ibleducation.com/modern-states/">Modern States Education&#8217;s Case Study</a></li>
										<li id="menu-item-16017" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16017"><a href="http://twitter.com/ibleducation">What&#8217;s Going On at IBL?</a></li>
									</ul>
								</li>
								<li id="menu-item-10448" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10448"><a>Open edX</a>
									<ul class="sub-menu">
										<li id="menu-item-10449" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10449"><a href="/category/blog-content/">News on Learning Innovation &#038; Open edX</a></li>
										<li id="menu-item-12330" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12330"><a href="http://ibleducation.com/category/views">Views &#038; Analysis</a></li>
										<li id="menu-item-10450" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10450"><a href="/open-edx">Commonly Asked Questions</a></li>
										<li id="menu-item-12380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12380"><a href="https://ibleducation.com/contributions-to-the-open-edx-community/">Contributions to the edX Community</a></li>
									</ul>
								</li>
							</ul>
						</nav>


						<div class="site-links menu-float-right">

							<button class="toggle-header-search search_button" type="button">
								<i class="fa fa-search"></i>
							</button>

						</div>

						<nav id="secondary-navigation" class="menu-container-2 menu-float-right">
							<ul id="menu-secondary-menu" class="menu">
								<li id="menu-item-1286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1286"><a>IBL Platform</a>
									<ul class="sub-menu">
										<li id="menu-item-1546" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1546"><a href="/platform">Deployment &#038; Maintenance</a></li>
										<li id="menu-item-1543" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1543"><a href="/analytics">Deep Analytics Pipeline</a></li>
										<li id="menu-item-1544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1544"><a href="/training">Training on Open edX™</a></li>
										<li id="menu-item-1548" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1548"><a href="/consulting">Consulting Services</a></li>
										<li id="menu-item-13379" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13379"><a href="https://ibleducation.com/learning-communities/">Learning Communities &#038; Academies</a></li>
										<li id="menu-item-18243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18243"><a href="https://ibleducation.com/custom-learning-platforms-with-credentials/">Custom Learning Platforms With Credentials</a></li>
										<li id="menu-item-17887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17887"><a href="https://ibleducation.com/ui-ux/">UI / UX</a></li>
									</ul>
								</li>
								<li id="menu-item-1285" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1285"><a>Instructional Design</a>
									<ul class="sub-menu">
										<li id="menu-item-1551" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1551"><a href="/content">Production Studios (NYC or Mobile Studio)</a></li>
										<li id="menu-item-12523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12523"><a href="https://ibleducation.com/courses-developed-by-our-studio/">Courses Developed at Our Studios</a></li>
										<li id="menu-item-1552" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1552"><a href="/instructional-design">Instructional Design Services</a></li>
										<li id="menu-item-14317" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14317"><a href="https://ibleducation.com/ibl-educations-courses-and-programs-for-business/">IBL Education for Business: Courses and Programs</a></li>
										<li id="menu-item-17967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17967"><a href="https://ibleducation.com/studio-solutions/">Studio Solutions</a></li>
									</ul>
								</li>
								<li id="menu-item-1205" class="menu-button-outline menu-item menu-item-type-custom menu-item-object-custom menu-item-1205"><a href="/contact-us">Contact</a></li>
							</ul>
						</nav>
					</div><!-- #site-navigation -->

					<div class="header-search">
						<div class="searchform-wrapper">
							<form method="get" class="searchform" action="https://ibleducation.com/">
								<input onfocus="this.value=''" onblur="this.value='Type and hit enter to search ...'" type="text" value="Search..." name="s" class="search-input" />
							</form>
						</div>
						<div class="toggle-header-search">
							<span></span>
							<span></span>
						</div>
					</div>

				</div><!-- #header-container -->
			</div><!-- #header-wrapper -->
		</header><!-- #site-header -->
		<div id="mobile-menu-bg"></div>
	</div><!-- #wrapper -->

	<nav id="mobile-site-navigation">
		<span class="mobile-menu-header"><span class="mobile-menu-heading">Menu</span><i class="fa fa-times toggle-mobile-menu"></i></span>
		<ul id="menu-simple-mobile" class="menu">
			<li id="menu-item-1633" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1633"><a href="/clients">Testimonials</a><span></span></li>
			<li id="menu-item-1634" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1634"><a>About</a><span></span>
				<ul class="sub-menu">
					<li id="menu-item-12183" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12183"><a href="/about">About IBL</a><span></span></li>
					<li id="menu-item-12170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12170"><a href="https://ibleducation.com/nvidia/">NVIDIA Deep Learning Institute&#8217;s Case Study</a><span></span></li>
					<li id="menu-item-12169" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12169"><a href="https://ibleducation.com/global-knowledge/">Global Knowledge&#8217;s Case Study</a><span></span></li>
					<li id="menu-item-12168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12168"><a href="https://ibleducation.com/the-george-washington-university/">The George Washington University&#8217;s Case Study</a><span></span></li>
					<li id="menu-item-12167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12167"><a href="https://ibleducation.com/modern-states/">Modern States Education Alliance&#8217;s Case Study</a><span></span></li>
					<li id="menu-item-16016" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16016"><a href="http://twitter.com/ibleducation">What&#8217;s Going On at IBL?</a><span></span></li>
				</ul>
			</li>
			<li id="menu-item-10384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10384"><a>Open edX</a><span></span>
				<ul class="sub-menu">
					<li id="menu-item-10385" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10385"><a href="/news">News on Learning Innovation &#038; Open edX</a><span></span></li>
					<li id="menu-item-12329" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12329"><a href="/category/views">Views &#038; Analysis</a><span></span></li>
					<li id="menu-item-10386" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10386"><a href="/open-edx">Commonly Asked Questions</a><span></span></li>
					<li id="menu-item-13381" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13381"><a href="https://ibleducation.com/contributions-to-the-open-edx-community/">Contributions to the edX Community</a><span></span></li>
				</ul>
			</li>
			<li id="menu-item-1625" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1625"><a>IBL Platform</a><span></span>
				<ul class="sub-menu">
					<li id="menu-item-1685" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1685"><a href="/platform">Deployment &#038; Maintenance</a><span></span></li>
					<li id="menu-item-1626" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1626"><a href="/analytics">Deep Analytics Pipeline</a><span></span></li>
					<li id="menu-item-10373" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10373"><a href="/training">Training on Open edX™</a><span></span></li>
					<li id="menu-item-1627" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1627"><a href="/consulting">Consulting Services</a><span></span></li>
					<li id="menu-item-18241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18241"><a href="https://ibleducation.com/custom-learning-platforms-with-credentials/">Custom Learning Platforms With Credentials</a><span></span></li>
					<li id="menu-item-17521" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17521"><a href="https://ibleducation.com/learning-communities/">Learning Communities &#038; Academies</a><span></span></li>
				</ul>
			</li>
			<li id="menu-item-1628" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1628"><a>Instructional Design</a><span></span>
				<ul class="sub-menu">
					<li id="menu-item-1629" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1629"><a href="/content">Production Studios (Remote, Mobile Studios or NYC)</a><span></span></li>
					<li id="menu-item-12524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12524"><a href="https://ibleducation.com/courses-developed-by-our-studio/">Courses Developed at Our Studios</a><span></span></li>
					<li id="menu-item-1630" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1630"><a href="/instructional-design">Instructional Design Services</a><span></span></li>
					<li id="menu-item-14318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14318"><a href="https://ibleducation.com/ibl-educations-courses-and-programs-for-business/">IBL Education for Business: Courses and Programs</a><span></span></li>
					<li id="menu-item-18045" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18045"><a href="https://ibleducation.com/studio-solutions/">Studio Solutions</a><span></span></li>
				</ul>
			</li>
			<li id="menu-item-1636" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1636"><a href="/contact-us">Contact Us</a><span></span></li>
		</ul>


	</nav><!-- #mobile-site-navigation -->

	<a href="#top" class="scrollToTop"><i class="fa fa-angle-up"></i></a>


	<!-- / WP SEO Structured Data Plugin. -->

	<div id="mailchimp-top-bar" class="mctb mctb-sticky mctb-position-top mctb-medium">
		<!-- MailChimp Top Bar v1.3.2 - https://wordpress.org/plugins/mailchimp-top-bar/ -->
		<div class="mctb-bar" style="display: none">
			<form method="post">
				<label class="mctb-label" for="mailchimp-top-bar__email">Request a free consultancy from our learning strategists. No strings attached.</label>
				<input type="email" name="email" placeholder="jane@firefly.com" class="mctb-email" required id="mailchimp-top-bar__email" />
				<input type="text" name="email_confirm" placeholder="Confirm your email" value="" autocomplete="off" tabindex="-1" class="mctb-email-confirm" />
				<input type="submit" value="Submit" class="mctb-button" />
				<input type="hidden" name="_mctb" value="1" />
				<input type="hidden" name="_mctb_no_js" value="1" />
				<input type="hidden" name="_mctb_timestamp" value="1606892565" />
			</form>
		</div>

		<!-- / MailChimp Top Bar -->
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.vp-on-pageload-wrap').load("?vp_on_pageload=t");
		});
	</script>


	<link rel='stylesheet' id='animate-css-css' href='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=5.4.5' type='text/css' media='all' />
	<link rel='stylesheet' id='prettyphoto-css' href='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=5.4.5' type='text/css' media='all' />
	<link rel='stylesheet' id='vc_pageable_owl-carousel-css-css' href='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.min.css?ver=5.4.5' type='text/css' media='all' />
	<link rel='stylesheet' id='vc_tta_style-css' href='https://ibleducation.com/wp-content/plugins/js_composer/assets/css/js_composer_tta.min.css?ver=5.4.5' type='text/css' media='all' />
	<link rel='stylesheet' id='vc_entypo-css' href='https://ibleducation.com/wp-content/plugins/js_composer/assets/css/lib/vc-entypo/vc_entypo.min.css?ver=5.4.5' type='text/css' media='all' />
	<script type='text/javascript'>
		/* <![CDATA[ */
		var wpcf7 = {
			"apiSettings": {
				"root": "https:\/\/ibleducation.com\/wp-json\/contact-form-7\/v1",
				"namespace": "contact-form-7\/v1"
			},
			"recaptcha": {
				"messages": {
					"empty": "Please verify that you are not a robot."
				}
			}
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/themes/fintech-wp/js/init.js?ver=4.9.16'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/themes/fintech-wp/js/sticky-header-smart.js?ver=4.9.16'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/themes/fintech-wp/js/theia-sticky-sidebar.js?ver=4.9.16'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/easy-fancybox/js/jquery.fancybox.1.3.23.min.js'></script>
	<script type='text/javascript'>
		var fb_timeout, fb_opts = {
			'overlayShow': true,
			'hideOnOverlayClick': true,
			'showCloseButton': true,
			'margin': 20,
			'centerOnScroll': false,
			'enableEscapeButton': true,
			'autoScale': true
		};
		if (typeof easy_fancybox_handler === 'undefined') {
			var easy_fancybox_handler = function() {
				jQuery('.nofancybox,a.wp-block-file__button,a.pin-it-button,a[href*="pinterest.com/pin/create"],a[href*="facebook.com/share"],a[href*="twitter.com/share"]').addClass('nolightbox');
				/* IMG */
				var fb_IMG_select = 'a[href*=".jpg"]:not(.nolightbox,li.nolightbox>a),area[href*=".jpg"]:not(.nolightbox),a[href*=".jpeg"]:not(.nolightbox,li.nolightbox>a),area[href*=".jpeg"]:not(.nolightbox),a[href*=".png"]:not(.nolightbox,li.nolightbox>a),area[href*=".png"]:not(.nolightbox),a[href*=".webp"]:not(.nolightbox,li.nolightbox>a),area[href*=".webp"]:not(.nolightbox)';
				jQuery(fb_IMG_select).addClass('fancybox image');
				var fb_IMG_sections = jQuery('.gallery,.wp-block-gallery,.tiled-gallery');
				fb_IMG_sections.each(function() {
					jQuery(this).find(fb_IMG_select).attr('rel', 'gallery-' + fb_IMG_sections.index(this));
				});
				jQuery('a.fancybox,area.fancybox,li.fancybox a').each(function() {
					jQuery(this).fancybox(jQuery.extend({}, fb_opts, {
						'transitionIn': 'elastic',
						'easingIn': 'easeOutBack',
						'transitionOut': 'elastic',
						'easingOut': 'easeInBack',
						'opacity': false,
						'hideOnContentClick': false,
						'titleShow': true,
						'titlePosition': 'over',
						'titleFromAlt': true,
						'showNavArrows': true,
						'enableKeyboardNav': true,
						'cyclic': false
					}))
				});
			};
			jQuery('a.fancybox-close').on('click', function(e) {
				e.preventDefault();
				jQuery.fancybox.close()
			});
		};
		var easy_fancybox_auto = function() {
			setTimeout(function() {
				jQuery('#fancybox-auto').trigger('click')
			}, 1000);
		};
		jQuery(easy_fancybox_handler);
		jQuery(document).on('post-load', easy_fancybox_handler);
		jQuery(easy_fancybox_auto);
	</script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/easy-fancybox/js/jquery.easing.1.4.1.min.js'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/easy-fancybox/js/jquery.mousewheel.3.1.13.min.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var mctb = {
			"cookieLength": "90",
			"icons": {
				"hide": "&#x25B2;",
				"show": "&#x25BC;"
			},
			"position": "top",
			"state": {
				"submitted": false,
				"success": false
			}
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/mailchimp-top-bar/assets/js/script.min.js?ver=1.3.2'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-includes/js/wp-embed.min.js?ver=4.9.16'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/bower/masonry/dist/masonry.pkgd.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/owl.carousel.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.min.js?ver=4.9.16'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/js/dist/vc_grid.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min.js?ver=5.4.5'></script>
	<script type='text/javascript' src='https://ibleducation.com/wp-content/plugins/js_composer/assets/lib/vc_tabs/vc-tabs.min.js?ver=5.4.5'></script>