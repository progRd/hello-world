<?php
function faq_enque_script() {
	if (is_page('while-at-the-mission')) {
//faq
		wp_enqueue_script('cmb-axios-js', get_template_directory_uri() . '/js/cmb-axios.js', array(), '20129999993', false);
		wp_enqueue_script('cmb-responsive-image-mapping-jq-ui', get_template_directory_uri() . '/js/cmb-responsive-jq.js', array(), '20129999990', false);
		wp_enqueue_script('cmb-responsive-image-mapping-ui', get_template_directory_uri() . '/js/cmb-responsive-jq-ui.js', array(), '20129999988', false);
		wp_enqueue_script('cmb-responsive-image-mapping', get_template_directory_uri() . '/js/cmb-responsive-image-mapping.js', array(), '20129999986', false);

	}
}
add_action('wp_enqueue_scripts', 'faq_enque_script');
function carmelmission_faqs($atts) {
	$partners_obj = get_terms('carmelmission_faq_category', array('hide_empty' => false));
	$html = '';
	$html .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">';
	$html .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>';
	$html .= '<div class="">';
	$html .= '<div class="panel-group" id="accordion">';
	$cnt = 1;
	foreach ($partners_obj as $faq_cat_val) {

		$cat_id = $faq_cat_val->term_id;
		$html .= '<h4 class="acc-title">' . $faq_cat_val->name . '</h4>';
		global $post;
		$args = array('post_type' => 'carmelmissionfaq',
			'post_status' => 'publish',
			'order' => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'carmelmission_faq_category',
					'field' => 'slug',
					'terms' => $faq_cat_val->slug,
				),
			),
		);
		$query = new WP_Query($args);
		$count = 0;
		while ($query->have_posts()) {

			$query->the_post();
			$count++;
			if ($cnt == 1 && $count == 1) {
				$html .= '<div class="panel panel-default">';
				$html .= '<div class="panel-heading">
				<h4 class="panel-title">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse_' . $post->ID . '">
				<span class="glyphicon glyphicon-minus"></span>
				' . $post->post_title . '
				</a>
				</h4>
				</div>';
				$html .= '<div id="collapse_' . $post->ID . '" class="panel-collapse collapse in">
				<div class="panel-body">' . $post->post_content . '</div>
				</div>';
				$html .= '</div>';
			} else {
				$html .= '<div class="panel panel-default">';
				$html .= '<div class="panel-heading">
				<h4 class="panel-title">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse_' . $post->ID . '">
				<span class="glyphicon glyphicon-plus"></span>
				' . $post->post_title . '
				</a>
				</h4>
				</div>';
				$html .= '<div id="collapse_' . $post->ID . '" class="panel-collapse collapse">
				<div class="panel-body">' . $post->post_content . '</div>
				</div>';
				$html .= '</div>';
			}
		}
		wp_reset_postdata();
		$cnt++;
	}
	$html .= '</div>';
	$html .= '</div>';
	$html .= '<script>
	(function($){
		$(".collapse").on("show.bs.collapse", function() {
			$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
			}).on("hide.bs.collapse", function() {
				$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
				});

				})(jQuery)

				</script>';
	return $html;
}

add_shortcode('carmelmission-faq', 'carmelmission_faqs');
