<?php
$post = get_post();
$terms = get_the_terms( $post->ID, 'blog_category' ); 

?>

<div class="service-card" href="<?=get_post_permalink()?>">
    <img src="<?php echo get_field('service_image');?>" alt="">
    <div class="service-card__content">
        <div class="service-card__header"><?=get_the_title() ?></div>
        <div class="service-card__controller"></div>
        <div class="service-card__expanded-content">
            <?php
            if( have_rows('service_info') ):
            while( have_rows('service_info') ) : the_row();
                $sub_value = get_sub_field('service_info_name');
            ?>
            <div class="list-item">
                <div class="list-item__bullet"></div>
                <div class="list-item__content"><?php echo $sub_value?></div>
            </div>
            <?php
            endwhile;
            endif;
            ?>
        </div>
    </div>
</div>