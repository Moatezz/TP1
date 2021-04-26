<?php 
/**
 * The template for displaying index page
 *
 * @version    0.1.40
 * @package    stylish-news
 * @author     Zidithemes
 * @copyright  Copyright (C) 2021 zidithemes.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */
?>

<?php get_header(); ?>

	


<?php

$stylish_news_index_cn = esc_html(get_theme_mod('stylish_news_index_class_name_settings'));
$stylish_news_feature_change_style = esc_html(get_theme_mod('stylish_news_feature_change_style_settings'));

$is_elementor_theme_exist = function_exists( 'elementor_theme_do_location' );


if ( ! $is_elementor_theme_exist || ! elementor_theme_do_location( 'index' ) ) {

?>

<div id="content" class="page-content">

	<div class="flowid  
			<?php if ( !empty( $stylish_news_index_cn )): ?>
					<?php echo esc_attr($stylish_news_index_cn); ?>
				<?php else: ?> 
					<?php echo 'stylish-news-index-two'; ?>
			<?php endif; ?> ">


		<!-- BEGIN SHOW -->
        <div class="mg-auto wid-90 mobwid-90">
        	<div class="
                        <?php if ( !empty( $stylish_news_feature_change_style )): ?>
                            <?php echo esc_attr($stylish_news_feature_change_style); ?>
                            <?php else: ?> 
                            <?php echo 'stylish-news-feature'; ?>
                        <?php endif; ?>
                        stylish-news-no-feature">
				<div class="stylish-news-show stylish-news-show-mob-no dsply-fl fl-wrap jc-sp-btw">
					<div class="left-side wid-33 mobwid-100">
					<?php $stylish_news_index_blog_posts = new WP_Query( array( 'posts_per_page' => 1, 'paged' => $paged ) );

		                        if ( $stylish_news_index_blog_posts->have_posts() ) : while ( $stylish_news_index_blog_posts->have_posts() ) : $stylish_news_index_blog_posts->the_post(); ?>

		                        <div class="wid-100 mobwid-100 stylish-news-show-items relative">
			                        	<?php if ( has_post_thumbnail()) : ?>
						                <a href="<?php the_permalink(); ?>"  >
						                    <?php the_post_thumbnail(); ?>
						                </a>
						                <?php else: ?>
						                	<a href="<?php the_permalink(); ?>"  >
							                    <div class="user-no-img-items">
							                        <div class="user-no-img-items-inner text-center">
							                            <div class=""><?php esc_html_e( 'No Image', 'stylish-news' ); ?></div>
							                        </div>
							                    </div>
						                	</a>
						                <?php endif; ?>
							            <div class="stylish-news-show-items-content text-center">
							                <div class="date"><?php the_time(get_option('date_format')); ?></div>
							                <h5>
							                	<a href="<?php the_permalink(); ?>"  >
							                        <?php the_title(); ?>
							                    </a>
							                </h5>
							                <p>
							                	<a class="excerpt" href="<?php the_permalink(); ?>">
							                		<?php the_excerpt(__('Read more &raquo;', 'stylish-news')); ?>
							                	</a>
							                </p>
							            </div>
							        
		                        </div>

						<?php endwhile; else : ?>
								<h2><?php esc_html__('No posts Found!', 'stylish-news'); ?></h2>
								<?php wp_reset_postdata(); ?>
						<?php endif; ?>	

					</div>
					<div class="middle-side wid-33 dsply-fl fl-wrap jc-sp-btw mobwid-100">
						<?php $stylish_news_index_middle_side_blog_posts = new WP_Query( array( 'posts_per_page' => 3, 'paged' => $paged ) );

		                        if ( $stylish_news_index_middle_side_blog_posts->have_posts() ) : while ( $stylish_news_index_middle_side_blog_posts->have_posts() ) : $stylish_news_index_middle_side_blog_posts->the_post(); ?>

		                        <div class="wid-49 dsply-fl mobwid-100 stylish-news-show-items relative">
		                        		<div class="wid-100 relative stylish-news-show-items-link">
				                        	<?php if ( has_post_thumbnail()) : ?>
							                <a href="<?php the_permalink(); ?>"  >
							                    <?php the_post_thumbnail(); ?>
							                </a>
							                <?php else: ?>
							                	<a href="<?php the_permalink(); ?>"  >
								                    <div class="user-no-img-items">
								                        <div class="user-no-img-items-inner text-center">
								                            <div class=""><?php esc_html_e( 'No Image', 'stylish-news' ); ?></div>
								                        </div>
								                    </div>
							                	</a>
							                <?php endif; ?>
						            	</div>
							            <div class="wid-100 jc-center ai-center dsply-fl stylish-news-show-items-content text-center">
							            	<div class="stylish-news-show-items-content-inner">
								                <div class="date"><?php the_time(get_option('date_format')); ?></div>
								                <h5>
								                	<a href="<?php the_permalink(); ?>"  >
								                        <?php the_title(); ?>
								                    </a>
								                </h5>
								                <p class="para">
								                	<a class="excerpt" href="<?php the_permalink(); ?>">
								                		<?php the_excerpt(__('Read more &raquo;', 'stylish-news')); ?>
								                	</a>
								                </p>
							            	</div>
							            </div>
							        
		                        </div>

						<?php endwhile; else : ?>
								<h2><?php esc_html__('No posts Found!', 'stylish-news'); ?></h2>
								<?php wp_reset_postdata(); ?>
						<?php endif; ?>	
					</div>

					<div class="right-side wid-33 mobwid-100">
					<?php $stylish_news_index_right_blog_posts = new WP_Query( array( 'posts_per_page' => 4, 'paged' => $paged ) );

		                        if ( $stylish_news_index_right_blog_posts->have_posts() ) : while ( $stylish_news_index_right_blog_posts->have_posts() ) : $stylish_news_index_right_blog_posts->the_post(); ?>

		                        <div class="wid-100 mobwid-100 stylish-news-show-items relative">
			                        	<?php if ( has_post_thumbnail()) : ?>
						                <a href="<?php the_permalink(); ?>"  >
						                    <?php the_post_thumbnail(); ?>
						                </a>
						                <?php else: ?>
						                	<a href="<?php the_permalink(); ?>"  >
							                    <div class="user-no-img-items">
							                        <div class="user-no-img-items-inner text-center">
							                            <div class=""><?php esc_html_e( 'No Image', 'stylish-news' ); ?></div>
							                        </div>
							                    </div>
						                	</a>
						                <?php endif; ?>
							            <div class="stylish-news-show-items-content text-center">
							                <div class="date"><?php the_time(get_option('date_format')); ?></div>
							                <h5>
							                	<a href="<?php the_permalink(); ?>"  >
							                        <?php the_title(); ?>
							                    </a>
							                </h5>
							                <p>
							                	<a class="excerpt" href="<?php the_permalink(); ?>">
							                		<?php the_excerpt(__('Read more &raquo;', 'stylish-news')); ?>
							                	</a>
							                </p>
							            </div>
							        
		                        </div>

						<?php endwhile; else : ?>
								<h2><?php esc_html__('No posts Found!', 'stylish-news'); ?></h2>
								<?php wp_reset_postdata(); ?>
						<?php endif; ?>	

					</div>	

				</div>
			</div>
		</div>
		<!-- END SHOW -->

	    <div class="mg-auto wid-90 mobwid-90">
	        
	        <div class="inner dsply-fl fl-wrap jc-sp-btw">
	            
	            <div class="wid-70-5 mobwid-100 blog-2-col-inner">
	            	

	            	
                    <!-- BEGIN STYLISH NEWS DIFF-->

                    <div class="stylish-news-no-diff">
                    	<div class="stylish-news-diff dsply-fl fl-wrap">

	                        <div class="left-side wid-50 mobwid-100">
	                        <?php $stylish_news_diff_blog_posts = new WP_Query( array( 'posts_per_page' => 5, 'paged' => $paged ) );

	                                    if ( $stylish_news_diff_blog_posts->have_posts() ) : while ( $stylish_news_diff_blog_posts->have_posts() ) : $stylish_news_diff_blog_posts->the_post(); ?>

	                                    <div class="wid-100 mobwid-100 stylish-news-diff-items relative">
	                                            <?php if ( has_post_thumbnail()) : ?>
	                                            <a href="<?php the_permalink(); ?>"  >
	                                                <?php the_post_thumbnail(); ?>
	                                            </a>
	                                            <?php else: ?>
	                                                <a href="<?php the_permalink(); ?>"  >
	                                                    <div class="user-no-img-items">
	                                                        <div class="user-no-img-items-inner text-center">
	                                                            <div class=""><?php esc_html_e( 'No Image', 'stylish-news' ); ?></div>
	                                                        </div>
	                                                    </div>
	                                                </a>
	                                            <?php endif; ?>
	                                            <div class="stylish-news-diff-items-content text-left">
	                                                <h5><a href="<?php the_permalink(); ?>"  >
	                                                        <?php the_title(); ?>
	                                                    </a>
	                                                </h5>
	                                                <div class="date"><?php the_time(get_option('date_format')); ?></div>
	                                                <p>
	                                                	<a class="excerpt" href="<?php the_permalink(); ?>">
	                                                		<?php the_excerpt(__('Read more &raquo;', 'stylish-news')); ?>
	                                                	</a>
	                                                </p>
	                                            </div>
	                                        
	                                    </div>

	                            <?php endwhile; else : ?>
		                            <h2><?php esc_html__('No posts Found!', 'stylish-news'); ?></h2>
		                            <?php wp_reset_postdata(); ?>
	                            <?php endif; ?> 

	                        </div>
	                        <div class="right-side wid-50 mobwid-100">
	                            <?php $stylish_news_right_diff_side_blog_posts = new WP_Query( array( 'posts_per_page' => 9, 'paged' => $paged ) );

	                                    if ( $stylish_news_right_diff_side_blog_posts->have_posts() ) : while ( $stylish_news_right_diff_side_blog_posts->have_posts() ) : $stylish_news_right_diff_side_blog_posts->the_post(); ?>

	                                    <div class="wid-100  mobwid-100 stylish-news-diff-items relative">
	                                        <div class="stylish-news-diff-items-inner dsply-fl jc-sp-btw">
	                                            <div class="wid-34 relative stylish-news-diff-items-link">
	                                                <?php if ( has_post_thumbnail()) : ?>
	                                                <a href="<?php the_permalink(); ?>"  >
	                                                    <?php the_post_thumbnail(); ?>
	                                                </a>
	                                                <?php else: ?>
	                                                    <a href="<?php the_permalink(); ?>"  >
	                                                        <div class="user-no-img-items">
	                                                            <div class="user-no-img-items-inner text-center">
	                                                                <div class=""><?php esc_html_e( 'No Image', 'stylish-news' ); ?></div>
	                                                            </div>
	                                                        </div>
	                                                    </a>
	                                                <?php endif; ?>
	                                            </div>
	                                            <div class="wid-65 stylish-news-diff-items-content text-left">
	                                                <div class="stylish-news-diff-items-content-inner">
	                                                    <h5>
	                                                    	<a href="<?php the_permalink(); ?>"  >
	                                                            <?php the_title(); ?>
	                                                        </a>
	                                                    </h5>
	                                                    <div class="date"><?php the_time(get_option('date_format')); ?></div>
	                                                    <p class="para">
	                                                        <a class="excerpt" href="<?php the_permalink(); ?>">
	                                                            <?php the_excerpt(__('Read more &raquo;', 'stylish-news')); ?>
	                                                        </a>
	                                                    </p>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>

	                            <?php endwhile; else : ?>
	                                <h2><?php esc_html__('No posts Found!', 'stylish-news'); ?></h2>
	                            <?php wp_reset_postdata(); ?>
	                            <?php endif; ?> 
	                        </div>
                    	</div>
                    </div>


                    <!-- END STYLISH NEWS DIFF -->
	            	

	            	
	                <div class="mg-tp dsply-fl fl-wrap">
	                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

	                	<?php get_template_part('content', get_post_format());  ?>
	                	 
	                	
	                    <?php endwhile; else : ?>
							<h2><?php esc_html__('No posts Found!', 'stylish-news'); ?></h2>
	                    <?php endif; ?>

	                </div>
	                <ul class="pagination flowid">
					   <?php the_posts_pagination(); ?>
					</ul>
	            </div>
	            <?php get_sidebar(); ?>

	        </div>

	    </div>
	</div>
</div>

<?php } ?>


<?php get_footer(); ?>