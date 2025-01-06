<?php
/* Template Name: プロフィールページ */
get_header();
?>

<main class="l-container">
			<section class="p-hero">
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ogp.webp">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ogp.webp" alt="サイトのイメージ画像">
				</picture>
			</section>

    <section class="p-main">
        <!-- 固定の情報 -->
       <table>
            <tbody>
                <tr>
                    <th>サイト責任者</th>
                    <td><?php echo esc_html(get_field('company_name')); ?></td>
                </tr>
                <tr>
                    <th>会社所在地</th>
                    <td><?php echo nl2br(esc_html(get_field('company_address'))); ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?php echo esc_html(get_field('company_phone')); ?></td>
                </tr>
                <tr>
                    <th>受付時間</th>
                    <td><?php echo nl2br(esc_html(get_field('business_hours'))); ?></td>
                </tr>
            </tbody>
        </table>

        <!-- 管理画面で編集可能な本文 -->
        <?php
        while (have_posts()): the_post();
            the_content();
        endwhile;
        ?>
    </section>



</main>

<?php get_footer(); ?>
