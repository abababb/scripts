<?php
/**
 * Index Template
 *
 * This is the default template.  It is used when a more specific template can't be found to display
 * posts.  It is unlikely that this template will ever be used, but there may be rare cases.
 *
 * @package Uridimmu
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // uridimmu_before_content ?>

	<div id="content">

		<?php get_sidebar( 'before-content' ); // Loads the sidebar-before-content.php template. ?>

		<?php do_atomic( 'open_content' ); // uridimmu_open_content ?>

		<div class="hfeed">

			<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // uridimmu_before_entry ?>

					<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // uridimmu_open_entry ?>

                        <header class="entry-header">
                            <?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
                            <?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( 'On [entry-published] [entry-edit-link before=" | "]', 'uridimmu' ) . '</div>' ); ?>
                        </header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'uridimmu' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'uridimmu' ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="分类 "] [entry-terms before="| 标签 "] [entry-comments-link before=" | "]', 'uridimmu' ) . '</div>' ); ?>
                        </footer><!-- .entry-footer -->

						<?php do_atomic( 'close_entry' ); // uridimmu_close_entry ?>

					</article><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // uridimmu_after_entry ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // uridimmu_close_content ?>

		<?php get_sidebar( 'after-content' ); // Loads the sidebar-after-content.php template. ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // uridimmu_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>