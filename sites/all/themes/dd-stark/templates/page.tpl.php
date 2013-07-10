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

		<?php print render($title_prefix); ?>
		<?php if ($title): ?><h3><?php print $title; ?></h3><?php endif; ?>
		<?php print render($title_suffix); ?>
		<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>

		<?php print render($page['content']); ?>

                <?php  if ($page['sidebar_second']): ?>

                  <div id="sidebar-second" class="column sidebar"><div class="section">
                  <?php print render($page['sidebar_second']); ?>
                  </div></div> <!-- /.section, /#sidebar-first -->
               <?php endif; ?>
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
<!--                <div class="footer-search-left"></div><div class="footer-search-center"><input type="text" name="search-field" placeholder="Search"></div><div class="footer-search-right"></div>-->
        </div>
    </div>
</div>
