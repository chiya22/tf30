<?php get_header(); ?>

<!-- content -->
<div id="content" class="m_one m_404">
    <div class="inner">

        <!-- primary -->

        <main id="primary">

            <!-- breadcrumb -->
            <div class="breadcrumb">
                <?php bcn_display(); ?>
            </div><!-- /breadcrumb -->

            <div class="archive-head">
                <div class="archive-lead">SEARCH</div>
                <h1 class="archive-title m_search"><?php the_search_query(); ?>の検索結果：<?php echo $wp_query->found_posts; ?>件</h1><!-- /archive-title -->
            </div><!-- /archive-head -->
            <?php
            if (have_posts()) :
            ?>
                <div class="entries m_horizontal">
                    <?php
                    while (have_posts()) :
                        the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="entry-item">
                        <div class="entry-item-img">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg/png" alt="">';
                            }
                            ?>
                        </div>
                        <div class="entry-item-body">
                            <div class="entry-item-tag">
                                <?php my_the_post_category(false); ?>
                            </div>
                            <time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
                            <h2 class="entry-item-title"><?php the_title(); ?></h2>
                            <div class="entry-item-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <!-- pagenation -->
            <?php get_template_part('template-parts/pagenation'); ?>

        </main>
    </div>
</div>
<?php get_footer(); ?>