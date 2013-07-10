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

	<div class="content-block">
		<div class="left-maps">
		    <h3>Hours and Location</h3>
            <div>
                <p><strong>Hours and Location</strong><br>
                    The <a href="/conservatory"><strong>Conservatory</strong></a> is open 10 a.m. to 5 p.m. daily, including all weekends and holidays. </p>
                <p>The <strong><a href="/national-garden">National Garden</a></strong> is open 10 a.m. to 5 p.m. daily, including all weekends and holidays. It is adjacent to the Conservatory, with entrances from Independence Avenue, from Maryland Avenue (at 3rd Street) and from the Conservatory Terrace.</p>
                <p><a href="/bartholdi-park"><strong>Bartholdi Park</strong></a> is open from dawn to dusk, daily, including all weekends and holidays. It is located across Independence Avenue from the Conservatory, with access from any of the three bordering streets - Independence Avenue, Washington Avenue or First Street.</p>
                <p><strong>Admission to the U.S. Botanic Garden is FREE.</strong></p>
            </div>
		    <div class="gmap"><iframe width="100%" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+States+Botanic+Garden,+Maryland+Avenue+Southwest,+Washington,+DC&amp;aq=1&amp;oq=us+botan&amp;sll=37.6,-95.665&amp;sspn=36.77597,31.816406&amp;ie=UTF8&amp;hq=United+States+Botanic+Garden,+Maryland+Avenue+Southwest,+Washington,+DC&amp;t=m&amp;cid=6000443918455993089&amp;hnear=&amp;iwloc=A&amp;ll=38.888511,-77.013001&amp;spn=0.008351,0.016201&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+States+Botanic+Garden,+Maryland+Avenue+Southwest,+Washington,+DC&amp;aq=1&amp;oq=us+botan&amp;sll=37.6,-95.665&amp;sspn=36.77597,31.816406&amp;ie=UTF8&amp;hq=United+States+Botanic+Garden,+Maryland+Avenue+Southwest,+Washington,+DC&amp;t=m&amp;cid=6000443918455993089&amp;hnear=&amp;iwloc=A&amp;ll=38.888511,-77.013001&amp;spn=0.008351,0.016201" style="color:#669401;font-size:22px;text-align:left"><strong>View Larger Map</strong></a></small></div>
		    <div>
		        <p><strong>Public Transportation</strong><br>
		            The easiest way to reach us by Metrorail is by taking either the Orange or Blue line to the Federal Center SW station. Exit the station, walk north (left) along Third Street SW for two blocks, cross Independence Avenue and continue one more block to Maryland Avenue. Look toward the Capitol and you will see the glass dome of the Conservatory. The Conservatory entrance is on Maryland Avenue.</p>
		        <p>Metrobuses #32, 34 and 36 stop behind the Conservatory at Independence Avenue and First Street SW.</p>
		        <p>We encourage taking public transportation, you can plan your trip on <a target="_blank" href="http://www.wmata.com/rider_tools/tripplanner/tripplanner_form_solo.cfm">Metro</a>.</p>
		        <p><strong>Parking</strong><br>
		            Metered street parking spaces are available within a few blocks of the U.S. Botanic Garden. A limited number of accessible spaces are available in front of the Conservatory on Maryland Avenue SW.</p>
		        <p><strong>Tour Buses</strong><br>
		            There is no tour bus parking at the U.S. Botanic Garden. There is a <a target="_blank" href="/sites/default/files/images/tour_bus.jpg">tour bus route</a> from the Capitol to Parking Lot B at Union Station. Tour bus drivers should use this route between the tour drop-off/pick-up point on First Street SW and the bus parking lot.</p>
		    </div>
		</div>
		<div class="right-maps">
		    <h3>Maps</h3>
		    <p>U.S. Botanic Garden in relation to the U.S. Capitol and Metrorail</p>
		    <a target="_blank" href="/sites/all/themes/stark/images/maps/location_map.jpg"><img src="/sites/all/themes/stark/images/maps/location_map.jpg"></a>

		    <p>U.S. Botanic Garden campus</p>
		    <a target="_blank" href="/sites/all/themes/stark/images/maps/usbg_mall_campus_jan_2012-200x200.jpg"><img src="/sites/all/themes/stark/images/maps/usbg_mall_campus_jan_2012-200x200.jpg"></a>
		</div>
	</div>
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
