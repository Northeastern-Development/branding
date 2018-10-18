<!-- SIDE NAV THAT APPEARS ON GUIDE AND ITS CHILDREN PAGES -->

<?php

	// what page we are on currently
	global $wp;
 	$cPage = add_query_arg( array(), $wp->request );
	// echo $cPage;

$args = array(
	'sort_order' => 'asc',
	'sort_column' => 'menu_order',
	'parent' => '264',
  'exclude' => '43',
	'post_status' => 'publish'
);
$pages = get_pages($args);

$return = '';

foreach($pages as $page){
  $parent = '<a href="#" title="Hide/show '.$page->post_title.' items">'.$page->post_title.'</a>';

	$return .= '<ul class="guide-nav"><li>'.$parent.'<ul class="nu__children">';

	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'menu_order',
		'parent' => $page->ID,
		'post_status' => 'publish'
	);
	$children = get_pages($args);

	foreach($children as $c){

		$args = array(
			'sort_order' => 'asc',
			'sort_column' => 'menu_order',
			'parent' => $c->ID,
			'post_status' => 'publish'
		);
		$grandChildren = get_pages($args);

		if(count($grandChildren) > 0){

			$return .= '<li><a>'.$c->post_title.'</a><ul class="nu__children">';

			foreach($grandChildren as $gC){
				$return .= '<li><a href="'.site_url().'/guide/'.$page->post_name.'/'.$c->post_name.'/'.$gC->post_name.'" title="'.$gC->post_title.'" class="'.($cPage == 'guide/'.$page->post_name.'/'.$c->post_name.'/'.$gC->post_name ?'active':'').'">'.$gC->post_title.'</a></li>';
			}

			$return .= '</ul>';

		}else{
			$return .= '<li><a href="'.site_url().'/guide/'.$page->post_name.'/'.$c->post_name.'" title="'.$c->post_title.'" class="'.($cPage == 'guide/'.$page->post_name.'/'.$c->post_name ?'active':'').'">'.$c->post_title.'</a>';
		}

		$return .= '</li>';
	}

	$return .= '</ul></li></ul>';

}
echo $return;
?>
