<?php
/**
 * Title: Random Posts
 * Slug: nrt/random-posts
 * Categories: home
 * Inserter: no
 */
?>

<!-- wp:query {"query":{"perPage":"2","pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"rand","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"layout":{"type":"constrained","wideSize":"1400px"}} -->
<div class="wp-block-query random-posts">
	<h3>Mais posts:</h3>
	<!-- wp:post-template {"align":"wide"} -->

	<!-- wp:pattern {"slug":"nrt/home-post"} /-->

	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->