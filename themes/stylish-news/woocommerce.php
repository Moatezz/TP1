<?php 
/**
 * The template for displaying woocommerce page
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

	


<div id="content" class="page-content">

	<div class="flowid stylish-news-index stylish-news-woocommerce">

	    <div class="mg-auto wid-90 mobwid-90">
	        
	        <div class="inner dsply-fl fl-wrap">
	            
	            <div class="wid-99 mobwid-100 blog-2-col-inner">
	            	
	                <div class="mg-tp dsply-fl fl-wrap">

	                	<div id="" class="items wid-99 mobwid-100" >
					        <div class="items-inner dsply-fl fl-wrap">
					            <div class="img-box wid-100 relative">

					            	<?php  woocommerce_content(); ?>


					            </div>
					        </div>
						</div>
	                	 
	                	

	                </div>
	            </div>

	        </div>
	    </div>
	</div>
</div>


<?php get_footer(); ?>