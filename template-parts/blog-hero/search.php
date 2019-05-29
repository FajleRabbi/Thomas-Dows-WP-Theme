<div class="tdows-blog-filter-search">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				$default_args          = array(
					'before_title'  => '<em class="search-by-category-title">',
					'after_title'   => '</em>',
				);
				the_widget( 'WP_Widget_Categories', array(
					'title' => __('I want to learn about:', 'tdows'),
					'dropdown' => 1,
					'count' => 0,
				), $default_args);
				?>
			</div>
		</div>
	</div>
</div>