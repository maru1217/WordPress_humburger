<form class="p-header__search__contents" method="get" action="<?php echo home_url('/'); ?>">
    <div class="p-searchbox">
        <img class="p-searchbox__icon" src="<?php echo get_template_directory_uri() ; ?>/asset/images/search_icon.png" >
        <input placeholder="キーワード" name="s" id="s" >
    </div>
    <input class="c-button p-search__button" type="submit" name="submit" value="検索">
</form>     