<footer class="l-footer">
            <img class="p-footer__img" src="<?php echo esc_url(get_template_directory_uri()) ; ?>/asset/images/footer_img.jpg" >
            <div class="p-footer__contents">
            <?php 
            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ 'footer-menu' ] ) ) {
                $menu = wp_get_nav_menu_object( $locations[ 'footer-menu' ] );
                $menu_items = wp_get_nav_menu_items($menu->term_id);
                $count = $menu->count ;
                $counter = 1 ;
                foreach ( (array) $menu_items as $key => $menu_item ) {
                    $title = $menu_item->title;
                    $url = $menu_item->url;
                    if($counter < $count){
                        echo '<a href="' . $url . '" class="p-footer__contents--1">' . $title . '</a>';
                    }else{
                        echo '<a href="' . $url . '" class="p-footer__contents--2">' . $title . '</a>';
                    }
                    $counter++ ;
                }
            }
        ?>
            
            </div>
            <small class="p-copyright">Copyright: RaiseTech</small>
        </footer>
    <?php wp_footer(); ?>
    </body>
</html>