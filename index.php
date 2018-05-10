<!--♡<?
	require 'utils.php';

	date_default_timezone_set('Europe/Paris');
	$release_time = '17:00:00';
	$today = date("Y-m-d H:i:s");
	$current = $_GET['id'] ? $_GET['id'] : null;

	$strips = read_tsv_file('data.tsv');
		$strips = array_map(function ($strip) {
			$strip[date] = $strip[date] . ' ' . $GLOBALS[release_time];
			return $strip;
		}, $strips);
		$strips = array_filter($strips, function ($strip) {
			return $GLOBALS[today]>$strip[date];
		});

		var_dump($strips);
?>-->

<meta charset="utf-8">
<title>Senseless strips</title>
<meta name="language" content="en">
<link href="/style.css" rel="stylesheet">
<script src="/script.js" charset="utf-8"></script>
<body>
	<header>
		<h1>Senseless Strips</h1>
	</header>

	<nav>
		<ul>
			<li data-link="home"><a href="#">home</a></li>
			<li data-link="archive"><a href="#">archive</a></li>
			<li data-link="about"><a href="#">about</a></li>
			<li class="squiggle"><a href="#" target="_blank"><? readfile('./res/facebook.svg'); ?></a></li>
			<li class="squiggle"><a href="https://www.instagram.com/senseless_strips/" target="_blank"><? readfile('./res/instagram.svg'); ?></a></li>
			<li class="squiggle"><a href="#" target="_blank"><? readfile('./res/rss.svg'); ?></a></li>
		</ul>
	</nav>

	<main>
		<nav><a href="#"><<</a></nav>
		<nav><a href="#">>></a></nav>
		<article>
			<img src="<? echo './comics/' . ($strips[is_null($current) ? count($strips)-1 : $current][file]); ?>" alt="">
		</article>
	</main>

	<footer>
		<h2>Art by </h2>
		<h2><a href="#">Nate Falcon</a></h2>
		<h2>Script by </h2>
		<h2><a href="#">Flo Pellet</a></h2>
	</footer>

	<? readfile('./res/filter.svg'); ?>
</body>
