<?php 
	$page = 0;
	$slider_nid = 0;
	$list = array();
	
	while (1) {
		$view = views_get_view('plant_gallery');
		$view->set_display('block_3');
		$view->set_current_page($page++);
		$view->pre_execute();
		$view->execute();
		$slider = $view->result;
	
		if($slider_nid == $slider[0]->nid) {
			break;
		}
		
		$slider_nid = $slider[0]->nid;
		
		foreach($slider as $item) {
			$list[] = array(
				'str'	=> 	'<i>' . (isset($item->_field_data['nid']['entity']->field_plant_genus['und']) ? $item->_field_data['nid']['entity']->field_plant_genus['und']['0']['value'] : '') . '</i> - ' . $item->node_title . '<br><a href="/' . drupal_lookup_path('alias',"node/".$item->nid) . '">Learn more</a>',
				'img'	=>	$item->field_field_plant_image[0]['raw']['uri']
			);
		}
	
	}
?>

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
		<h3><?php print $node->title; ?></h3>
        <p><?php print $node->body['und']['0']['value']; ?>

        <div class="homepage-rotator-2">
            
                <ul>
                	<?php foreach($list as $item): ?>
                    
                    	<li>
                    		<img src="<?php print file_create_url($item['img']); ?>">
                    		<div><?php print $item['str']; ?></div>
                    	</li>
                    <?php endforeach; ?>
                </ul>
           
            <div class="homepage-rotator-2-line">
		        <div class="homepage-rotator-2-left"></div>
		        <div class="homepage-rotator-2-right"></div>
		    </div>
        </div>
        <div class="homepage-rotator-2-v"></div>
        <div class="homepage-rotator-2-mobile"></div>
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
