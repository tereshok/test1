<?php get_header(); ?>
    <main class="main-content">
        <?php the_content(); ?>
      

			<?php if ( comments_open() || get_comments_number() ) : ?>
				<?php comments_template(); ?>
			<?php endif; ?>

	
    </main>
<?php get_footer(); ?>
