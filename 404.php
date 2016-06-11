<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package marketingblog
 */

get_header(); ?>
<div class="container main-content-area">
	<div class="row">
		<div class="main-content-inner col-sm-12 col-md-10 col-md-offset-1">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div class="post-inner-content">
						<div class="row">
                            <div class="col-md-6">
                                <img alt="<?php  esc_html_e('Go Back Home', 'marketingblog-lite');?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/img/404.jpg" />
                            </div>
                            <div class="col-md-6">
                                <header class="page-header">
                                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'marketingblog-lite' ); ?></h1>
                                </header><!-- .page-header -->
                                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'marketingblog-lite' ); ?></p>
                                <?php get_search_form(); ?>
                                <br /><br />
                                <div class="text-center">
                                    <a class="btn btn-primary" href="<?php echo site_url(); ?>"><?php esc_html_e('Back to Home', 'marketingblog-lite');?></a>
                                </div>

                            </div>
                        </div>
						<div class="row">
                            <div class="col-md-12">
                                <section class="error-404 not-found">


                                    <div class="page-content">


                                        <div class="row">
                                            <div class="col-md-6 not-found-widget">
                                                <?php the_widget( 'WP_Widget_Recent_Posts', 'title='.esc_html__( 'Recent Posts', 'marketingblog-lite' ) ); ?>
                                            </div>

                                            <div class="col-md-6 not-found-widget">
                                                <?php if ( marketingblog_lite_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
                                                    <div class="widget_categories">
                                                        <h2 class="widgettitle"><?php esc_html_e( 'Most Used Categories', 'marketingblog-lite' ); ?></h2>
                                                        <ul>
                                                            <?php
                                                            wp_list_categories( array(
                                                                'orderby'    => 'count',
                                                                'order'      => 'DESC',
                                                                'show_count' => 1,
                                                                'title_li'   => '',
                                                                'number'     => 10,
                                                            ) );
                                                            ?>
                                                        </ul>
                                                    </div><!-- .widget -->
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 not-found-widget">
                                                <?php
                                                /* translators: %1$s: smiley */
                                                $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'marketingblog-lite' ), convert_smilies( ':)' ) ) . '</p>';
                                                the_widget( 'WP_Widget_Archives', 'dropdown=1&title='.esc_html__( 'Archives', 'marketingblog-lite' ), "after_title=</h2>$archive_content" );
                                                ?>
                                            </div>

                                            <div class="col-md-6 not-found-widget">
                                                <?php the_widget( 'WP_Widget_Tag_Cloud', 'title='.esc_html__( 'Tags', 'marketingblog-lite' ) ); ?>
                                            </div>
                                        </div>


                                </section><!-- .error-404 -->
                            </div>
                        </div>
					</div>
				</main><!-- #main -->
		</div>

		</div>
	</div>
</div>
<?php get_footer(); ?>
