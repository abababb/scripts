<?php
/**
 * Post Template
 *
 * This is the default post template.  It is used when a more specific template can't be found to display
 * singular views of the 'post' post type.
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
                            <?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( 'On [entry-published] [entry-edit-link before=" | "]', 'uridimmu' ) . '</div>' ); ?>
                        </header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content( __( '继续阅读 <span class="meta-nav">&rarr;</span>', 'uridimmu' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'uridimmu' ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="分类 "] [entry-terms taxonomy="post_tag" before="| 标签 "]', 'uridimmu' ) . '</div>' ); ?>
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

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // uridimmu_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>
