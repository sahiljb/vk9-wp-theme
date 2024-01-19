<?php
$class_name = 'nutrition-col-info';

if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

?>


<div class="<?php echo esc_attr($class_name); ?>">
    <div class="container-nci">
        <div class="row">
            <div class="col-6 nci_image" style="background-image: url(<?php the_field('left_image'); ?>);">
                <img src="<?php the_field('left_image'); ?>" alt="">
            </div>
            <div class="col-6 nci_content">
                <div class="info_nci_content">
                    <h2><?php the_field('title'); ?></h2>
                    <ul class="list-nci">
                        <?php if (have_rows('list_items')) : ?>
                            <?php while (have_rows('list_items')) : the_row(); ?>
                                <li>
                                    <h4><?php the_sub_field('title'); ?></h4>
                                    <p><?php the_sub_field('descriptions'); ?></p>

                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <a href="<?php the_field('button_link'); ?>" class="btn btn-view-more"><?php the_field('button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>