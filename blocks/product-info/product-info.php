<?php
$class_name = 'product-info';

if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($class_name); ?>">
    <div class="container-pi">

        <div class="row">
            <h2><?php the_field('heading'); ?></h2>
        </div>
        <div class="row">
            <div class="col-4">

                <?php
                // odd items form acf repeater field

                if (have_rows('item_list')) :
                    $i = 0;
                    while (have_rows('item_list')) : the_row();
                        $i++;
                        if ($i % 2 != 0) { ?>
                            <div class="product-info-box desktop">
                                <div class="icon">
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="text">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                <?php
                        }
                    endwhile;
                endif;


                ?>

            </div>
            <div class="col-4">
                <?php if (get_field('center_image')) : ?>
                    <img class="main-center-img" src="<?php the_field('center_image'); ?>" alt="">
                <?php endif; ?>

                <div class="list-product-info-box-mobile">

                    <?php

                    if (have_rows('item_list')) {
                        while (have_rows('item_list')) {

                            the_row();
                    ?>
                            <div class="product-info-box mobile">
                                <div class="icon">
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="text">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                    <?php

                        }
                    }

                    ?>

                </div>
                <a href="#" class="btn btn-shop-vk9">Shop VK9</a>
            </div>
            <div class="col-4">
                <?php
                // even 3 items form acf repeater field

                if (have_rows('item_list')) :
                    $i = 0;
                    while (have_rows('item_list')) : the_row();
                        $i++;
                        if ($i % 2 == 0) {
                ?>
                            <div class="product-info-box desktop">
                                <div class="icon">
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="text">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                <?php }
                    endwhile;
                endif;


                ?>

            </div>
        </div>
    </div>
</div>