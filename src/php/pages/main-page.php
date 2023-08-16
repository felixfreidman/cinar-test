<?php /* Template Name: Main Page */?>
<?php get_header()?>

<main class="main-page">
        <div class="service-section">
            <div class="section-header">
                Наши <span class="colored--yellow">услуги</span>
            </div>
            <div class="service-cards">
                <?php
                $mypost = array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'orderby' => 'name',
                    'order' => 'ASC',
                );
                 ?>
                 <?php
                $loop = new WP_Query($mypost);
                ?>
                <?php while ($loop->have_posts()): $loop->the_post();?>
		                <?php get_template_part('/templates/service-card');?>
		                <?php endwhile;?>
                <?php wp_reset_postdata();?>
            </div>
        </div>
        <div class="book-section">
            <?php echo do_shortcode('[contact-form-7 id="d053966" title="BookForm" html_class="book-form"]'); ?>
        </div>
    </main>
    <div class="modal-callback js-hide">
    <?php echo do_shortcode('[contact-form-7 id="9f58c43" title="CallbackForm" html_class="call-form"]'); ?>
    </div>

    <?php get_footer()?>