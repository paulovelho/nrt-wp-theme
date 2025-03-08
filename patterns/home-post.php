<?php
/**
 * Title: Home Post
 * Slug: nrt/home-post
 * Categories: home
 * Inserter: no
 */
?>

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"inherit":false}} -->
	<div class="wp-block-group more-posts" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<div class="other-titles">
			<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
		</div>
		<!-- wp:post-featured-image {"aspectRatio":"16/9","height":"", "isLink": "true"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<div class="more-post-call">
				<div class="question">
					<!-- wp:post-excerpt {"isLink":true} /-->
				</div>
				<div class="date">
					<!-- wp:post-date {"format": "M / Y", "style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"1px","fontSize":"0.8rem"}}} /-->
				</div>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
