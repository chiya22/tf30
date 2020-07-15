<?php if (have_posts()) : ?>
    <?php
    $ids = array(45, 10, 12);
    ?>
    <!-- pickup -->
    <div id="pickup">
        <div class="inner">

            <div class="pickup-items">

                <?php foreach ($ids as $id) : ?>
                    <?php
                    $post = get_post($id);
                    setup_postdata($post)
                    ?>
                    <a href="<?php the_permalink() ?>" class="pickup-item">
                        <div class="pickup-item-img">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                            }
                            ?>
                            <div class="pickup-item-tag"><?php my_the_post_category(false) ?></div><!-- /pickup-item-tag -->
                        </div><!-- /pickup-item-img -->
                        <div class="pickup-item-body">
                            <h2 class="pickup-item-title"><?php the_title() ?></h2><!-- /pickup-item-title -->
                        </div><!-- /pickup-item-body -->
                    </a><!-- /pickup-item -->

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

            </div><!-- /pickup-items -->
        </div><!-- /inner -->
    </div><!-- /pickup -->
<?php endif ?>