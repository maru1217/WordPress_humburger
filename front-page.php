 <?php get_header(); ?>               
                <main class="l-main">
                    <div class="p-front-page-mv">
                        <img class="p-front-page-mv__img" src="<?php echo esc_url(get_template_directory_uri()) ; ?>/asset/images/home_menu.jpg" >
                        <img class="p-front-page-mv__img--tb" src="<?php  echo esc_url(get_template_directory_uri()) ; ?>/asset/images/home_menu_tb.jpg" >
                        <img class="p-front-page-mv__img--pc"  src="<?php echo esc_url(get_template_directory_uri()) ; ?>/asset/images/home_menu_pc.jpg" >
                        <h2 class="p-front-page-mv__text">ダミーサイト</h2>
                    </div>
                    <div class="p-main__contents l-wrapper">
                    <a class="p-main__contents__link" href="<?php 
                                                            $page_data = get_page_by_path('archive-burger') ; 
                                                            $page_id = $page_data->ID;
                                                            echo esc_url(get_permalink($page_id)) ;?>">
                        <div class="p-main__contents--1">
                            <img class="p-main__contents__img01" src="<?php  echo esc_url(get_template_directory_uri()) ; ?>/asset/images/take_out_img.jpg" >
                            <div class="p-main__contents__wrapper">
                                <h2 class="p-main__title"><?php $page_id = get_page_by_path('shop') ;
                                                                $page_id = $page_id -> ID ;
                                                                if(get_post_meta($page_id,'take_out',true)):
                                                                echo esc_html(get_post_meta($page_id,'take_out',true)) ;
                                                                endif ;
                                                                 ?>
                                </h2>
                                <div class="p-main__items">
                                    <div class="p-main__items__wrapper">
                                        <p class="p-main__items__title">
                                            <?php $page_id = get_page_by_path('shop') ;
                                            $page_id = $page_id -> ID ;
                                            if(get_post_meta($page_id,'take_out',true)):
                                            echo esc_html(get_post_meta($page_id,'take_out',true)) ;
                                            endif ;
                                            ?>
                                        </p>
                                        <p class="p-main__items__description">
                                            <?php $page_id = get_page_by_path('shop') ;
                                            $page_id = $page_id -> ID ;
                                            if(get_post_meta($page_id,'take_out_description01',true)):
                                            echo esc_html(get_post_meta($page_id,'take_out_description01',true)) ;
                                            endif ;
                                            ?>
                                        </p>
                                    </div>
                                    <div class="p-main__items__wrapper">
                                        <p class="p-main__items__title">
                                        <?php $page_id = get_page_by_path('shop') ;
                                        $page_id = $page_id -> ID ;
                                        if(get_post_meta($page_id,'take_out',true)):
                                        echo esc_html(get_post_meta($page_id,'take_out',true)) ;
                                        endif ;
                                        ?>
                                        </p>
                                        <p class="p-main__items__description">
                                        <?php $page_id = get_page_by_path('shop') ;
                                        $page_id = $page_id -> ID ;
                                        if(get_post_meta($page_id,'take_out_description02',true)):
                                        echo esc_html(get_post_meta($page_id,'take_out_description02',true)) ;
                                        endif ;
                                        ?>
                                        </p>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </a>
                    <a class="p-main__contents__link" href="<?php 
                                                            $page_data = get_page_by_path('archive-burger') ; 
                                                            $page_id = $page_data->ID;
                                                            echo esc_url(get_permalink($page_id)) ;?>">
                        <div class="p-main__contents--2">
                            <div class="p-main__contents__wrapper">
                                <h2 class="p-main__title -eatin">
                                <?php $page_id = get_page_by_path('shop') ;
                                $page_id = $page_id -> ID ;
                                if(get_post_meta($page_id,'eat_in',true)):
                                echo esc_html(get_post_meta($page_id,'eat_in',true)) ;
                                endif ;
                                    ?>
                                </h2>
                                <div class="p-main__items">
                                    <div class="p-main__items__wrapper">
                                        <p class="p-main__items__title">
                                        <?php $page_id = get_page_by_path('shop') ;
                                        $page_id = $page_id -> ID ;
                                        if(get_post_meta($page_id,'eat_in',true)):
                                        echo esc_html(get_post_meta($page_id,'eat_in',true)) ;
                                        endif ;
                                            ?>   
                                        </p>
                                        <p class="p-main__items__description">
                                        <?php $page_id = get_page_by_path('shop') ;
                                        $page_id = $page_id -> ID ;
                                        if(get_post_meta($page_id,'eat_in_description01',true)):
                                        echo get_post_meta($page_id,'eat_in_description01',true) ;
                                        endif ;
                                        ?>
                                        </p>
                                    </div>
                                    <div class="p-main__items__wrapper">
                                        <p class="p-main__items__title">
                                        <?php $page_id = get_page_by_path('shop') ;
                                        $page_id = $page_id -> ID ;
                                        if(get_post_meta($page_id,'eat_in',true)):
                                        echo get_post_meta($page_id,'eat_in',true) ;
                                        endif ;
                                            ?>   
                                        </p>
                                        <p class="p-main__items__description">
                                        <?php $page_id = get_page_by_path('shop') ;
                                        $page_id = $page_id -> ID ;
                                        if(get_post_meta($page_id,'eat_in_description02',true)):
                                        echo get_post_meta($page_id,'eat_in_description02',true) ;
                                        endif ;
                                        ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <img class="p-main__contents__img02" src="<?php echo esc_url(get_template_directory_uri()) ; ?>/asset/images/eat_in_img.jpg" >
                        </div>
                    </a>
                    </div>
                    <section class="p-map"> 
                        <img src="<?php  echo esc_url(get_template_directory_uri()) ; ?>/asset/images/map_img_tb.jpg"  class="p-map__image">
                        <div class="p-map__image__cover"></div>
                        <div class="p-map__contents">         
                            <h2 class="p-map__title">見出しが入ります</h2>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。
                                テキストが入ります。テキストが入ります。テキストが入ります。
                                テキストが入ります。テキストが入ります。テキストが入ります。
                                テキストが入ります。テキストが入ります。テキストが入ります。
                                テキストが入ります。テキストが入ります。テキストが入ります。
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </p> 
                        </div>        
                    </section>    
                </main>
            </div>
            <?php get_sidebar(); ?>
        </div>
<?php get_footer(); ?>