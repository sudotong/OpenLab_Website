<div class="home-header-wrap"><?php	echo '<div class="header-content-wrap">';		echo '<section id="homepage">';		echo '<div class="container">';			//Render gallery if at least 2 slides available			$slides = get_registered_gallery_slides();			$captions = get_registered_slide_captions();			//write_log($captions);			$openlab_bigtitle_title = get_theme_mod('openlab_bigtitle_title',__('OpenLab is a space of open Source Software','openlab-txtd'));			if( ($slides !== false) && ( count($slides) >= 1) ):				echo '<div class="gallery-wrapper">';						echo '<div class="gallery js-flickity" data-flickity-options=\'{ "imagesLoaded": true, "percentPosition": true, "setGallerySize": false, "contain": true}\'>';							foreach( $slides as $key=>$slide ) :								echo '<div class="slider-image" style="background-image: url('. $slide .');">';								if( isset($captions[$key]) && $captions[$key] !== ''):									echo '<div class="slide-caption-wrap"><span class="inner-caption">'. trim(strip_tags($captions[$key])) .'</span></div>';								endif;								echo '</div>';							endforeach;						echo '</div>';						// slider title						//if( !empty($openlab_bigtitle_title) ):								//echo '<div class="intro-text"><div class="intro-wrap"><span>'.$openlab_bigtitle_title.'</span></div></div>';					  //endif;				echo '</div>';			endif;		echo '</div>';		echo '</div><!-- section -->';	echo '</div><!-- .header-content-wrap -->';		echo '<div class="clear"></div>';?></div>