<?php

$pageTitle = 'Lesson 1';
 
require_once('includes/header.php');

?>

<h1>μάθημα α' <small>Lesson 1</small></h1>

<h2>Audio</h2>
<div class="audio-container">
	<audio controls="controls" id="greek-audio">
		Your browser does not support the <code>audio</code> element.
		<source src="audio/αριθμοι 0-10.mp3" type="audio/mp3">
	</audio>
</div>
<div id="greek-text" class="row">

	<div id="w1" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">0</div></div>
		<div class="row"><div class="col-xs-12">οὐδέν</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">oo-then'</div></div>
	</div>
	<div id="w2" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">1</div></div>
		<div class="row"><div class="col-xs-12">ἕν</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">en</div></div>
	</div>
	<div id="w3" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">2</div></div>
		<div class="row"><div class="col-xs-12">δύο</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">theew'-oh</div></div>
	</div>
	<div id="w4" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">3</div></div>
		<div class="row"><div class="col-xs-12">τρία</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">tree'-ah</div></div>
	</div>
	<div id="w5" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">4</div></div>
		<div class="row"><div class="col-xs-12">τέσσαρα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">tes'-sah-rah</div></div>
	</div>
	<div id="w6" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">5</div></div>
		<div class="row"><div class="col-xs-12">πέντε</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">pen'-deh</div></div>
	</div>
	<div id="w7" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">6</div></div>
		<div class="row"><div class="col-xs-12">ἕξ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ex</div></div>
	</div>
	<div id="w8" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">7</div></div>
		<div class="row"><div class="col-xs-12">ἑπτά</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ehp-tah'</div></div>
	</div>
	<div id="w9" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">8</div></div>
		<div class="row"><div class="col-xs-12">ὀκτώ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ohk-toh'</div></div>
	</div>
	<div id="w10" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">9</div></div>
		<div class="row"><div class="col-xs-12">ἐννέα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ehn-neh'-ah</div></div>
	</div>
	<div id="w11" class="word col-xs-4 col-lg-1">
		<div class="row"><div class="col-xs-12">10</div></div>
		<div class="row"><div class="col-xs-12">δέκα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">theh'-kah</div></div>
	</div>
</div>

<h2>Slides</h2>
<div class="embed-responsive embed-responsive-4by3">
	<iframe src="https://docs.google.com/presentation/d/1omAyMUzxjxE6oc4VrJrmVowwImL6pr62UBiGJt4NTL8/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/popcorn-complete.min.js"></script>

<script>
	document.addEventListener( "DOMContentLoaded", function() {
		var pop = Popcorn("#greek-audio");

		var wordTimes = {
			"w1": { start: 0.1, end: 1.7 },
			"w2": { start: 1.7, end: 3.2 },
			"w3": { start: 3.2, end: 4.5 },
			"w4": { start: 4.5, end: 5.8 },
			"w5": { start: 5.8, end: 7.0 },
			"w6": { start: 7.0, end: 8.5 },
			"w7": { start: 8.5, end: 9.6 },
			"w8": { start: 9.6, end: 10.9 },
			"w9": { start: 10.9, end: 12.4 },
			"w10": { start: 12.4, end: 13.6 },
			"w11": { start: 13.6, end: 14.8 }
		};

		$.each(wordTimes, function(id, time) {
			pop.footnote({
				start: time.start,
				end: time.end,
				text: '',
				target: id,
				effect: "applyclass",
				applyclass: "selected"
			});
		});

		$('.word').click(function() {
			var $audio = $('#greek-audio');
			$audio[0].currentTime = wordTimes[$(this).attr('id')].start + 0.1;
			console.log($audio[0].currentTime);
		});
	}, false);
</script>
        
<?php require_once('includes/footer.php') ?>
