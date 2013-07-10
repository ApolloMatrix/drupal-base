<?php

/**
 * Override or insert variables into the maintenance page template.
 */
function stark_preprocess_maintenance_page(&$vars) {
  // While markup for normal pages is split into page.tpl.php and html.tpl.php,
  // the markup for the maintenance page is all in the single
  // maintenance-page.tpl.php template. So, to have what's done in
  // seven_preprocess_html() also happen on the maintenance page, it has to be
  // called here.
  seven_preprocess_html($vars);
}

/**
 * Override or insert variables into the page template.
 */
function stark_preprocess_page(&$vars) {

}

/**
 * Display the list of available node types for node creation.
 */
function stark_node_add_list($variables) {
  $content = $variables['content'];
  $output = '';
  if ($content) {
    $output = '<ul class="admin-list">';
    foreach ($content as $item) {
      $output .= '<li class="clearfix">';
      $output .= '<span class="label">' . l($item['title'], $item['href'], $item['localized_options']) . '</span>';
      $output .= '<div class="description">' . filter_xss_admin($item['description']) . '</div>';
      $output .= '</li>';
    }
    $output .= '</ul>';
  }
  else {
    $output = '<p>' . t('You have not created any content types yet. Go to the <a href="@create-content">content type creation page</a> to add a new content type.', array('@create-content' => url('admin/structure/types/add'))) . '</p>';
  }
  return $output;
}

function stark_menu_tree__main_menu($variables) {
    return '<ul class="menu-main list-inline">' . $variables['tree'] . '</ul>';
}

function stark_menu_tree__features($variables) {
    return '<ul class="menu-visit-nav list-inline">' . $variables['tree'] . '</ul>';
}

function stark_menu_tree__menu_footer_menu($variables) {
    return '<ul class="menu-footer list-inline">' . $variables['tree'] . '</ul>';
}