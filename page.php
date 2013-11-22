<?php get_header() ?>

	<div id="container" class="row">
		<div id="content" class="hfeed twelve columns">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>">
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="entry-content">
					<?php the_content() ?>
				</div>
			</div><!-- .post -->
			<?php endwhile; endif; ?>
		</div><!-- #content .hfeed -->
	</div><!-- #container -->
<?php get_footer() ?>
