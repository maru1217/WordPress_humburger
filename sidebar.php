            <aside class="l-aside">
                <div class="p-aside__bg"></div>
                <div class="p-aside">
                    <div class="p-aside__contents">
                        <button class="p-hamburger">
                            <div class="p-hamburger__button">
                                <span></span><span></span>
                            </div>
                        </button>
                        <div><p class="p-aside__title">Menu</p></div>



<div class="p-aside__items--1">
<a href="<?php echo esc_url(home_url('/').'archive-burger/')?>" class="p-aside__items__title">バーガー</a>
<?php
$menu_name = 'burger-menu';
 if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
     $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
     $menu_items = wp_get_nav_menu_items($menu->term_id);
     echo'<ul class="p-aside__items__ul">';
     echo '<ul class="p-aside__items__ul">' ;
     foreach ( (array) $menu_items as $key => $menu_item ) {
         $title = $menu_item->title;
         $url = $menu_item->url;
         echo '<li><a href="' . $url . '">' . $title . '</a></li>';
     }
 } 
 ?>
 </ul>
 </div>


 <div class="p-aside__items">
<a href="<?php echo esc_url(home_url('/').'archive-side/')?>" class="p-aside__items__title">サイド</a>
<?php
$menu_name = 'side-menu';
 if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
     $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
     $menu_items = wp_get_nav_menu_items($menu->term_id);
     echo'<ul class="p-aside__items__ul">';
     echo '<ul class="p-aside__items__ul">' ;
     foreach ( (array) $menu_items as $key => $menu_item ) {
         $title = $menu_item->title;
         $url = $menu_item->url;
         echo '<li><a href="' . $url . '">' . $title . '</a></li>';
     }
 } 
 ?>
 </ul>
 </div>


 <div class="p-aside__items">
<a href="<?php echo esc_url(home_url('/').'archive-drink/')?>" class="p-aside__items__title">ドリンク</a>
<?php
$menu_name = 'drink-menu';
 if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
     $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
     $menu_items = wp_get_nav_menu_items($menu->term_id);
     echo'<ul class="p-aside__items__ul">';
     echo '<ul class="p-aside__items__ul">' ;
     foreach ( (array) $menu_items as $key => $menu_item ) {
         $title = $menu_item->title;
         $url = $menu_item->url;
         echo '<li><a href="' . $url . '">' . $title . '</a></li>';
     }
 } 
 ?>
 </ul>
 </div>


                    </div>
                </div>
            </aside>