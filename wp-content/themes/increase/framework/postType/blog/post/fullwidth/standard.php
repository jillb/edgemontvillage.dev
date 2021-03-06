<?php
/**
 * @package WordPress
 * @subpackage Increase
 * @since Increase 1.0
 * 
 * Blog Post Full Width Standard Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_post_featured_image_show = get_post_meta(get_the_ID(), 'cmsms_post_featured_image_show', true);

?>

<!--_________________________ Start Standard Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_info">
		<?php cmsms_post_date('post', 'post'); ?>
		<span class="cmsms_post_format_img"></span>
		<div class="cmsms_like"><?php cmsmsLike(); ?></div>
	</div>
	<div class="ovh">
		<header class="entry-header">
			<?php 
				if (!post_password_required()) {
					if (has_post_thumbnail() && $cmsms_post_featured_image_show == 'true') {
						cmsms_thumb(get_the_ID(), 'full-thumb', false, 'img_' . get_the_ID(), true, false, true, true, false);
					}
				}
			?>
			<?php cmsms_heading_nolink(get_the_ID(), 'post', true) . "\n"; ?>
			<div class="cmsms_post_info">
				<?php 
					cmsms_meta('post', 'post');
					
					if (!post_password_required()) {
						cmsms_comments('post');
					} 
				?>
			</div>
		</header>
		<?php 
			echo '<div class="entry-content">' . "\n";
			
			the_content();
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . __('Pages', 'cmsmasters') . ':</strong>', 
				'after' => '</div>' . "\n", 
				'link_before' => ' [ ', 
				'link_after' => ' ] ' 
			));
			
			echo "\t\t" . '</div>' . "\n";
			
			cmsms_content_composer(get_the_ID());
		?>
		<div class="cl"></div>
		<div class="divider"></div>
		<footer class="entry-meta">
			<?php cmsms_tags(get_the_ID(), 'post', 'post'); ?>
		</footer>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

