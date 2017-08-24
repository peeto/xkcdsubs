<?php

require_once('PageTranslator.php');

class Subs extends PageTranslator
{

	protected function getDictionary()
	{
		return array(
			'witnesses' => 'these dudes I know',
			'allegedly' => 'kinda probably',
			'new study' => 'Tumblr post',
			'rebuild' => 'avenge',
			'space' => 'spaaace',
			'google glass' => 'VirtualBoy',
			'smartphone' => 'Pokedex',
			'electric' => 'atomic',
			'senator' => 'Elf-lord',
			'car' => 'cat',
			'election' => 'eating contest',
			'congressional leaders' => 'river spirits',
			'homeland security' => 'homestar runner',
			'could not be reached for comment' => 'is guilty and everyone knows it',
			'debate' => 'dance off',
			'self driving' => 'uncontrollably swerving',
			'poll' => 'psychic reading',
			'candidate' => 'airbender',
			'drone' => 'dog',
			'vows to' => "probably won't",
			'at large' => 'very large',
			'successfully' => 'suddenly',
			'expands' => 'physically expands',
			'first-degree' => "friggin' awful",
			'second-degree' => "friggin' awful",
			'third-degree' => "friggin' awful",
			'an unknown number' => 'like hundreds',
			'front runner' => 'blade runner',
			'global' => 'spherical',
			'years' => 'minutes',
			'minutes' => 'years',
			'no indication' => 'lots of signs',
			'urged restraint by' => 'drunkenly egged on',
			'horsepower' => 'tons of horse meat'
		);
	}

	protected function displayHome()
	{
?>
<html>
<head>
<title>xkcd Substitutions</title>
<link rel="shortcut icon" href="http://xkcdsubs.peeto.net/favicon.ico" />
<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
<h1>xkcd Substitutions</h1>
<p>Enter a URL of a web page:</p>
<form method="post" action="http://xkcdsubs.peeto.net/">
<input type="text" name="<?php echo self::INPUTFIELDNAME; ?>" /> <input type="submit" value="Fun" />
</form>
<br />
<a href="https://twitter.com/share" class="twitter-share-button" data-via="chrispetersen">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<br />
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="small"></div>
<br />
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
</body>
</html>
<?php
	}

}

