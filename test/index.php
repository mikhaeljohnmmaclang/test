<?php
	if(have_posts()):
		while(have_posts()) : the_posts(); ?>
		
		<h2><?php the_title(); ?></h2>
	<?php endwhile;

	else:
		echo '<p>No content found</p>';
	endif;

?>