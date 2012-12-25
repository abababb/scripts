<?php
/**
 * Attachment Template
 *
 * This is the default attachment template.  It is used when visiting the singular view of a post attachment 
 * page (images, videos, audio, etc.).
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
							<?php if ( wp_attachment_is_image( get_the_ID() ) ) : ?>

								<p class="attachment-image">
									<?php echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'aligncenter' ) ); ?>
								</p><!-- .attachment-image -->

							<?php else : ?>

								<?php hybrid_attachment(); // Function for handling non-image attachments. ?>

								<p class="download">
									<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php the_title_attribute(); ?>" rel="enclosure" type="<?php echo get_post_mime_type(); ?>"><?php printf( __( '下载 &quot;%1$s&quot;', 'uridimmu' ), the_title( '<span class="fn">', '</span>', false) ); ?></a>
								</p><!-- .download -->

							<?php endif; ?>

							<?php the_content( __( '更多 <span class="meta-nav">&rarr;</span>', 'uridimmu' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( '页面:', 'uridimmu' ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

						<?php do_atomic( 'close_entry' ); // uridimmu_close_entry ?>

					</article><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // uridimmu_after_entry ?>

					<?php if ( wp_attachment_is_image( get_the_ID() ) ) { // Only show attachment meta for images for now. ?>

						<div class="attachment-meta">

							<?php uridimmu_image_info(); ?>

							<?php $gallery = do_shortcode( sprintf( '[gallery id="%1$s" exclude="%2$s" columns="7" numberposts="21" orderby="rand"]', $post->post_parent, get_the_ID() ) ); ?>

							<?php if ( !empty( $gallery ) ) { ?>
								<div class="image-gallery">
									<h3><?php _e( 'Gallery', 'uridimmu' ); ?></h3>
									<?php echo $gallery; ?>
								</div>
							<?php } ?>

						</div><!-- .attachment-meta -->

					<?php } ?>

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
