<?php get_header(); ?>

	<main class="l-container">

		<section class="p-hero">
			<picture>
				<source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img-demo01_sp.webp">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img-demo01.webp" alt="">
			</picture>
		</section>
      <section class="p-blog">
    <ul>
            <?php
                // 投稿を取得
                $posts = get_posts([
                    'post_type' => 'post', // 投稿タイプ
                    'posts_per_page' => 3, // 表示件数
                ]);

                // foreach文で投稿を出力
                foreach ($posts as $post):
                    setup_postdata($post); // 投稿データをセット
            ?>
            <li>
                <!-- サムネイル -->
					<?php if (has_post_thumbnail($post->ID)): ?>
										<a href="<?php echo get_permalink($post->ID); ?>">
											<img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo esc_attr(get_the_title($post->ID)); ?>">
										</a>
                <?php endif; ?>

                <!-- 日付 -->
                <p>
					<?php echo get_the_date('Y.n.j', $post->ID); ?>
					<span class="post-category">
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
                <!-- タイトル -->
                <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo esc_html(get_the_title($post->ID)); ?></a></h3>
            </li>
        <?php endforeach; 
        wp_reset_postdata(); // 投稿データのリセット
        ?>
    </ul>
</section>


		<section class="p-profile">
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('profile'))); ?>">私たちのプロフィールはこちら</a>
		</section>

	</main>
    <?php get_footer(); ?>