<?php get_header(); ?>
<main class="l-main">
                    <div class="c-main-mv p-archive-mv ">
                        <img class="c-main-mv__mv p-archive-mv__mv "src="http://hamburger.local/wp-content/uploads/2022/06/menu-bg.jpg">
                        <img class="c-main-mv__mv--pc p-archive-mv__mv" src="http://hamburger.local/wp-content/uploads/2022/06/menu-bg.jpg">
                        <div class="p-archive-mv__contents">
                        <h2 class="c-main-mv__heading">Search:</h2>
<?php if (have_posts()): ?>
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '<p class="c-main-mv__text">キーワードが未入力です</p>' ; // 検索キーワードが未入力の場合のテキストを指定
  } else {
     echo '<p class="c-main-mv__text">'.$_GET['s'] .'</p>' ;
    
  }

else: 
echo  '<p class="c-main-mv__text">検索されたキーワードにマッチする記事はありませんでした</p>'  ;?>
<?php endif; ?>

                            
                        </div>
                    </div>
                    
                    <div class="l-wrapper">
                        <section class="c-subheading p-archive-subheading">
                            <h2 class="c-subheading__title ">小見出しが入ります</h2>
                            <p class="c-subheading__text">
                                テキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入ります
                                テキストが入りますテキストが入りますテキストが入ります
                            </p>
                        </section>

                        <?php while(have_posts()): the_post(); ?>
                        <section class="c-card">
                            <div class="p-archive-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="c-card__img p-archive-card__img" src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>">
                                <?php else : ?>
                                    <img class="c-card__img p-archive-card__img" src="<?php bloginfo('template_url'); ?>/asset/cheeseburger-img.jpg"  alt="デフォルト画像" />
                                    <?php endif ; ?>
                                <div class="c-card__bg p-archive-card__contents">
                                    <h3 class="c-card__heading01"><?php the_title() ;?></h3>
                                    <h4 class="c-card__heading02"><?php echo esc_html(get_post_meta($post->ID, 'subheading', true)); ?></h4>  
                                    <p class="c-card__text">
                                    <?php echo esc_html(get_post_meta($post->ID, 'text', true)); ?>
                                    </p> 
                                    <div  class="p-archive-card__button"> 
                                        <a href="<?php the_permalink(); ?>">
                                            <button class="c-card__button">
                                                詳しく見る
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php endwhile; ?>
                        
                        
                        <div class="pnavi">
                        <?php // ページリスト表示処理
                        global $wp_rewrite;
                        $paginate_base = get_pagenum_link(1);
                        if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                            $paginate_format = '';
                            $paginate_base = add_query_arg('paged','%#%');
                        }else{
                            $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                            user_trailingslashit('page/%#%/','paged');
                            $paginate_base .= '%_%';
                        }
                        echo paginate_links(array(
                            'base' => $paginate_base,
                            'format' => $paginate_format,
                            'total' => $wp_query->max_num_pages,
                            'mid_size' => 2,
                            'current' => ($paged ? $paged : 1),
                            'prev_text' => '＜＜',
                            'next_text' => '＞＞',
                        ));
                        ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </main>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <?php get_footer() ;?>