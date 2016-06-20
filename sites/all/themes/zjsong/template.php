<?php

/**
 *	modules/views/handlers/views_handler_field.inc, line #1205 
 *   // $value = filter_xss_admin($alter['text']); commented by jsong, for allowing fully customized custom text views field
 */


// when you can't use dsm() or krumo(), use below
// echo'<pre>'; print_r($form['actions']); echo'</pre>'; 

/**
 * Implements template_preprocess_html().
 *
 */
//function zjsong_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
function zjsong_preprocess_page(&$variables) {
	
	if($variables['user']->uid == 0) // check if user is annonymouse
	{
		_insert_log_in_menu($variables);
	}
//dsm($variables);
}
/**
 * Local function
 * @description: to add "Sign In" link to top bar menu, the funtion is called above
 */
function _insert_log_in_menu(&$variables){
	// insert the sign in menu in secondary main menu
	$variables['secondary_menu']['menu-629'] = array('attributes' => array('title'=>'menu log in'), 'href' => 'user', 'title' => 'Log In'); 	
	// insert the sign in menu in top bar secodary menu
	$variables['top_bar_secondary_menu'] = _log_in_menu_link();	
}
/**
 * Local function
 * @description: to add "Sign In" link to top bar menu, the funtion is called above
 */
function _log_in_menu_link(){
	return '<h2 class="element-invisible">Secondary menu</h2><ul id="secondary-menu" class="secondary link-list right"><li class="first last not-click"><a href="/user">LOG IN</a></li></ul>';
}

/**
 * Implements template_preprocess_node
 *
 */
function zjsong_preprocess_node(&$variables) {
//dsm($variables);



}

/**
 * Implements hook_preprocess_block()
 */
//function zjsong_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

/**/
/**/

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function zjsong_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
/*
function zjsong_preprocess_views_view_fields(&$variables) {
	
	$variables['fields']['title']->wrapper_prefix = '<a href="#jsong1">' ;
	$variables['fields']['title']->wrapper_suffix = '</a>' ;	
	$variables['fields']['body']->wrapper_prefix = '<div id="jsong1" class="views-field views-field-body">' ;
	$variables['fields']['body']->wrapper_suffix = '</div>' ;	

	dsm($variables);
}
*/

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function zjsong_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span data-tooltip="top" class="has-tip tip-top" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function zjsong_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function zjsong_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $form['actions']['submit']['#attributes'] = array('class' => array('primary', 'button', 'radius'));
//  }
//}

// Sexy preview buttons
//function zjsong_form_comment_form_alter(&$form, &$form_state) {
//  $form['actions']['preview']['#attributes']['class'][] = array('class' => array('secondary', 'button', 'radius'));
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function zurb_foundation_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/**
 * Implements hook_css_alter().
 */
//function zjsong_css_alter(&$css) {
//  // Always remove base theme CSS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($css as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($css[$path]);
//    }
//  }
//}

/**
 * Implements hook_js_alter().
 */
//function zjsong_js_alter(&$js) {
//  // Always remove base theme JS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($js as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($js[$path]);
//    }
//  }
//}

/**
 * Implements hook_form_alter().
 */
function zjsong_form_alter(&$form, &$form_state, $form_id) {
//dsm($form);
//dsm($form_id);
//echo'<pre>'; print_r($form_id); echo'</pre>';
 
// is_useful_exposed_formatter customization
if($form_id == 'is_useful_exposed_formatter'){
	//dsm($form);
	
}

// disable Twitter sign in button
if($form_id == 'user_login'){unset($form['twitter_signin']);}

  // Id's of forms that should be ignored
  $form_ids = array(
    'node_form',
    'system_site_information_settings',
    'user_profile_form',
    'node_delete_confirm',
    'views_ui_edit_form',
  );

  // Allow other modules to alter this.
  drupal_alter('zurb_foundation_ignored_forms', $form_ids);

  // Only wrap in container for certain form
  if (isset($form['#form_id']) && !in_array($form['#form_id'], $form_ids) && !isset($form['#node_edit_form'])) {
    $form['actions']['#theme_wrappers'] = array();
  }

  // Sexy submit buttons
  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
    $form['actions']['submit']['#attributes'] = array('class' => array('secondary', 'button', 'round'));
  }
  // Sexy delete buttons
  if (!empty($form['actions']) && !empty($form['actions']['delete'])) {
    $form['actions']['delete']['#attributes'] = array('class' => array('secondary', 'button', 'round'));
  }
  // Sexy delete buttons
  if (!empty($form['actions']) && !empty($form['actions']['preview'])) {
    $form['actions']['preview']['#attributes'] = array('class' => array('secondary', 'button', 'round'));
  }

  // Search Block Fixes
  if (isset($form['#form_id']) && ($form['#form_id'] == 'search_block_form')) {
    $form['search_block_form']['#attributes']['class'] = array('small-8', 'columns');
    $form['actions']['submit']['#attributes']['class'] = array('postfix', 'small-4', 'columns');
  }

  // Mantain compatibility with Edit module.
  if ($form_id === 'edit_field_form') {
    $form['actions']['submit']['#attributes']['class'][] = 'edit-form-submit';
  }

  // Add tooltips to form elements.
  if (theme_get_setting('zurb_foundation_tooltip_enable')
    && theme_get_setting('zurb_foundation_tooltip_mode') === 'element') {
    // Get tooltip settings.
    $position = theme_get_setting('zurb_foundation_tooltip_position');
    $touch = theme_get_setting('zurb_foundation_tooltip_touch');

    foreach (element_children($form) as $item) {
      foreach (element_children($form[$item]) as $i) {
        $element =& $form[$item][$i];

        if (!empty($element['#description'])) {
          $element['#attributes']['data-tooltip'] = NULL;
          $element['#attributes']['class'][] = 'has-tip';
          $element['#attributes']['class'][] = $position;
          $element['#attributes']['title'] = $element['#description'];

          if ($touch) {
            $element['#attributes']['data-options'] = 'disable-for-touch:true';
          }
        }
      }
    }
  }
}

/**
 * Implements hook_form_views_exposed_form_alter().
 */
function zjsong_form_views_exposed_form_alter(&$form, &$form_state) {
//dsm($form);
//$form['submit']['#value'] = 'skljdjflskj';
//$form['submit']['#theme_wrappers'] = 'a';
}
function zjsong_preprocess_views_exposed_form(&$variables){
//dsm($variables);
$variables['reset_button'] = _theme_button('class="form-submit"', 'class="form-submit small"', $variables['reset_button']);
$variables['button'] = _theme_button('class="form-submit"', 'class="form-submit small"', $variables['button']);
}
/**
 * views view process function : helper function to use specific view function
 *
function zjsong_process_views_view(&$variables){	
	if (isset($variables['view']->name)) {
		//dsm($variables['view']->name);
		$function = 'zjsong_process_views_view__'.$variables['view']->name; 
		if (function_exists($function)) { $function($variables); }
	}
}
/**/
/**
 * views view preprocess function : helper function to use specific view function
 */
function zjsong_preprocess_views_view(&$variables) {
//dsm($variables['more']);
	if (isset($variables['view']->name)) {
		//dsm($variables['view']->name);
		$function = 'zjsong_preprocess_views_view__'.$variables['view']->name; 
		if (function_exists($function)) { $function($variables); }
		
	}

	$variables['more'] = _theme_button('<a href="', '<a class="button small" href="', $variables['more']);
}

/*
function zjsong_preprocess_views_view__news_and_events(&$variables){

	$blockUpcomingEventID =  'e09472473656e77dc7f080992fd78cc9';
	$blockRecentEventID =  'e70fd23f6f74fd0c757553db07c118d8';
	$targetBlock =  module_invoke('views', 'block_view', $blockRecentEventID);
	//if(empty($targetBlock)){$targetBlock =  module_invoke('views', 'block_view', $blockRecentEventID);}
	//if(!empty($targetBlock)){$variables['page']['content'][]  = $targetBlock;}
	$variables['page']['content'][]  = $targetBlock;

//dsm('zjsong_preprocess_views_view__news_and_events');
dsm($targetBlock);
dsm($variables);	
}
*/

function _theme_button($target, $replacement, $source){

	return str_replace($target,$replacement,$source);
}

/**
 * Implements theme_links() targeting the main menu specifically.
 * Formats links for Top Bar http://foundation.zurb.com/docs/components/top-bar.html
 */
/*
function zjsong_links__topbar_main_menu($variables, $delta) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = _zurb_foundation_links($links);
  $variables['attributes']['class'][] = 'left';

  return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
}
*/

function zjsong_pager(&$variables){
	
	//dsm($variables);
	//$variables['quantity'] = 5;
	
	$tags = $variables['tags'];
	$element = $variables['element'];
	$parameters = $variables['parameters'];
	$quantity = $variables['quantity'];
	global $pager_page_array, $pager_total;
	
	// Calculate various markers within this pager piece:
	// Middle is used to "center" pages around the current page.
	$pager_middle = ceil($quantity / 2);
	// current is the page we are currently paged to
	$pager_current = $pager_page_array[$element] + 1;
	// first is the first page listed by this pager piece (re quantity)
	$pager_first = $pager_current - $pager_middle + 1;
	// last is the last page listed by this pager piece (re quantity)
	$pager_last = $pager_current + $quantity - $pager_middle;
	// max is the maximum page number
	$pager_max = $pager_total[$element];
	// End of marker calculations.
	
	// Prepare for generation loop.
	$i = $pager_first;
	if ($pager_last > $pager_max) {
	// Adjust "center" if at end of query.
	$i = $i + ($pager_max - $pager_last);
	$pager_last = $pager_max;
	}
	if ($i <= 0) {
	// Adjust "center" if at start of query.
	$pager_last = $pager_last + (1 - $i);
	$i = 1;
	}
	// End of generation loop preparation.
	
	$li_first = theme('pager_first', array('text' => (isset($tags[0]) ? $tags[0] : t('« first')), 'element' => $element, 'parameters' => $parameters));
	$li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? $tags[1] : t('‹ previous')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
	$li_next = theme('pager_next', array('text' => (isset($tags[3]) ? $tags[3] : t('next ›')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
	$li_last = theme('pager_last', array('text' => (isset($tags[4]) ? $tags[4] : t('last »')), 'element' => $element, 'parameters' => $parameters));
	
	if ($pager_total[$element] > 1) {
	if ($li_first) {
	  $items[] = array(
	    'class' => array('pager-first button medium'),
	    'data' => $li_first,
	  );
	}
	if ($li_previous) {
	  $items[] = array(
	    'class' => array('pager-previous button medium'),
	    'data' => $li_previous,
	  );
	}
	
	// When there is more than one page, create the pager list.
	if ($i != $pager_max) {
	  if ($i > 1) {
	    $items[] = array(
	      'class' => array('pager-ellipsis button medium'),
	      'data' => '…',
	    );
	  }
	  // Now generate the actual pager piece.
	  for (; $i <= $pager_last && $i <= $pager_max; $i++) {
	    if ($i < $pager_current) {
	      $items[] = array(
	        'class' => array('hide-for-small pager-item button medium'),
	        'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
	      );
	    }
	    if ($i == $pager_current) {
	      $items[] = array(
	        'class' => array('pager-current button medium'),
	        'data' => $i,
	      );
	    }
	    if ($i > $pager_current) {
	      $items[] = array(
	        'class' => array('hide-for-small pager-item button medium'),
	        'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
	      );
	    }
	  }
	  if ($i < $pager_max) {
	    $items[] = array(
	      'class' => array('pager-ellipsis button medium'),
	      'data' => '…',
	    );
	  }
	}
	// End generation.
	if ($li_next) {
	  $items[] = array(
	    'class' => array('pager-next button medium'),
	    'data' => $li_next,
	  );
	}
	if ($li_last) {
	  $items[] = array(
	    'class' => array('pager-last button medium'),
	    'data' => $li_last,
	  );
	}
	
	//dsm($items);
	
	return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme('item_list', array(
	  'items' => $items,
	  'attributes' => array('class' => array('button-group radius pager')),
	));
	}
}


/**
 * Alter the user_login_block form element
 * Adding berklee onepass logo
 *
function zjsong_form_user_login_block_alter(&$form, &$form_state) {
	
	// below line is for the user notice in login block
	// $form['usernotice'] = array('#markup' => '<div style="color:red">*Attention (10/24/2013)* <br /> Due to maintenance between 6pm & 10pm EST, there may be intermittent interruptions to logging in.<br /><br /></div>', '#weight'=> 0); 
	$form['onepass'] = array('#markup' => '<div id="onepasslogo"><img src="'.path_to_theme().'/images/onepass_logo_h80.png" /></div>', '#weight'=> 11); 
	$form['actions']['#weight'] = 10; 
	$form['name']['#title'] = t('myemail@berklee.edu');		
	array_unshift($form['#validate'], '_validate_username');
} 
/**
 * Alter the user_login form element
 * Adding berklee onepass logo
 * egillis: edit here for outage notice
 *
function zjsong_form_user_login_alter(&$form, &$form_state) {

	// below line is for the user notice in login block
	// $form['usernotice'] = array('#markup' => '<div style="color:red">*Attention (10/24/2013)* <br /> Due to maintenance between 6pm & 10pm EST, there may be intermittent interruptions to logging in.<br /><br /></div>', '#weight'=> 0); 	
	$form['onepass'] = array('#markup' => '<div id="onepasslogo"><img src="'.path_to_theme().'/images/onepass_logo_h80.png" /></div>', '#weight'=> 11); 
	$form['actions']['#weight'] = 10;
	$form['name']['#title'] = t('myemail@berklee.edu'); 	
	array_unshift($form['#validate'], '_validate_username');		
}
/**
 * custom validate function
 * Adding the string "@berklee.edu" at the end of what user type in for username
 * This function must be add to top of the validator callback array before ldap module's validator
 *
function _validate_username(&$form, &$form_state){
	if(stripos($form['name']['#value'], "@") === false)
	{
		//$form_state['input']['name'] = $form['name']['#value']."@berklee.edu"; 
		form_set_value($form['name'], $form['name']['#value']."@berklee.edu", $form_state);
	}
}
/**/










