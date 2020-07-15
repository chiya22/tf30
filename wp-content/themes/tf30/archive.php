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

            <div class="archive-head m_description">
                <div class="archive-lead">ARCHIVE</div>
                <h1 class="archive-title m_category"><?php the_archive_title(); ?></h1><!-- /archive-title -->
                <div class="archive-description">
                    <p>
                        <?php the_archive_description(); ?>
                    </p>
                </div><!-- /archive-description -->
            </div><!-- /archive-head -->

            <!-- entries -->
            <?php get_template_part('template-parts/entries'); ?>

            <!-- pagenation -->
            <?php get_template_part('template-parts/pagenation'); ?>

        </main><!-- /primary -->

        <!-- secondary -->
        <?php get_sidebar(); ?>

    </div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>
