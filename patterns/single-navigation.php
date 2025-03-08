<?php
/**
 * Title: Single Navigation
 * Slug: nrt/single-navigation
 * Categories: single
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"full","style":{"border":{"width":"0px","style":"none"},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignfull"
		style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0">

		<!-- wp:post-navigation-link {"type":"previous","label":"Anterior: ","showTitle":true} /-->
		<!-- wp:post-navigation-link {"label":"Próximo: ","showTitle":true} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->