<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
<main class="l-main">
    <div class="c-main-mv p-single-mv ">
        <img class="c-main-mv__mv p-single-mv__mv" src= "<?php the_post_thumbnail_url(); ?>" >
        <img class="c-main-mv__mv--pc p-single-mv__mv-pc" src="<?php the_post_thumbnail_url(); ?>">
        <div class="p-single-mv__contents">
            <h1 class="c-main-mv__heading"><?php the_title() ; ?></h1>                            
        </div>
    </div>

<div <?php post_class('l-wrapper'); ?> >
<?php the_content(); ?>
<?php wp_link_pages(); ?>
</div>
<?php endwhile; endif; ?>
</div> 
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
