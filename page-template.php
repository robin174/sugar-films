<?php 
/*
Template Name: Page - Template
*/
get_header(); ?>
	
	<div class="content">
		<div class="inner-content grid-x">
	
		    <main class="main small-12 medium-12 large-12 cell" role="main">

		    	<div class="grid-container">
			    	<div class="grid-x grid-padding-x">
			    		<div class="small-12 medium-4 large-3 cell">
			    			X
			    		</div>
			    		<div class="small-12 medium-8 large-9 cell">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						    	<?php get_template_part( 'parts/loop', 'page' ); ?>
						    <?php endwhile; endif; ?>
			    		</div>
			    	</div>
			    </div>
			    					
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>