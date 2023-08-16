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
            <!-- <form action="" class="book-form">
                <div class="book-form__header">
                    Забронировать <span class="colored--yellow">авторский тур</span>
                </div>
                <div class="book-form__input-container">
                    <select name="tourChoose" id="tourChoose">
                        <option value="Выберите тур">Выберите тур</option>
                        <option value="Tour 1">Tour 1</option>
                    </select>
                    <select name="excursionChoose" id="excursionChoose">
                        <option value="Выберите экскурсию">Выберите экскурсию</option>
                        <option value="Excursion 1">Excursion 1</option>
                    </select>
                    <input type="text" placeholder="Выберите дату" onfocus="(this.type='date')" name="dateChoose"
                        id="dateChoose">
                    <input type="text" name="userName" id="userName" placeholder="Ваше имя">
                    <input type="tel" name="userPhone" id="userPhone" placeholder="Номер телефона">
                    <input type="email" name="userEmail" id="userEmail" placeholder="Электронная почта">
                    <textarea name="userComment" id="userComment" cols="30" rows="10"
                        placeholder="Комментарий"></textarea>
                </div>
                <button type="submit" class="submit-form__button">Забронировать</button>
                <span class="form-caption">
                    Нажимая, вы даете согласие на <a href="#" target="_blank">обработку персональных данных</a>.
                </span>
            </form> -->
            <?php echo do_shortcode('[contact-form-7 id="d053966" title="BookForm" html_class="book-form"]'); ?>
        </div>
    </main>
    <div class="modal-callback js-hide">
    <?php echo do_shortcode('[contact-form-7 id="9f58c43" title="CallbackForm"]'); ?>
    </div>

    <?php get_footer()?>