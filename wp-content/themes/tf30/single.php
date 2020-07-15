<?php get_header(); ?>

<!-- content -->
<div id="content">
    <div class="inner">

        <!-- primary -->
        <main id="primary">

            <!-- breadcrumb -->
            <div class="breadcrumb">
                <?php bcn_display(); ?>
            </div><!-- /breadcrumb -->


            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>

                    <!-- entry -->
                    <article class="entry">

                        <!-- entry-header -->
                        <div class="entry-header">
                            <div class="entry-label"><?php my_the_post_category(true) ?></div><!-- /entry-item-tag -->
                            <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

                            <!-- entry-meta -->
                            <div class="entry-meta">
                                <time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time><!-- /entry-published -->
                                <time class="entry-updated" datetime="<?php the_modified_date('c'); ?>">最終更新日 <?php the_modified_date('Y/n/j'); ?></time><!-- /entry-updated -->
                            </div><!-- /entry-meta -->

                            <!-- entry-img -->
                            <div class="entry-img">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/entry1.png" alt="">';
                                }
                                ?>
                            </div><!-- /entry-img -->

                        </div><!-- /entry-header -->

                        <!-- entry-body -->
                        <div class="entry-body">
                            <p>
                                <?php the_content(); ?>
                            </p>
                            <?php
                            wp_link_pages(
                                array(
                                    'before' => '<nav class="entry-links">',
                                    'after' => '</nav>',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'next_or_number' => 'number',
                                    'separator' => '',
                                )
                            )
                            ?>
                        </div><!-- /entry-body -->

                        <div class="toiawase" style="text-align: center; margin-bottom: 50px;">
                            <?php echo do_shortcode('[btn link="#"]お問い合わせはこちら（ソース版）[/btn]') ?>
                        </div>

                        <?php
                        $post_tags = get_the_tags();
                        ?>
                        <div class="entry-tag-items">
                            <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
                            <?php my_the_post_tag() ?>
                        </div><!-- /entry-tag-items -->

                        <!-- entry-related -->
                        <?php get_template_part('template-parts/entryrelated'); ?>

                    </article> <!-- /entry -->

            <?php
                endwhile;
            endif;
            ?>


        </main><!-- /primary -->

        <!-- secondary -->
        <?php get_sidebar(); ?>

    </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>