<?php if (have_posts()) : ?>
    <!-- entries -->
    <div class="entries m_horizontal">

        <?php while (have_posts()) : the_post(); ?>

            <!-- entry-item -->
            <a href="<?php the_permalink() ?>" class="entry-item">
                <!-- entry-item-img -->
                <div class="entry-item-img">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/entry1.png" alt="">';
                    }
                    ?>
                </div><!-- /entry-item-img -->

                <!-- entry-item-body -->
                <div class="entry-item-body">
                    <div class="entry-item-meta">
                        <div class="entry-item-tag"><?php my_the_post_category(false) ?>
                        </div>
                        <time class="entry-item-published" datetime="" <?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                        <!-- /entry-item-published -->
                    </div><!-- /entry-item-meta -->
                    <h2 class="entry-item-title"><?php the_title() ?>
                    </h2><!-- /entry-item-title -->
                    <div class="entry-item-excerpt">
                        <p><?php the_excerpt() ?>
                        </p>
                    </div><!-- /entry-item-excerpt -->
                </div><!-- /entry-item-body -->
            </a><!-- /entry-item -->

        <?php endwhile; ?>

    </div><!-- /entries -->
<?php endif; ?>