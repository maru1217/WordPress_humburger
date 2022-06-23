<form class="p-header__search__contents" method="get" action="<?php echo esc_url(home_url('/')) ?>">
    <div class="p-searchbox">
        <img class="p-searchbox__icon" src="<?php echo esc_url(get_template_directory_uri())  ; ?>/asset/images/search_icon.png" >
        <input placeholder="<?php if(!is_search()){ echo 'キーワード';} ?>" value="<?php if(is_search()){ echo get_search_query();} ?>"  name="s" id="s" >
        <input type="hidden" value="post" name="post_type" id="post_type" />
        <label class="screen-reader-text" for="s"><?php echo __(' search', 'hamburger' ); ?></label>
    </div>
    <input class="c-button p-search__button" type="submit" value="検索">
</form>     