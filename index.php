<!DOCTYPE html>
<html>
<head>
	<title>CoachMe | Plate-forme d'entraînements personnalisés dédiée au running</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="CoachMe est la plate-forme d’entraînements personnalisés dédiée au running, vous offrant coaching personnalisé et conseils nutritionels adaptés à vos besoins."/>
	<meta name="keywords" content="entrainement marathon,coach sportif,remise en forme,c
	oach sportif ligne,coaching,
	alimentation marathon,
	formation coach sportif,performance,mental,personnel,
	nutrition coach,online,coach en ligne gratuit,
	coach alimentaire,sport tarif,prix,musculation, running,running store, running conseil,course a pied" />
	<meta name="robots" content="all" />
	<meta name="language" content="fr-FR" />
	<meta name="Copyright" content="CoachMe Running" />
	<meta name="Distribution" content="Global" />
	<meta name="Rating" content="General" />
	<meta name="Generator" content="Sublime Text, Cyberduck, Emacs" />
	<meta property="og:title" content="Coach Me Running" />
	<meta property="og:type" content="Community Marathon Website" />
	<meta property="og:url" content="http://www.coachme-running.com" />
	<meta property="og:image" content="http://www.coachme-running.com/contents/img/backs/Fond.jpg" />
	<link rel="icon" type="image/png" href="contents/img/logos/Logo.jpg" />
	<link href="https://plus.google.com/u/0/b/110121806834654006921/110121806834654006921/posts" rel="publisher" />
	<link rel="stylesheet" type="text/css" href="frameworks/Bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script type="text/javascript" src="frameworks/jquery/jquery-2.1.4.min.js"></script>
	<script src="frameworks/Horizontal_scroll/jquery.horizonScroll.js"></script>
	<script src="frameworks/Horizontal_scroll/jquery.touchSwipe.js"></script>
	<script type="text/javascript" src="frameworks/Bootstrap/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('section').horizon({
				scrollTimeout: null,
				scrollEndDelay: 50,
				scrollDuration: 600,
				i: 0,
				limit: 0,
				docWidth: 0,
				sections: 1,
				swipe: true,
				fnCallback: function (i) {
				}
			});
		});
	</script>
</head>
<body>

	<script type="text/javascript">
		function scrollToSection(index, speed) {
        if (index > ($.fn.horizon.defaults.limit - 1) || index < 0) {
            console.log('Scroll where? I think you want me to go out of my limits. Sorry, no can do.');
            return;
        }

        console.log('Scroll to: ' + index);
        $.fn.horizon.defaults.i = index;

        var $section = $($.fn.horizon.defaults.sections[index]);
        $('html,body').animate({scrollLeft: $section.offset().left}, speed, 'swing', $.fn.horizon.defaults.fnCallback(index));

        if (index === 0) {
            $('.horizon-prev').hide();
            $('.horizon-next').show();
        } else if (index === $.fn.horizon.defaults.limit - 1) {
            $('.horizon-prev').show();
            $('.horizon-next').hide();
        } else {
            $('.horizon-next').show();
            $('.horizon-prev').show();
        }
    };
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
		    $('#footer div').click(function() {

		        $('#footer div').removeClass('active');

		        var $this = $(this);
		        if (!$this.hasClass('active')) {
		            $this.addClass('active');
		        }
		    });

		});
	</script>
	<script type="text/javascript">
	$(document).ready(function (){

		var scrollLeft = function () {
	        console.log('Scroll left');

	        var i2 = $.fn.horizon.defaults.i - 1;

	        if (i2 > -1) {
	            scrollTo(i2, $.fn.horizon.defaults.scrollDuration);
	        }
   		};

    	var scrollRight = function () {
	        console.log('Scroll right');

	        var i2 = $.fn.horizon.defaults.i + 1;

	        if (i2 < $.fn.horizon.defaults.limit) {
	            scrollTo(i2, $.fn.horizon.defaults.scrollDuration);
	        }
    	};
    });
	</script>
	<section data-role="section" id="section-section1">
		<?php include "navbar.html"; ?>
		<?php include "landing1.php"; ?>
		<?php include "footer.html"; ?>
	</section>
	<section data-role="section" id="section-section2">
		<?php include "landing2.php"; ?>
	</section>
	<section data-role="section" id="section-section3">
		<?php include "landing3.php"; ?>
	</section>
	<section data-role="section" id="section-section4">
		<?php include "landing4.php"; ?>
	</section>
	<section data-role="section" id="section-section5">
		<?php include "landing5.php"; ?>
	</section>
</body>
</html>
