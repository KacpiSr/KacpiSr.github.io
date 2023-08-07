<!-- ROLLING TEXT -->
<?php if (get_field('fooret_moving_text_view_or_not', 'options') == 1) : ?>
    <?php if ($fooret_moving_text = get_field('fooret_moving_text', 'options')) : ?>
        <section class="wrapperRollingText">
            <div class="rollingText rollingText__text">
                <?php echo esc_html($fooret_moving_text); ?>&nbsp·&nbsp
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>


<footer>

    <div class="footer">

        <div class="container">

            <div class="footer-border">
                <div class="row">
                    <div class="offset-lg-1 col-lg-3">
                        <div class="footer__left">
                            <div class="footer__left__logo-funktional">
                                <a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/dist/img/logofunktionalfooter.svg"></a>
                            </div>
                            <?php
                            $link = get_field('button_footer', 'options');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="btn btn__white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                            <h5 class="f-h5 f-h5--white"><?php echo get_field('fooret_left_text', 'options'); ?></h5>
                            <div class="footer__left__form-content">
                                <label for="email" class="form-label">
                                    E-mail Address
                                </label>
                            </div>
                            <div class="footer__left__contact">
                                <?php if (have_rows('fooret_left_tel', 'options')) : ?>
                                    <?php while (have_rows('fooret_left_tel', 'options')) :
                                        the_row(); ?>
                                        <?php if ($fooret_left_tel_nr = get_sub_field('fooret_left_tel_nr', 'options')) : ?>
                                            <a href="tel:+<?php echo $fooret_left_tel_nr; ?>">+<?php echo $fooret_left_tel_nr; ?></a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if (have_rows('fooret_left_mail', 'options')) : ?>
                                    <?php while (have_rows('fooret_left_mail', 'options')) :
                                        the_row(); ?>

                                        <?php if ($fooret_left_mail_adress = get_sub_field('fooret_left_mail_adress', 'options')) : ?>
                                            <a href="mailto:<?php echo $fooret_left_mail_adress; ?>"><?php echo $fooret_left_mail_adress; ?></a>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="footer__right">
                            <div class="footer__right__city">
                                <?php if (have_rows('footer_city', 'options')) : ?>
                                    <?php while (have_rows('footer_city', 'options')) :
                                        the_row(); ?>
                                        <?php if ($footer_city_add = get_sub_field('footer_city_add', 'options')) : ?>
                                            <p class="text-main text-main--f16"><?php echo $footer_city_add; ?></p>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="footer__right__content">
                                <?php if (have_rows('footer_right_list', 'options')) : ?>
                                    <?php while (have_rows('footer_right_list', 'options')) :
                                        the_row(); ?>
                                        <div class="footer__right__content__list">
                                            <?php if ($footer_right_list_title = get_sub_field('footer_right_list_title', 'options')) : ?>
                                                <h5 class="f-h5 f-h5--white"> <?php echo $footer_right_list_title; ?></h5>
                                            <?php endif; ?>
                                            <ul class="items-footer">
                                                <?php if (have_rows('footer_right_list_link', 'options')) : ?>
                                                    <?php while (have_rows('footer_right_list_link', 'options')) :
                                                        the_row(); ?>
                                                        <?php
                                                        $link = get_sub_field('footer_right_list_link_item', 'options');
                                                        if ($link) :
                                                            $link_url = $link['url'];
                                                            $link_title = $link['title'];
                                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                                        ?>
                                                            <li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></li>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="footer__right__awards">
                                <div class="footer__right__awards__box">
                                    <?php if (have_rows('footer_right_awards', 'options')) : ?>
                                        <?php while (have_rows('footer_right_awards', 'options')) :
                                            the_row(); ?>
                                            <?php
                                            $footer_right_awards_img = get_sub_field('footer_right_awards_img', 'options');
                                            if ($footer_right_awards_img) : ?>
                                                <div class="footer__right__awards__box__icon">
                                                    <img src="<?php echo esc_url($footer_right_awards_img['url']); ?>" alt="<?php echo esc_attr($footer_right_awards_img['alt']); ?>" />
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                                <div class="footer__right__awards__reviews">
                                    <a href="https://clutch.co/profile/funktional?utm_source=widget&amp;utm_medium=widget_1&amp;utm_campaign=widget&amp;utm_content=logo#summary" target="_blank"><img src="<?php bloginfo('template_url'); ?>/dist/img/awards-logo7.png"></a>
                                </div>
                            </div>
                            <div class="footer__right__bottom">
                                <div class="footer__right__bottom__social">
                                    <a href="https://www.facebook.com/FunktionalAgency/" target="_blank"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5">
                                                <path d="M16.7935 9.3158H13.1965V6.9112C13.1965 6.24746 13.7335 5.70883 14.3956 5.70883H15.5946V2.70312H13.1965C11.2097 2.70312 9.59938 4.31772 9.59938 6.30997V9.3158H7.20117V12.3215H9.59938V21.9398H13.1965V12.3215H15.5946L16.7935 9.3158Z" fill="white" />
                                            </g>
                                        </svg></a>
                                    <a href="https://twitter.com/Funktional" target="_blank"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5">
                                                <path d="M23.2008 4.87679C22.3767 5.24691 21.4917 5.49673 20.5611 5.60783C21.5099 5.03319 22.2387 4.1231 22.5825 3.03891C21.694 3.57039 20.711 3.9582 19.6642 4.16556C18.8254 3.26325 17.6309 2.69922 16.3083 2.69922C13.7701 2.69922 11.7137 4.77842 11.7137 7.3438C11.7137 7.70756 11.7536 8.06282 11.832 8.40251C8.01258 8.2086 4.62654 6.3594 2.35937 3.54916C1.96447 4.23562 1.73762 5.03319 1.73762 5.88454C1.73762 7.49666 2.54912 8.91771 3.78143 9.75137C3.02874 9.7266 2.32016 9.51854 1.70051 9.17036C1.69981 9.18946 1.69981 9.20999 1.69981 9.22839C1.69981 11.4796 3.2836 13.3571 5.38623 13.7838C5.00113 13.8892 4.59503 13.9466 4.17563 13.9466C3.87875 13.9466 3.59168 13.9176 3.31161 13.8638C3.89556 15.708 5.59348 17.0512 7.60368 17.0894C6.03179 18.335 4.05029 19.0788 1.89726 19.0788C1.52616 19.0788 1.15997 19.0568 0.800781 19.0136C2.83409 20.33 5.24969 21.0992 7.84524 21.0992C16.2978 21.0992 20.921 14.0216 20.921 7.88306C20.921 7.68208 20.9154 7.4811 20.907 7.28153C21.8053 6.62691 22.5839 5.80953 23.2008 4.87679Z" fill="white" />
                                            </g>
                                        </svg></a>
                                    <a href="https://www.linkedin.com/company/funktional" target="_blank"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5">
                                                <path d="M2.40591 9.01509H6.62517V21.7122H2.40591V9.01509ZM4.54378 2.89453C3.0997 2.89453 2.15625 3.84258 2.15625 5.08692C2.15625 6.30567 3.07209 7.28128 4.48856 7.28128H4.51547C5.98716 7.28128 6.90366 6.30563 6.90366 5.08692C6.87605 3.84258 5.9872 2.89453 4.54378 2.89453ZM16.9846 8.71683C14.745 8.71683 13.7416 9.9487 13.1819 10.8126V9.01509H8.96137C9.01725 10.2062 8.96137 21.7122 8.96137 21.7122H13.1819V14.6213C13.1819 14.2415 13.2095 13.8631 13.3206 13.591C13.6261 12.8329 14.3205 12.0478 15.4853 12.0478C17.0136 12.0478 17.6239 13.2127 17.6239 14.9188V21.7122H21.8438V14.4314C21.8438 10.5315 19.7624 8.71683 16.9846 8.71683Z" fill="white" />
                                            </g>
                                        </svg></a>
                                    <a href="https://www.instagram.com/funktional_agency/" target="_blank"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5">
                                                <path d="M11.9375 7.36719C8.97456 7.36719 6.51953 9.77989 6.51953 12.7852C6.51953 15.7905 8.93223 18.2032 11.9375 18.2032C14.9428 18.2032 17.3555 15.7481 17.3555 12.7852C17.3555 9.82221 14.9005 7.36719 11.9375 7.36719ZM11.9375 16.2561C10.0328 16.2561 8.46662 14.6899 8.46662 12.7852C8.46662 10.8804 10.0328 9.31428 11.9375 9.31428C13.8423 9.31428 15.4084 10.8804 15.4084 12.7852C15.4084 14.6899 13.8423 16.2561 11.9375 16.2561Z" fill="white" />
                                                <path d="M17.5674 8.47065C18.2453 8.47065 18.7949 7.92107 18.7949 7.24314C18.7949 6.5652 18.2453 6.01562 17.5674 6.01562C16.8894 6.01562 16.3398 6.5652 16.3398 7.24314C16.3398 7.92107 16.8894 8.47065 17.5674 8.47065Z" fill="white" />
                                                <path d="M20.741 4.06748C19.6405 2.92462 18.0744 2.33203 16.2966 2.33203H7.57702C3.89448 2.33203 1.43945 4.78706 1.43945 8.4696V17.1468C1.43945 18.9669 2.03205 20.5331 3.21723 21.6759C4.36009 22.7765 5.8839 23.3267 7.61935 23.3267H16.2543C18.0744 23.3267 19.5982 22.7341 20.6987 21.6759C21.8416 20.5754 22.4342 19.0093 22.4342 17.1892V8.4696C22.4342 6.69182 21.8416 5.16801 20.741 4.06748ZM20.5717 17.1892C20.5717 18.5013 20.1061 19.5595 19.3442 20.2791C18.5823 20.9987 17.5241 21.3796 16.2543 21.3796H7.61935C6.34951 21.3796 5.2913 20.9987 4.5294 20.2791C3.7675 19.5172 3.38654 18.459 3.38654 17.1468V8.4696C3.38654 7.19976 3.7675 6.14155 4.5294 5.37965C5.24898 4.66007 6.34951 4.27912 7.61935 4.27912H16.3389C17.6088 4.27912 18.667 4.66007 19.4289 5.42198C20.1484 6.18388 20.5717 7.24208 20.5717 8.4696V17.1892Z" fill="white" />
                                            </g>
                                        </svg></a>
                                    <a href="https://www.behance.net/funktional" target="_blank"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5">
                                                <path d="M21.893 15.9911C21.6254 16.8807 21.0655 17.6539 20.3038 18.1856C19.5421 18.7173 18.6233 18.9763 17.696 18.9208C15.0064 18.9208 12.944 17.6802 12.944 13.9058C12.8973 13.2905 12.983 12.6724 13.1954 12.0931C13.4078 11.5137 13.7418 10.9867 14.1751 10.5474C14.6084 10.1081 15.1308 9.76673 15.7072 9.54638C16.2835 9.32604 16.9004 9.2318 17.5162 9.27001C19.3999 9.27 22.0006 10.1319 22.0006 14.3196V14.8005H15.4538C15.4328 15.0981 15.4768 15.3966 15.5828 15.6754C15.6888 15.9542 15.8543 16.2065 16.0676 16.4149C16.281 16.6233 16.5372 16.7828 16.8184 16.8822C17.0996 16.9816 17.3991 17.0186 17.696 16.9905C18.0361 17.0155 18.3754 16.9323 18.6653 16.7528C18.9552 16.5733 19.1809 16.3066 19.31 15.9911L21.893 15.9911ZM19.4176 13.3038C19.4275 12.7763 19.2302 12.266 18.868 11.8824C18.5059 11.4987 18.0078 11.2724 17.4806 11.2519C16.2973 11.2519 15.6691 12.0974 15.5259 13.3038H19.4176Z" fill="white" />
                                                <path d="M20 6.88672H15V8.30106H20V6.88672Z" fill="white" />
                                                <path d="M10.3062 12.0087C10.7979 11.8058 11.2111 11.4497 11.4843 10.9934C11.7576 10.537 11.8763 10.0047 11.823 9.47541C11.823 8.20014 11.0476 6.30469 8.01392 6.30469H2V18.6781H7.23846C9.77179 18.6781 10.4438 18.2472 11.151 17.5581C11.4887 17.2245 11.757 16.8273 11.9404 16.3895C12.1239 15.9516 12.2188 15.4818 12.2198 15.0071C12.2816 14.3654 12.1268 13.7214 11.78 13.178C11.4331 12.6345 10.9143 12.2229 10.3062 12.0087ZM4.5 8.30225H8C8.39782 8.30225 8.77936 8.46028 9.06066 8.74159C9.34196 9.02289 9.5 9.40442 9.5 9.80225C9.5 10.2001 9.34196 10.5816 9.06066 10.8629C8.77936 11.1442 8.39782 11.3022 8 11.3022H4.5V8.30225ZM8.25 16.3022H4.5V13.3022H8.25C8.64782 13.3022 9.02936 13.4603 9.31066 13.7416C9.59196 14.0229 9.75 14.4044 9.75 14.8022C9.75 15.2001 9.59196 15.5816 9.31066 15.8629C9.02936 16.1442 8.64782 16.3022 8.25 16.3022Z" fill="white" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="footer__right__bottom__info">
                                    <p class="text-main">Funktional © 2022</p>
                                    <a href="" target="_blank">Polityka prywatności</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

</div>
<!-- end smooth-wrapper -->
</div>
<!-- end smooth-content -->

<?php wp_footer(); ?>

</body>

</html>