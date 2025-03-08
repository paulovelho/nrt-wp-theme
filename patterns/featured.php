<?php
/**
 * Title: Featured
 * Slug: nrt/featured
 * Categories: home
 * Inserter: no
 */
?>

<!-- highlight -->
<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":1},"layout":{"type":"constrained","wideSize":"1400px"}} -->
<div class="wp-block-query highlight-post">

	<!-- wp:post-template {"align":"wide"} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
		<!-- wp:post-featured-image {"aspectRatio":"16/9","height":""} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<div class="main-post-call">
				<div class="title">
					<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
					<!-- wp:post-excerpt {"isLink":true,"fontSize":"medium"} /-->
				</div>
				<div class="date">
					<!-- wp:post-date {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"1px","fontSize":"0.8rem"}}} /-->
				</div>
			</div>
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->

</div>
<!-- /wp:query -->
