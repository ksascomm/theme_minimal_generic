<?php
/*
Template Name: Search Page
*/
?>
<?php get_header() ?>

	<div id="container" class="row">
		<div id="content" class="twelve columns">
			<h2>Search Results for "<?php the_search_query();?>"</h2>
			<?php get_search_form(); ?>
			<?php while ( have_posts() ) : the_post() ?>

				<article>
				<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
					<h4 class="entry-title"><?php the_title(); ?></h4>
						<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'simplr'), the_date('l, F jS, Y', false)) ?></abbr></div>
						<div class="entry-content">
							<?php the_excerpt(); ?>
						</div>
				</a>
				</article>
				<hr>
			<?php endwhile ?>

		</div><!-- #content .hfeed -->
	</div><!-- #container -->

<?php get_footer() ?>