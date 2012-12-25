<?php
/**
 * Template Name: Bookmarks
 *
 * A custom page template for displaying the site's bookmarks/links.
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

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // uridimmu_before_entry ?>

					<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // uridimmu_open_entry ?>

                        <header class="entry-header">
                            <?php echo apply_atomic_shortcode( 'entry_title', the_title( '<h1 class="entry-title">', '</h1>', false ) ); ?>
                        </header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content( __( '更多 <span class="meta-nav">&rarr;</span>', 'uridimmu' ) ); ?>

							<?php $args = array(
								'title_li' => false,
								'title_before' => '<h2>',
								'title_after' => '</h2>',
								'category_before' => false,
								'category_after' => false,
								'categorize' => true,
								'show_description' => true,
								'between' => '<br />',
								'show_images' => false,
								'show_rating' => false,
							); ?>
							<?php wp_list_bookmarks( $args ); ?>

							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'uridimmu' ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">[entry-edit-link]</div>' ); ?>
                        </footer><!-- .entry-footer -->

						<?php do_atomic( 'close_entry' ); // uridimmu_close_entry ?>

					</article><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // uridimmu_after_entry ?>

					<?php get_sidebar( 'after-singular' ); // Loads the sidebar-after-singular.php template. ?>

					<?php do_atomic( 'after_singular' ); // uridimmu_after_singular ?>

					<?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // uridimmu_close_content ?>

		<?php get_sidebar( 'after-content' ); // Loads the sidebar-after-content.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // uridimmu_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>
