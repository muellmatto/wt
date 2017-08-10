    <meta lang="de">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $Site->title() ?></title>

    <?php
	    // CSS from theme/css/
	    Theme::css(array(
            'wt.css'
	    ));

	    // Favicon from theme/img/
	    Theme::favicon('favicon.png');

	    // Where Am I
        if( $Url->whereAmI()=='post' ) {
		    Theme::keywords( $Post->tags() );
		    Theme::description( $Post->description() );
	    }
	    elseif( $Url->whereAmI()=='page' ) {
		    Theme::keywords( $Page->tags() );
		    Theme::description( $Page->description() );
	    }
	    else {
		    Theme::description( $Site->description() );
	    }
    ?>




    <!-- Plugins Site Head -->
    <?php Theme::plugins('siteHead') ?>
