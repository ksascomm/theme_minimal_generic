
	<div id="footer">
		<footer class="row">
			<span id="search" class="twelve columns">
				<?php get_search_form(); ?>
			</span>
		<span id="university" class="twelve columns"><a href="http://www.jhu.edu"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/university.png" /></a></span>
		<p id="copyright" class="footer-meta twelve columns" align="center">&copy; <?php echo(date('Y')); ?> Johns Hopkins University</p>
		</footer>
	</div><!-- #footer -->

<?php wp_footer(); // Do not remove; helps plugins work ?>
	
</div><!-- #wrapper -->
</body><!-- end transmission -->
</html>
