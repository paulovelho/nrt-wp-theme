<?php
/**
 * Title: Footer
 * Slug: nrt/footer
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained","wideSize":"1400px"}} -->
<div
	class="wp-block-group has-background-color has-primary-background-color has-text-color has-background has-link-color"
	style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top"
		style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0">
		<!-- wp:column {"verticalAlignment":"top","width":"38.1%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:38.1%">
			<!-- wp:site-title /-->
			<!-- wp:site-tagline {"fontSize":"small"} /-->
			<div class="paulovelho-credits">
				Produção:<br>
				<img src="<?= esc_url(get_stylesheet_directory_uri() . '/images/zebras_white.png') ?>" class="footer-zebras">
				<a href="https://paulovelho.com.br" class="footer-credits">Paulo Velho</a>
			</div>
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"28.57%"} -->
		<div class="wp-block-column footer-column-right is-vertically-aligned-top" style="flex-basis:28.57%">
			<!-- wp:social-links {"iconColor":"background","iconColorValue":"#e9e1e5","iconBackgroundColor":"primary","iconBackgroundColorValue":"#3b2b27","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color">
				<!-- wp:social-link {"url":"https://twitter.com/paulovelho","service":"twitter"} /-->
			</ul>
			<!-- /wp:social-links -->
			<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} /-->
			<p class="has-text-align-right" style="font-size:0.8rem">
			©<?=date("Y")?> nRT
		</p>
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->