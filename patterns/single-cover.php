<?php
/**
 * Title: Single Cover
 * Slug: nrt/single-cover
 * Categories: single
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:cover {"overlayColor":"primary","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<div class="wp-block-cover" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<span aria-hidden="true"
			class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"primary","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
			<div class="wp-block-cover"
				style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<span aria-hidden="true"
					class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">

						<!-- wp:spacer -->
						<div style="height:300px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","wideSize":"1100px"}} -->
						<div class="wp-block-group single-title"
							style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
							<div class="post-title">
								<!-- wp:post-title {"style":{"typography":{"fontSize":"4.6rem"}}, "class": "single-title"} /-->
							</div>
							<div class="post-title-sub">
								<div class="excerpt">
									<!-- wp:post-excerpt {"isLink":false} /-->
								</div>
								<div class="meta">
									<!-- wp:template-part {"slug":"post-meta","area":"uncategorized"} /-->
								</div>
							</div>

						</div>
						<!-- /wp:group -->

						<!-- wp:spacer -->
						<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->