<?php get_header(); ?>
<main class="l-container">
<article>
    <!-- タイトル -->
    <h2 class="post-title"><?php the_title(); ?>
    </h2>

    <!-- 日付とカテゴリ -->
    <p class="post-meta">
        <?php echo get_the_date('Y.n.j'); ?> |
		<span class="category">
			<?php
					$categories = get_the_category($post->ID);
					if ($categories) {
						$category_names = array_map(function($cat) {
							return $cat->name;
						}, $categories);
						echo implode(', ', $category_names);
					}
					?>
		</span>
    </p>

    <!-- サムネイル -->
    <?php if (has_post_thumbnail()): ?>
        <div class="post-thumbnail">
                <?php the_post_thumbnail('custom-thumb'); ?>
        </div>
    <?php endif; ?>

    <!-- 抜粋 -->
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>
</article>
</main>

<?php get_footer(); ?>