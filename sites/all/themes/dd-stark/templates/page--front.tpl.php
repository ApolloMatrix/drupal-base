<?php $slider = views_get_view_result('frontpage_slideshow'); $slider = array_slice($slider, 0, 6); ?>
<?php $explore_and_discover = views_get_view_result('explore_and_discover'); ?>
<?php $programs = views_get_view_result('events_slider'); $programs = array_slice($programs, 0, 3); ?>
<?php $bloom = views_get_view_result('plant_gallery', 'block_5'); $bloom = array_slice($bloom, 0, 5); ?>
<div class="main-content-block">
	<?php print $messages; ?>
	<div class="header">
		<div class="header-logo">
			<a href="/"><img src="/sites/all/themes/stark/images/logo.png"></a>
		</div>
		<div class="mobile-menu"></div>
		<?php
		    $menu = menu_tree('main-menu');
		    print drupal_render($menu);
		?>
	</div>

	<div class="homepage-slider">

		<div class="homepage-nav">
		    <div class="visit-nav">
		        <?php
		            $menu = menu_tree('features');
		            print str_replace('http://www.usbg.gov', '', drupal_render($menu));
		        ?>
		    </div> 
		    <div class="todays-tour">
		            <div class="todays-tour-wrapper">
<!--		                <div class="todays-tour-left">-->
<!--		                    <div class="icon-calendar">-->
<!--		                        <p>15</p>-->
<!--		                        <p>APR</p>-->
<!--		                    </div>-->
<!--		                    <div class="icon-calendar-label">Today's Tour</div>-->
<!--		                </div>-->
		                <div class="todays-tour-info">
		                    <p>What's Happening at the Garden?</p>
		                    <p>Check out our <a href="/programs-and-events">Calendar of Events</a></p>
		                </div>
		            </div>
		    </div>
		</div>

		<div class="homepage-rotator">
		    <ul>
		        <?php foreach($slider as $item): ?>
		            <li><img src="<?php print file_create_url($item->field_field_slider_image[0]['raw']['uri']);?>" alt="" ></li>
		        <?php endforeach; ?>
		    </ul>
		</div>
		<div class="homepage-rotator-next"></div>
	</div>

	<div class="homepage-rotator-2-mobile"></div>
	<div class="todays-tour-mobile">

	</div>

	<div class="gray-line">Explore and Discover</div>

	<div class="explore-and-discover">
		<div class="explore-and-discover-left"></div>
		<div class="explore-and-discover-slider">
		    <ul class="explore-and-discover-list list-inline">
		        <?php foreach($explore_and_discover as $item): ?>
		            <li>
		            <a href="<?php print drupal_lookup_path('alias',"node/".$item->nid); ?>">
		                <img src="<?php print isset($item->field_field_plant_gallery_image[0]) ? file_create_url($item->field_field_plant_gallery_image[0]['raw']['uri']) : file_create_url($item->field_field_articlepage_image[0]['raw']['uri']); ?>" alt="">
		                <h3><?php print $item->node_title ?></h3>
		            </a>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		</div>
		<div class="explore-and-discover-right"></div>

		<ul class="explore-and-discover-list-mobile">
		</ul>
	</div>

	<div class="homepage-programs">
		<div class="gray-line">Programs</div>

		<ul class="homepage-programs-list list-inline">
		    <?php foreach($programs as $item): ?>
		        <li>
		            <a href="<?php print drupal_lookup_path('alias',"node/".$item->nid); ?>">
		                <img src="<?php print file_create_url($item->field_field_event_image[0]['raw']['uri']); ?>" width="85%">
		                <div class="homepage-programs-el-wrapper">
		                    <h4><?php print $item->node_title ?></h4>
		                    <p><?php print strip_tags($item->field_body[0]['rendered']['#markup']); ?></p>
		                    <p><?php print strip_tags($item->field_field_event_date[0]['rendered']['#markup']); ?></p>
		                </div>
		            </a>
		        </li>
		    <?php endforeach; ?>
		    <li class="more">
		        <a href="/programs-and-events">More</a>
		    </li>
		</ul>
	</div><div class="homepage-whats-in-bloom">
    <div class="gray-line">What's in Bloom</div>
    <div class="homepage-rotator-2">
        <ul>
            <?php foreach($bloom as $item): ?>
                <li>
                    <img src="<?php print file_create_url($item->field_field_plant_image[0]['raw']['uri']);?>">
                    <div>

                        <p><i><?php print $item->node_title; ?></i></p>

                        <p><?php
                            if (isset($item->_field_data['nid']['entity']->field_plant_species['und'][0]['value'])) {
                                print $item->_field_data['nid']['entity']->field_plant_species['und'][0]['value'];
                            }

                            if (isset($item->_field_data['nid']['entity']->field_plant_genus['und'][0]['value']) && isset($item->_field_data['nid']['entity']->field_plant_species['und'][0]['value'])) {
                                print ' - ';
                            }

                            if (isset($item->_field_data['nid']['entity']->field_plant_genus['und'][0]['value'])) {
                                print $item->_field_data['nid']['entity']->field_plant_genus['und'][0]['value'];
                            } ?>

                        </p>
                    <a href="<?php print drupal_lookup_path('alias',"node/".$item->nid); ?>">Learn more</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="homepage-rotator-2-line">
            <div class="homepage-rotator-2-left"></div>
            <div class="homepage-rotator-2-right"></div>
        </div>
    </div>
    <div class="homepage-rotator-2-v"></div>
	<div class="blank-content-block"></div>
</div>
<div class="footer-search-form-mobile"></div>

<div class="footer">
    <div class="footer-left">
        <?php
            $menu = menu_tree('menu-footer-menu');
            print drupal_render($menu);
        ?>
    </div>

    <div class="footer-right">
        <h3>United States Botanic Garden Conservatory</h3>
        <p><i class="icon-location"></i><span><a href="http://maps.google.com/?q=100 Maryland Avenue, SW, Washington, DC 20001">100 Maryland Avenue, SW, Washington, DC 20001</a></span> <i class="icon-phone"></i><span>(202) 225-8333</span></p>
        <div class="footer-search">
            <?php $block = module_invoke('search', 'block_view'); print drupal_render($block['content']); ?>
        </div>
    </div>
</div>
