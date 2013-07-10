<div class="wrapper">
    <div class="header">
        <div class="mobile-menu"></div>
        <?php if ($main_menu): ?>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => 'menu-main list-inline'))); ?>
        <?php endif; ?>
    </div>

    <div class="homepage-slider">
        <div class="homepage-nav">
            <div class="visit-nav">
                <ul class="menu-visit-nav list-inline">
                    <li class="icon-visit-us"><a href="#">Visit Us</a></li>
                    <li class="icon-hours-location"><a href="#">Hours and Location</a></li>
                    <li class="icon-exhibits"><a href="#">Exhibits</a></li>
                    <li class="icon-tours"><a href="#">Tours</a></li>
                </ul>
            </div>
            <div class="todays-tour">
                <a href="#">
                    <div class="todays-tour-wrapper">
                        <div class="todays-tour-left">
                            <div class="icon-calendar">
                                <p>15</p>
                                <p>APR</p>
                            </div>
                            <div class="icon-calendar-label">Today`s Tour</div>
                        </div>
                        <div class="todays-tour-info">
                            <p>Lunchtime Tour of the Conservatory</p>
                            <p>Date: Monday, April 15</p>
                            <p>TIme: 12 p.m. to 1 p.m.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="homepage-rotator">
            <ul>
                <li><?php print '<img src="'.base_path() . path_to_theme() . '/images/slider/1.jpg">' ?></li>
                <li><?php print '<img src="'.base_path() . path_to_theme() . '/images/slider/2.jpg">' ?></li>
            </ul>
        </div>
        <div class="homepage-rotator-next"></div>
    </div>

    <div class="homepage-rotator-2-mobile"></div>
    <div class="todays-tour-mobile"></div>

    <div class="gray-line">Explore and Discover</div>

    <div class="explore-and-discover">
        <div class="explore-and-discover-left"></div>
        <div class="explore-and-discover-slider">
            <ul class="explore-and-discover-list list-inline">
                <li>
                    <a href="#">
                        <?php print '<img src="'.base_path() . path_to_theme() . '/images/tmp/1.jpg">' ?>
                        <h3>Exhibits</h3>
                        <p>UNDERSTORY celebrates the spring ephemerals that bloom beneath the forest canopy. Join us January 22...</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php print '<img src="'.base_path() . path_to_theme() . '/images/tmp/2.jpg">' ?>
                        <h3>Landscape For Life&trade;</h3>
                        <p>Landscape For Life shows you how to work with nature in your garden, no matter where you live, whether you...</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php print '<img src="'.base_path() . path_to_theme() . '/images/tmp/3.jpg">' ?>
                        <h3>The Sustainable Sites Initiative&trade;</h3>
                        <p>Healthy landscapes have the capacity to enhance and regenerate natural...</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="explore-and-discover-right"></div>

        <ul class="explore-and-discover-list-mobile"></ul>
    </div>

    <div class="homepage-programs">
        <div class="gray-line">Programs</div>

        <ul class="homepage-programs-list list-inline">
            <li>
                <a href="#">
                    <?php print '<img src="'.base_path() . path_to_theme() . '/images/tmp/4.jpg">' ?>
                    <div class="homepage-programs-el-wrapper">
                        <h4>Cooking with Fresh Herbs Demonstration</h4>
                        <p>Jackie Bailey</p>
                        <p>Labovitz, Artist Sun, Apr 14, 2013</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <?php print '<img src="'.base_path() . path_to_theme() . '/images/tmp/5.jpg">' ?>
                    <div class="homepage-programs-el-wrapper">
                        <h4>Celebrate Earth Day!</h4>
                        <p>USBG Staff</p>
                        <p>Fri, Apr 19, 2013</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <?php print '<img src="'.base_path() . path_to_theme() . '/images/tmp/6.jpg">' ?>
                    <div class="homepage-programs-el-wrapper">
                        <h4>Painting Orchids in Pencil and Watercolor</h4>
                        <p>Carol Beach, Artist</p>
                        <p>Sat, Apr 20, 2013</p>
                    </div>
                </a>
            </li>
            <li class="more">
                <a href="#">More</a>
            </li>
        </ul>
    </div><div class="homepage-whats-in-bloom">
        <div class="gray-line">What`s in Bloom</div>
        <div class="homepage-rotator-2">
            <ul>
                <li>
                    <?php print '<img src="'.base_path() . path_to_theme() . '/images/slider2/1.jpg">' ?>
                    <div>
                        <p>Hippeastrum - 'Lady Jane'</p>
                        <p>Lady Jane Amaryllis</p>
                    </div>
                </li>
                <li>
                    <?php print '<img src="'.base_path() . path_to_theme() . '/images/slider2/1.jpg">' ?>
                    <div>
                        <p>Test 2</p>
                        <p>Test 2</p>
                    </div>
                </li>
            </ul>

            <div class="homepage-rotator-2-line">
                <div class="homepage-rotator-2-left"></div>
                <div class="homepage-rotator-2-right"></div>
            </div>
        </div>
        <div class="homepage-rotator-2-v"></div>
    </div>

    <div class="footer-search-form-mobile"></div>

    <div class="footer">
        <div class="footer-left">
            <?php print theme('links', array('links' => menu_navigation_links('menu-secondary'), 'attributes' => array('class'=> array('menu-footer list-inline')) ));?>

            <ul class="menu-social list-inline">
                <li><a href="#"><?php print '<img src="'.base_path() . path_to_theme() . '/images/social/fb.png">'; ?></a></li>
                <li><a href="#"><?php print '<img src="'.base_path() . path_to_theme() . '/images/social/twitter.png">'; ?></a></li>
                <li><a href="#"><?php print '<img src="'.base_path() . path_to_theme() . '/images/social/tumblr.png">'; ?></a></li>
                <li><a href="#"><?php print '<img src="'.base_path() . path_to_theme() . '/images/social/rss.png">'; ?></a></li>
            </ul>
        </div>

        <div class="footer-right">
            <h3>United States Botanic Garden Conservatory</h3>
            <p><i class="icon-location"></i><span>100 Maryland Avenue, SW, Washington, DC 20001</span> <i class="icon-phone"></i><span>(202) 225-8333</span></p>
            <form action="#" method="get" class="footer-search-form">
                <div class="footer-search">
                    <div class="footer-search-left"></div><div class="footer-search-center"><input type="text" name="search-field" placeholder="Search"></div><div class="footer-search-right"></div>
                </div>
            </form>
        </div>
    </div>
</div>