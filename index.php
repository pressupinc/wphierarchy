<?php

require "includes/rss.php";

?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?= _('The WordPress Template Hierarchy - a visualization resource'); ?>
	</title>
	<meta name="description" content="<?= _('The WordPress Template Hierarchy'); ?>" />
	<meta name="keywords" content="wordpress, hierarchy" />
	<meta name="author" content="Rami Abraham" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="app.min.css">
	<script src="assets/js/vendor.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/app.min.js" type="text/javascript" charset="utf-8" defer></script>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,900" rel="stylesheet">
</head>
<body>
	<header>
		<button><?= _( 'Menu'); ?></button>
		<nav aria-expanded="">
			<legend>
				<h3><?= _('WP Hierarchy'); ?></h3>
				<hr />
				<p>
					<?= _( 'is current up to:'); ?>
				</p>
				<a href="<?= $wp_version; ?>" class="version"></a>
			</legend>
			<div class="meta">
				<div class="updates" aria-relevant="text">
				<h4><?= _( 'Latest update:'); ?></h4>
				<hr />
				<p>
					<?= '<ul>' . get_latest_updates() . '</ul>'; ?>
				</p>
				</div>
				<div class="credits" aria-relevant="text">
				<h4><?= _( 'Credits:'); ?></h4>
				<hr />
				<p>
					<span><?= _( 'Design'); ?></span> <a class="ref" href="http://marktimemedia.com/">Michelle Schulp</a>,
					<span><?= _( 'Code:'); ?></span> <a class="ref" href="https://ramiabraham.com">Rami Abraham</a>,
					<span><?= _( 'Icons:'); ?></span> <a class="ref" href="https://developer.wordpress.org/resource/dashicons/#admin-collapse">Dashicons</a> by <a class="ref" href="https://choycedesign.com/">Mel Choyce</a>,
					<span><?= _( 'Japanese translation'); ?>:</span> <a class="ref" href="http://unofficialtokyo.com/">Akira Tachibana</a>, &hearts; and <a class="ref" href="https://github.com/ramiabraham/wphierarchy/graphs/contributors">contributors</a>.
				</p>
				</div>
			</div>
			<a class="primary" href="https://github.com/ramiabraham/wphierarchy">Github</a>
			<a class="primary" href="https://github.com/ramiabraham/wphierarchy/issues/new"><?= _( 'Report an Issue'); ?></a>
			<a class="primary" href="https://developer.wordpress.org/themes/basics/template-hierarchy/"><?= _( 'More on WordPress.org'); ?></a>
			<a class="extras" href="#"><?= _( 'Extras'); ?></a>
		</nav>
	  <h1><?= _( 'Visualize the WordPress Template Hierarchy' ); ?></h1>
	  <h2>with &hearts; from <a href="https://wpshout.com">WPShout</a></h2>
	</header>
	<main class="wph-svg">
	<section class="wph-col wph-col--12-of-12">
	<div class="items"></div>
		<svg id="light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2456.15 1300" xml:space="preserve">
		  <defs>
			<style>
			  .cls-1 {
				fill: none;
				stroke: #c8c7c7;
				stroke-miterlimit: 10;
				stroke-width: 1.47px;
			  }

			  .cls-2 {
				fill: #474443;
			  }

			  .cls-3 {
				fill: #00759c;
			  }

			  .cls-4 {
				fill: #df4c27;
			  }

			  .cls-5 {
				fill: #66acc3;
			  }

			  .cls-6 {
				fill: #c8c7c7;
			  }

			  .cls-7 {
				fill: #d1d0d0;
			  }

			  .svgl {
				color: white;
				text-decoration: none;
				text-align: center;
				text-indent: 0;
				word-break: break-word;
				display: inline-block;
				padding-top: .5rem;
				vertical-align: middle;
				vertical-align: -webkit-baseline-middle;
			  }
			  .svgl:hover,
			  .svgl:focus {
				background: gray;
			  }

			  g:nth-child(62) > foreignobject > a,
			  g:nth-child(63) > foreignobject > a,
			  g:nth-child(65) > foreignobject > a,
			  g:nth-child(66) > foreignobject > a {
			  	margin-top: -25px;
			  }

			  g:nth-child(54) > foreignobject > a {
			  	margin-left: -25px;
			  }
			</style>
		  </defs>
		<rect class="tracer" fill="#ff0000" width="8" height="8" x="-8" y="-8"/>
		<path class="cls-1" d="M2267.51,879.26H2288c11.06,0,20-6.81,20-15.2V697.9c0-8.4,9-15.2,20-15.2" transform="translate(-220.95 -157.9)"/>
		<line class="cls-1" x1="116.8" y1="26.71" x2="2343.81" y2="26.71"/>
		<line class="cls-1" x1="116.8" y1="523.24" x2="1950.87" y2="523.24"/>
		<line class="cls-1" x1="215.82" y1="718.67" x2="1928.44" y2="718.67"/>
		<line class="cls-1" x1="1905.08" y1="848.07" x2="1922.29" y2="848.07"/>
		<line class="cls-1" x1="127.47" y1="1106.06" x2="1933.5" y2="1106.06"/>
		<line class="cls-1" x1="127.47" y1="1227.75" x2="1933.5" y2="1227.75"/>
		<line class="cls-1" x1="724.7" y1="93.87" x2="1627.15" y2="93.87"/>
		<line class="cls-1" x1="724.7" y1="161.13" x2="1627.15" y2="161.13"/>
		<line class="cls-1" x1="724.7" y1="228.01" x2="1627.15" y2="228.01"/>
		<line class="cls-1" x1="724.7" y1="284.2" x2="1627.15" y2="284.2"/>
		<line class="cls-1" x1="996.04" y1="766.66" x2="1651.01" y2="766.66"/>
		<line class="cls-1" x1="669.85" y1="591" x2="1672.65" y2="591"/>
		<line class="cls-1" x1="669.85" y1="658.26" x2="1672.65" y2="658.26"/>
		<line class="cls-1" x1="713.56" y1="422.52" x2="1703.94" y2="422.52"/>
		<path class="cls-1" d="M709.79,251.77H402c-11.06,0-20-6.81-20-15.2v-36.9c0-8.39-9-15.2-20-15.2" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M430.62,878.32H402c-11.06,0-20-6.8-20-15.2V696.38c0-8.4-9-15.2-20-15.2" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M709.55,1052.57H690.48c-11.07,0-20-6.81-20-15.2v-10.22c0-8.4-9-21.42-20-21.42" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M709.55,748.49H690.48c-11.07,0-20-6.81-20-15.2V696.49c0-8.4-9-15.2-20-15.2" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M709.55,819.43H690.48c-11.07,0-20-6.81-20-15.2V722.29" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M1005,924.57H993.64c-11.06,0-20-6.8-20-15.2V894.89c0-8.4-9-18.32-20-18.32" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M1005,484.08H993.64c-11.06,0-20-6.81-20-15.2V457.51c0-8.4-9-15.2-20-15.2" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M1005,523.3H993.64c-11.06,0-20-6.81-20-15.2v-44.9" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M1229,484.08h11.35c11.06,0,20-6.81,20-15.2V457.51c0-8.4,9-15.2,20-15.2" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M1229,523.3h11.35c11.06,0,20-6.81,20-15.2v-44.9" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M1434.09,924.57h-11.35c-11.06,0-20-6.8-20-15.2V894.89" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M787.2,991.77h11.34c11.06,0,20-6.81,20-15.2V937.75" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2065.47,924.57H2086c11.06,0,20-6.8,20-15.2V894.89c0-8.4,9-18.32,20-18.32" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2065.47,748.28H2086c11.06,0,20-6.81,20-15.2v-36.9c0-8.4,9-15.2,20-15.2" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2065.47,816.49H2086c11.06,0,20-6.81,20-15.2V724" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2065.47,251.8H2086c11.06,0,20-6.81,20-15.2v-36.9c0-8.39,9-15.2,20-15.2" transform="translate(-220.95 -157.9)"/>
		<!-- The following path was for paged.php in the top, it now is extended to merge with singular.php (This was easier than redrawing the top part of the curve as a raw-editing SVG n00b -->
		<path class="cls-1" d="M2427.3,682.85h60.28c11.06,0,20-6.81,20-15.2V199.69c0-8.39,9-15.2,20-15.2" transform="translate(-220.95 -157.9)"/>

		<path class="cls-1" d="M2065.47,320H2086c11.06,0,20-6.81,20-15.2V227.48" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2276.31,682.85H2488c11.07,0,20-6.81,20-15.2V227.48" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2276.31,1007.47H2488c11.07,0,20-6.81,20-15.21V522.63" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2276.31,1262.08H2488c11.07,0,20-6.81,20-15.21V732.6" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2276.31,1385.83H2488c11.07,0,20-6.81,20-15.21V820.34" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2065.47,389H2086c11.06,0,20-6.81,20-15.21V296.42" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2065.47,445.12H2086c11.06,0,20-6.81,20-15.21V352.59" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M2065.47,581.91H2086c11.06,0,20-6.81,20-15.2V412.9" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M346.53,1143.56H2092.11c4.91,0,13.88-6.8,13.88-15.2v-104.1c0-8.39,9-18.31,20-18.31" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M940.66,1051.62H2092.11c4.91,0,13.88-6.8,13.88-15.2" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M709.79,319H402c-11.06,0-20-6.81-20-15.2V232.58" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M709.79,385.91H402c-11.06,0-20-6.81-20-15.2V299.46" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M709.79,581H402c-11.06,0-20-6.81-20-15.2V412.55" transform="translate(-220.95 -157.9)"/>
		<path class="cls-1" d="M709.79,445.79H402c-11.06,0-20-6.8-20-15.2V359.69" transform="translate(-220.95 -157.9)"/>
		<line class="cls-1" x1="127.47" y1="847.99" x2="488.61" y2="847.99"/>
		<g data-position="c1r1">
		  <rect class="rect cls-2 c1r1" x="0.89" y="1.06" width="127.47" height="447.97" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c1r2">
		  <rect class="rect cls-2 c1r2" y="497.13" width="127.47" height="286.23" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c1r3">
		  <rect class="rect cls-2 c1r3" x="0.89" y="830.1" width="127.47" height="82.67" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c1r4">
		  <rect class="rect cls-2 c1r4" x="0.89" y="957.97" width="127.47" height="76.43" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c1r5">
		  <rect class="rect cls-2 c1r5" x="0.89" y="1079.45" width="127.47" height="74.32" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c1r6">
		  <rect class="rect cls-2 c1r6" x="0.89" y="1200.12" width="127.47" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c8r1">
		  <rect class="rect cls-3 c8r1" x="1923.62" y="1.06" width="141.49" height="447.97" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<!-- index.php -->
		<g data-position="c10">
		  <rect class="rect cls-3 c10 index" x="2317.46" y="1.06" width="138.69" height="1280" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r1">
		  <rect class="rect cls-2 c3r1" x="485.24" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r1">
		  <rect class="rect cls-4 c4r1" x="779.63" width="233.17" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r8">
		  <rect class="rect cls-4 c4r8" x="777.81" y="497.13" width="233.17" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c5r1">
		  <rect class="rect cls-4 c5r1" x="1066.87" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r1">
		  <rect class="rect cls-5 c7r1" x="1625.33" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r6">
		  <rect class="rect cls-5 c7r6" x="1625.33" y="395.91" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c5r5">
		  <rect class="rect cls-4 c5r5" x="1065.96" y="497.13" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c6r1">
		  <rect class="rect cls-4 c6r1" x="1344.24" y="497.13" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r7">
		  <rect class="rect cls-5 c7r7" x="1625.33" y="497.13" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r8">
		  <rect class="rect cls-4 c7r8" x="1625.33" y="564.4" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r9">
		  <rect class="rect cls-5 c7r9" x="1625.33" y="631.66" width="227.01" height="50.25" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r2">
		  <rect class="rect cls-4 c4r2" x="779.63" y="67.26" width="233.17" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c5r2">
		  <rect class="rect cls-4 c5r2" x="1066.87" y="67.26" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r3">
		  <rect class="rect cls-4 c4r3" x="779.63" y="201.4" width="233.17" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c5r3">
		  <rect class="rect cls-4 c5r3" x="1066.87" y="201.4" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r2">
		  <rect class="rect cls-5 c7r2" x="1625.33" y="67.26" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r3">
		  <rect class="rect cls-4 c7r3" x="1625.33" y="134.53" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r7">
		  <rect class="rect cls-4 c4r7" x="779.63" y="395.9" width="233.17" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c5r4">
		  <rect class="rect cls-4 c5r4" x="1066.87" y="395.9" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r4">
		  <rect class="rect cls-5 c7r4" x="1625.33" y="201.79" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r5">
		  <rect class="rect cls-5 c7r5" x="1625.33" y="269.06" width="227.01" height="108.69" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r2">
		  <rect class="rect cls-2 c3r2" x="485.24" y="67.26" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r3">
		  <rect class="rect cls-2 c3r3" x="485.24" y="134.53" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r4">
		  <rect class="rect cls-2 c3r4" x="485.24" y="201.79" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r4">
		  <rect class="rect cls-2 c4r4" x="777.84" y="269.06" width="233.17" height="30.28" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r5">
		  <rect class="rect cls-2 c4r5" x="777.84" y="309.98" width="233.17" height="30.28" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r11">
		  <rect class="rect cls-2 c3r11" x="485.27" y="832.68" width="239.42" height="36.5" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r12">
		  <rect class="rect cls-2 c3r12" x="485.27" y="876.96" width="239.42" height="36.5" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r6">
		  <rect class="rect cls-2 c4r6" x="777.84" y="349.59" width="233.17" height="30.28" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r5">
		  <rect class="rect cls-2 c3r5" x="485.24" y="269.06" width="239.42" height="112.79" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r6">
		  <rect class="rect cls-2 c3r6" x="485.24" y="395.9" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r7">
		  <rect class="rect cls-2 c3r7" x="485.24" y="497.13" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r8">
		  <rect class="rect cls-2 c3r8" x="485.24" y="564.39" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c2r1">
		  <rect class="rect cls-2 c2r1" x="197.63" y="497.21" width="218.74" height="187.65" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c2r3">
		  <rect class="rect cls-5 c2r3" x="197.63" y="830.1" width="218.74" height="82.67" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r9">
		  <rect class="rect cls-2 c4r9" x="777.82" y="700.41" width="233.16" height="36.51" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c4r10">
		  <rect class="rect cls-2 c4r10" x="777.82" y="747.56" width="233.16" height="36.5" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c5r6">
		  <rect class="rect cls-4 c5r6" x="1065.96" y="700.41" width="227.01" height="36.51" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c6r3">
		  <rect class="rect cls-4 c6r3" x="1344.26" y="747.56" width="227.01" height="36.5" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c7r10">
		  <rect class="rect cls-4 c7r10" x="1625.33" y="747.56" width="227.01" height="36.5" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c2r2">
		  <rect class="rect cls-2 c2r2" x="197.63" y="700.69" width="218.74" height="82.67" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r9">
		  <rect class="rect cls-2 c3r9" x="485.24" y="631.66" width="239.42" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c3r10">
		  <rect class="rect cls-2 c3r10" x="485.27" y="700.69" width="239.42" height="82.67" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c8r2">
		  <rect class="rect cls-3 c8r2" x="1923.62" y="497.13" width="141.49" height="187.74" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c8r3">
		  <rect class="rect cls-3 c8r3" x="1923.62" y="700.41" width="141.49" height="84.54" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c8r4">
		  <rect class="rect cls-3 c8r4" x="1923.64" y="830.08" width="141.49" height="204.04" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c8r5">
		  <rect class="rect cls-3 c8r5" x="1923.64" y="1079.45" width="141.5" height="74.32" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c8r6">
		  <rect class="rect cls-3 c8r6" x="1923.64" y="1200.12" width="141.49" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c6r2">
		  <rect class="rect cls-4 c6r2" x="1344.33" y="564.4" width="227.01" height="53.21" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<g data-position="c9r3">
		  <rect class="rect cls-3 c9r3" x="2114.73" y="497.13" width="141.49" height="286.93" rx="1.95" ry="1.95"></rect>
		  <foreignObject width="100" height="30" x="25" y="25"><a class="svgl" href=""></a></foreignObject>
		</g>
		<path class="cls-6" d="M712,184.46a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1006.51,184.46a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1006.51,385.91a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1006.51,580.9a5.81,5.81,0,0,1-5.78,5.85h0A5.81,5.81,0,0,1,995,580.9h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1006.51,442.1a5.81,5.81,0,0,1-5.78,5.85h0A5.81,5.81,0,0,1,995,442.1h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1006.51,483a5.81,5.81,0,0,1-5.78,5.85h0A5.81,5.81,0,0,1,995,483h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1006.51,522.63a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1006.51,251.77a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1293.48,184.46a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-7" d="M1293.48,385.91a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1293.48,580.9a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1293.48,251.77a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,251.77a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,319a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.84h0A5.81,5.81,0,0,1,712,319h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,386.3a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0A5.81,5.81,0,0,1,712,386.3h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,445.79a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,580.4a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0A5.81,5.81,0,0,1,712,580.4h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,681.14a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1004.82,681.14A5.81,5.81,0,0,1,999,687h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1292.8,681.14A5.81,5.81,0,0,1,1287,687h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1571,681.14a5.82,5.82,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,681.14a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,748.9a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,816.49a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,924.57a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.77-5.84h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1571,923.71a5.81,5.81,0,0,1-5.78,5.84h0a5.8,5.8,0,0,1-5.77-5.84h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1292.8,876.57a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1004.82,876.56a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M824.36,941.25a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1004.82,923.71a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,748.49a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,819.43a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,876.56a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,1005.89a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M712,1052.57a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M424.35,1005.89a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2150.37,1263.57a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2150.37,1006a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2150.37,876.57a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2150.37,681.14a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2150.37,185a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,185a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,251.8a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,319.77a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,385.91a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,442.1a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1852.06,581.15a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2544.19,185a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2150.37,1385.83a5.81,5.81,0,0,1-5.78,5.84h0a5.81,5.81,0,0,1-5.78-5.84h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M424.35,681.51a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M424.35,878.32a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M2341.48,682.85a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.78-5.85h0a5.81,5.81,0,0,1,5.78-5.85h0a5.81,5.81,0,0,1,5.78,5.85h0Z" transform="translate(-220.95 -157.9)"/>
		<path class="cls-6" d="M1571.06,748.9a5.81,5.81,0,0,1-5.78,5.85h0a5.81,5.81,0,0,1-5.77-5.85h0a5.81,5.81,0,0,1,5.77-5.84h0a5.81,5.81,0,0,1,5.78,5.84h0Z" transform="translate(-220.95 -157.9)"/>
		</svg>
  	</section>
  	<aside class="wph-col wph-col--12-of-12 info">
		<ul>
			<li>
				<ul>
					<li>Design: Michelle Schulp</li>
					<li>Icons: Dashicons by Mel Choyce</li>
					<li>Code: Rami Abraham</li>
					<li>Japanese translation: Akira Tachibana</li>
			</li>
			<li>
				Latest updates:

				<?= get_latest_updates(); ?>
			</li>
			<li>
				<a href="https://twitter.com/share" class="twitter-share-button" data-text="the WordPress Template Hierarchy, by @marktimemedia @ramiabraham" data-size="large" data-dnt="true">Tweet</a>
				<script>
				! function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0],
						p = /^http:/.test(d.location) ? 'http' : 'https';
					if (!d.getElementById(id)) {
						js = d.createElement(s);
						js.id = id;
						js.src = p + '://platform.twitter.com/widgets.js';
						fjs.parentNode.insertBefore(js, fjs);
					}
				}(document, 'script', 'twitter-wjs');
				</script>
			</li>
		</ul>
  	</aside>
		<section class="embeds">
			<div class="wph-col wph-col--1-of-12"></div>
			<div class="wph-col wph-col--1-of-12 embeds-since">
			  <?= _( 'New in'); ?> <i>4.5</i>
			</div>
			<a href="" class="wph-col wph-col--1-of-12" data-tip="" data-position="embed1"></a>
			<a href="" class="wph-col wph-col--1-of-12" data-tip="" data-position="embed2"></a>
			<a href="" class="wph-col wph-col--1-of-12" data-tip="" data-position="embed3"></a>
			<a href="" class="wph-col wph-col--1-of-12" data-tip="" data-position="embed4"></a>
		</section>
    </main>
	<footer>
		<fieldset>
			<legend class="primary"><?= _( 'Primary Template'); ?></legend>
			<legend class="secondary"><?= _( 'Secondary Template'); ?></legend>
			<legend class="variable"><?= _( 'Variable Template'); ?></legend>
			<legend class="page"><?= _( 'Page Type'); ?></legend>
		</fieldset>
	</footer>
</body>

</html>
