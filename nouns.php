<?php

$pageTitle = 'Nouns';
 
require_once('includes/header.php');

?>

<h1>ὀνόματα <small> Nouns</small></h1>
            
<h2>ἀρσενικὸν γένος, πληθυντικὸς ἀριθμός <small>masculine gender, plural number</small></h2>
<div class="audio-container">
    <audio controls="controls" id="greek-audio">
        Your browser does not support the <code>audio</code> element.
        <source src="audio/αρσενικον πληθυντικον.mp3" type="audio/mp3">
    </audio>        
</div>

<div id="greek-text" class="row">	
    <div class="col-xs-12">
		<button type="button" class="btn btn-default" id="translation-toggle">Show/hide translations</button>
        <button type="button" class="btn btn-default" id="pronunciation-toggle">Show/hide pronunciations</button>
	</div>
    <div id="w1" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">ἄνθρωποι βλέπουσιν.</div></div>
		<div class="row"><div class="col-xs-12 translation">People are seeing.</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">ahn'-throh-peew bleh'-poo-seen.</div></div>
	</div>
    <div id="w2" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">ἀνθρώπους βλέπουσιν.</div></div>
		<div class="row"><div class="col-xs-12 translation">They are seeing people.</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">ahn-throh'-poos bleh'-poo-seen.</div></div>
	</div>
    <div class="clearfix visible-xs"></div>
	<div id="w3" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">ἄγγελοι λέγουσιν.</div></div>
		<div class="row"><div class="col-xs-12 translation">Angels are speaking.</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">ahn'-yehl-eew leh'-goo-seen.</div></div>
	</div>
    <div id="w4" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">ἀγγέλους βλέπουσιν.</div></div>
		<div class="row"><div class="col-xs-12 translation">They are seeing angels.</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">ahn'-yehl-oos bleh'-poo-seen.</div></div>
	</div>
    <div class="clearfix visible-xs"></div>
	<div id="w5" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">οἱ κύριοι ἀγαπῶσιν.</div></div>
		<div class="row"><div class="col-xs-12 translation">The masters love.</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">eew keew'-ree-eww ah-gah-poh'-seen.</div></div>
	</div>
	<div id="w6" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">τοὺς κυρίους ἀγαπῶσιν.</div></div>
		<div class="row"><div class="col-xs-12 translation">They love the masters.</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">toos keew-ree'-oos ah-gah-poh'-seen</div></div>
	</div>
    <div class="clearfix visible-lg visible-xs"></div>        
</div>

<h2>γράφαι <small>Scriptures</small></h2>
<div id="greek-text" class="row">
    <div id="w7" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">Ἰδὼν δὲ τοὺς ὄχλους...</div></div>
		<div class="row"><div class="col-xs-12 translation">When he saw the crowds...</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">ee-thohn' theh toos ohkh'-loos...</div></div>
	</div>
    <div id="w8" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">ἐθεράπευσεν αὐτούς.</div></div>
		<div class="row"><div class="col-xs-12 translation">He healed them.</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">eh-theh-rah'-pehv-sen ahv-toos'.</div></div>
	</div>
    <div class="clearfix visible-xs"></div>
	<div id="w9" class="word col-xs-12 col-lg-6">
		<div class="row"><div class="col-xs-12">Μακάριοι οἱ πτωχοὶ...</div></div>
		<div class="row"><div class="col-xs-12 translation">Blessed (are) the poor...</div></div>
        <div class="row"><div class="col-xs-12 pronunciation">mah-kah'-ree-eew eew ptoh-kheew'</div></div>
	</div>
    <div class="clearfix visible-lg visible-xs"></div>        
</div>

        
<script>
    $('.translation').hide();
    $('.pronunciation').hide();
    $('#translation-toggle').click(function() {
        $('.translation').toggle();
    });
    $('#pronunciation-toggle').click(function() {
        $('.pronunciation').toggle();
    });
    
    document.addEventListener( "DOMContentLoaded", function() {
		var pop = Popcorn("#greek-audio");

		var wordTimes = {
			"w1": { start: 0.5, end: 3.5 },
			"w2": { start: 3.5, end: 6.8 },
			"w3": { start: 6.8, end: 9.2 },
			"w4": { start: 9.2, end: 12.5 },
			"w5": { start: 12.5, end: 17.0 },
			"w6": { start: 17.0, end: 21.0 }
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

