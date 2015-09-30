<?php

$pageTitle = 'Lesson 2';
 
require_once('includes/header.php');

?>

<h1>μάθημα β' <small>Lesson 2</small></h1>
            
<h2>Audio</h2>
<div class="audio-container">
    <audio controls="controls" id="greek-audio">
        Your browser does not support the <code>audio</code> element.
        <source src="audio/αλφαβητος.mp3" type="audio/mp3">
    </audio>        
</div>
            
<div id="greek-text" class="row">
	<div class="col-xs-12">
		<button type="button" class="btn btn-default" id="vowel-highlight">Mark/unmark vowels</button>
	</div>
	<div id="w1" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">α Α</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ah</div></div>
		<div class="row"><div class="col-xs-12">ἄλφα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ahl-fah</div></div>
	</div>
	<div id="w2" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">β Β</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">v</div></div>
		<div class="row"><div class="col-xs-12">βῆτα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">vay-tah</div></div>
	</div>
	<div id="w3" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">γ Γ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">g (between g and y)</div></div>
		<div class="row"><div class="col-xs-12">γάμμα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">gahm-mah</div></div>
	</div>
	<div class="clearfix visible-xs"></div>
	<div id="w4" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">δ Δ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">th (as in <strong>th</strong>em)</div></div>
		<div class="row"><div class="col-xs-12">δέλτα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">thel'-tah</div></div>
	</div>
	<div id="w5" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ε Ε</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">eh</div></div>
		<div class="row"><div class="col-xs-12">ἒ ψιλόν</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">eh' psee-lohn</div></div>
	</div>
	<div id="w6" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ζ Ζ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">z</div></div>
		<div class="row"><div class="col-xs-12">ζῆτα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">zay'-tah</div></div>
	</div>
	<div class="clearfix visible-xs"></div>
	<div id="w7" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">η Η</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ay</div></div>
		<div class="row"><div class="col-xs-12">ἦτα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ay'-tah</div></div>
	</div>
	<div id="w8" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">θ Θ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">th (as in <strong>th</strong>ink)</div></div>
		<div class="row"><div class="col-xs-12">θῆτα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">thay'-tah</div></div>
	</div>
	<div id="w9" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ι Ι</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ee</div></div>
		<div class="row"><div class="col-xs-12">ἰῶτα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ee-oh'-tah</div></div>
	</div>
	<div class="clearfix visible-xs"></div>
	<div id="w10" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">κ Κ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">k</div></div>
		<div class="row"><div class="col-xs-12">κάππα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">kahp'-pah</div></div>
	</div>
	<div id="w11" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">λ Λ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">l</div></div>
		<div class="row"><div class="col-xs-12">λάμβδα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">lahmv-thah</div></div>
	</div>
	<div id="w12" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">μ Μ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">m</div></div>
		<div class="row"><div class="col-xs-12">μῦ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">meew</div></div>
	</div>
	<div class="clearfix visible-xs"></div>
	<div id="w13" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ν Ν</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">n</div></div>
		<div class="row"><div class="col-xs-12">νῦ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">neew</div></div>
	</div>
	<div id="w14" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ξ Ξ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ks</div></div>
		<div class="row"><div class="col-xs-12">ξεῖ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ksee</div></div>
	</div>
	<div id="w15" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ο Ο</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">oh</div></div>
		<div class="row"><div class="col-xs-12">ὂ μικρόν</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">oh' meek-rohn</div></div>
	</div>
	<div class="clearfix visible-xs"></div>
	<div id="w16" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">π Π</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">p</div></div>
		<div class="row"><div class="col-xs-12">πεῖ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">pee</div></div>
	</div>
	<div id="w17" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ρ Ρ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">r</div></div>
		<div class="row"><div class="col-xs-12">ῥῶ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">roh</div></div>
	</div>
	<div id="w18" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">σ Σ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">s</div></div>
		<div class="row"><div class="col-xs-12">σίγμα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">seeg-mah</div></div>
	</div>
	<div class="clearfix visible-xs"></div>
	<div id="w19" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">τ Τ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">t</div></div>
		<div class="row"><div class="col-xs-12">ταῦ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">tahv</div></div>
	</div>
	<div id="w20" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">υ Υ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">eew</div></div>
		<div class="row"><div class="col-xs-12">υ ψιλόν</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">eew' psee-lohn</div></div>
	</div>
	<div id="w21" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">φ Φ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">f</div></div>
		<div class="row"><div class="col-xs-12">φεῖ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">fee</div></div>
	</div>
	<div class="clearfix visible-xs"></div>
	<div id="w22" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">χ Χ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">kh</div></div>
		<div class="row"><div class="col-xs-12">χεῖ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">khee</div></div>
	</div>
	<div id="w23" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ψ Ψ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ps</div></div>
		<div class="row"><div class="col-xs-12">ψεῖ</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">psee</div></div>
	</div>
	<div id="w24" class="word col-xs-4 col-lg-2">
		<div class="row"><div class="col-xs-12">ω Ω</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">oh</div></div>
		<div class="row"><div class="col-xs-12">ω μέγα</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">oh meh'-gah</div></div>
	</div>

	<div class="audio-container">
		<audio controls="controls" id="greek-audio2">
			Your browser does not support the <code>audio</code> element.
			<source src="audio/ασπασμοι.mp3" type="audio/mp3">
		</audio>
	</div>
	<div id="w25" class="word2 col-xs-4 col-lg-3">
		<div class="row"><div class="col-xs-12">χαῖρε</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">kheh'reh</div></div>
		<div class="row"><div class="col-xs-12 translation">Hello!</div></div>
	</div>
	<div id="w26" class="word2 col-xs-4 col-lg-3">
		<div class="row"><div class="col-xs-12">ἔρρωσο</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ehr'-roh-soh</div></div>
		<div class="row"><div class="col-xs-12 translation">Goodbye!</div></div>
	</div>
	<div id="w27" class="word2 col-xs-4 col-lg-3">
		<div class="row"><div class="col-xs-12">τί ὄνομά σοι;</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">tee oh-no-ma’ seew</div></div>
		<div class="row"><div class="col-xs-12 translation">What's your name?</div></div>
	</div>
	<div id="w28" class="word2 col-xs-4 col-lg-3">
		<div class="row"><div class="col-xs-12">ὄνομά μοι ...</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">oh-no-ma’ meew ...</div></div>
		<div class="row"><div class="col-xs-12 translation">My name is ...</div></div>
	</div>
	<div id="w29" class="word2 col-xs-4 col-lg-3">
		<div class="row"><div class="col-xs-12">πῶς ἔχεις;</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">pohs eh’-kheess</div></div>
		<div class="row"><div class="col-xs-12 translation">How are you?</div></div>
	</div>
	<div id="w30" class="word2 col-xs-4 col-lg-3">
		<div class="row"><div class="col-xs-12">εὖ ἔχω</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">ev eh’-khoh</div></div>
		<div class="row"><div class="col-xs-12 translation">I'm well</div></div>
	</div>
	<div id="w31" class="word2 col-xs-4 col-lg-3">
		<div class="row"><div class="col-xs-12">καὶ σύ;</div></div>
		<div class="row"><div class="col-xs-12 pronunciation">keh’ seew</div></div>
		<div class="row"><div class="col-xs-12 translation">And you?</div></div>
	</div>
</div>

<h2>Slides</h2>
<div class="embed-responsive embed-responsive-4by3">
	<iframe src="https://docs.google.com/presentation/d/1gMNndOP_At4kgSSNXwdgJYC-Llt27IIgrFu-XM24iJA/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="749" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div>

<script>
	document.addEventListener( "DOMContentLoaded", function() {
		var pop = Popcorn("#greek-audio");

		var wordTimes = {
			"w1": { start: 2.0, end: 3.5 },
			"w2": { start: 3.5, end: 5.0 },
			"w3": { start: 5.0, end: 6.5 },
			"w4": { start: 6.5, end: 8.2 },
			"w5": { start: 8.2, end: 10.0 },
			"w6": { start: 10.0, end: 11.5 },
			"w7": { start: 11.5, end: 13.0 },
			"w8": { start: 13.0, end: 14.6 },
			"w9": { start: 14.6, end: 16.2 },
			"w10": { start: 16.2, end: 17.6 },
			"w11": { start: 17.6, end: 19.4 },
			"w12": { start: 19.4, end: 20.8 },
			"w13": { start: 20.8, end: 22.5 },
			"w14": { start: 22.5, end: 24.0 },
			"w15": { start: 24.0, end: 25.7 },
			"w16": { start: 25.7, end: 27.0 },
			"w17": { start: 27.0, end: 28.5 },
			"w18": { start: 28.5, end: 30.2 },
			"w19": { start: 30.2, end: 31.6 },
			"w20": { start: 31.6, end: 33.3 },
			"w21": { start: 33.3, end: 34.7 },
			"w22": { start: 34.7, end: 36.4 },
			"w23": { start: 36.4, end: 37.8 },
			"w24": { start: 37.8, end: 39.0 }
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
		});

		var pop2 = Popcorn("#greek-audio2");

		var wordTimes2 = {
			"w25": { start: 2.0, end: 3.7 },
			"w26": { start: 3.7, end: 6.1 },
			"w27": { start: 6.1, end: 8.5 },
			"w28": { start: 8.5, end: 11.0 },
			"w29": { start: 11.0, end: 13.1 },
			"w30": { start: 13.1, end: 15.3 },
			"w31": { start: 15.3, end: 16.5 }
		};

		$.each(wordTimes2, function(id, time) {
			pop2.footnote({
				start: time.start,
				end: time.end,
				text: '',
				target: id,
				effect: "applyclass",
				applyclass: "selected"
			});
		});

		$('.word2').click(function() {
			var $audio = $('#greek-audio2');
			$audio[0].currentTime = wordTimes2[$(this).attr('id')].start + 0.1;
		});

		$('#vowel-highlight').click(function() {
			$('#w1, #w5, #w7, #w9, #w15, #w20, #w24').toggleClass('marked');
		});
	}, false);
</script>
<?php require_once('includes/footer.php') ?>
