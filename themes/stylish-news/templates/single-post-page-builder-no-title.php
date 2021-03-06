<?php 
/**
 * The template for displaying details of the posts
 *
 * @version    0.1.40
 * @package    stylish-news
 * @author     Zidithemes
 * @copyright  Copyright (C) 2021 zidithemes.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 * Template Name: Single Post Page Builder No Title
 * Template Post Type: post
 * 
 */
?>

<?php get_header(); ?>


<main id="main" class="site-main" role="main">

	<header class="page-header">
		<h1 class="entry-title"></h1>
	</header>

	<div id="content"  class="page-content">

		<div class="flowid stylish-news-single-page-builder-no-title">

		    <div class="mg-auto wid-100 mobwid-100">
		        
		        <div class="inner dsply-fl fl-wrap">
		            
		            <div class="wid-100 blog-2-col-inner">
		            	
		                <div class=" dsply-fl fl-wrap">
		                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

		                	
		                	
		                	<div class="items-guten wid-100 mobwid-100">
		                            <div class="items-inner dsply-fl fl-wrap  mn-dz">
		                                <div class="img-box wid-100 relative">
		                                	<div class="title-header">
			                                	
	                                    	</div>

		                                    <div class="details-box ">
		                                        <div class="details-box-inner">
		                                            
		                                            <p><?php the_content(); ?></p>
		                                            
		                                            
		                                            
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>

		                            

		                    </div>
				            <div class="stylish_news_link_pages">
					            <?php wp_link_pages(); ?>
					        </div>
			                    <?php endwhile; else : ?>
								<h2><?php esc_html__('No posts Found', 'stylish-news'); ?></h2>
			                    <?php endif; ?>
		                    
		                    <!-- SIDEBAR -->
		                </div>
		                
		            </div>

		        </div>
		    </div>
		</div>


	</div>

</main>

<?php get_footer(); ?>