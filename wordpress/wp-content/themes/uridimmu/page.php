<?php
/**
 * Page Template
 *
 * This is the default page template.  It is used when a more specific template can't be found to display 
 * singular views of pages.
 *
 * @package Uridimmu
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // uidimmu_before_content ?>

	<div id="content">

		<?php get_sidebar( 'before-content' ); // Loads the sidebar-before-content.php template. ?>

		<?php do_atomic( 'open_content' ); // uidimmu_open_content ?>

		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // uidimmu_before_entry ?>

					<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // uidimmu_open_entry ?>

                        <header class="entry-header">
                            <?php echo apply_atomic_shortcode( 'entry_title', the_title( '<h1 class="entry-title">', '</h1>', false ) ); ?>
                        </header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'uidimmu' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'uidimmu' ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">[entry-edit-link]</div>' ); ?>
                        </footer><!-- .entry-footer -->

						<?php do_atomic( 'close_entry' ); // uidimmu_close_entry ?>

					</article><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // uidimmu_after_entry ?>

					<?php get_sidebar( 'after-singular' ); // Loads the sidebar-after-singular.php template. ?>

					<?php do_atomic( 'after_singular' ); // uidimmu_after_singular ?>

					<?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // uidimmu_close_content ?>

		<?php get_sidebar( 'after-content' ); // Loads the sidebar-after-content.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // uidimmu_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>