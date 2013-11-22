<?php get_header() ?>

	<div id="container" class="row">
		<div id="content" class="twelve columns">

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

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('&lt; Older posts', 'simplr')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts &gt;', 'simplr')) ?></div>
			</div>

		</div><!-- #content .hfeed -->
	</div><!-- #container -->

<?php get_footer() ?>