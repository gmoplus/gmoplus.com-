<!-- main menu block -->

<div class="menu d-flex h-100 align-items-center flex-fill shrink-fix justify-content-end">
    <div class="ml-lg-3 mr-lg-3 d-none{if $config.main_menu_home_page && $pageInfo.Controller != 'search_map'} d-lg-block{/if}">
        <span class="mobile-menu-header d-none align-items-center">
            <span class="mr-auto">{$lang.menu}</span>
            <svg viewBox="0 0 12 12">
                <use xlink:href="#close-icon"></use>
            </svg>
        </span>

	{foreach name='mMenu' from=$main_menu item='menu_item'}
        {if $menu_item.Key == 'add_listing'}{assign var='add_listing_button' value=$menu_item}{continue}{/if}
        {include file='menus/menu_item.tpl' menuItem=$menu_item itemClass='h-100'}
	{/foreach}
    </div>

    {if $add_listing_button}
        {include file='menus/menu_item.tpl' menuItem=$add_listing_button itemClass='button add-property d-none d-md-flex' itemIcon=true}
    {/if}
</div>

<span class="menu-button d-flex d-lg-none align-items-center" title="{$lang.menu}">
    <svg viewBox="0 0 20 14" class="mr-2">
        <use xlink:href="#mobile-menu"></use>
    </svg>
    {$lang.menu}
</span>

<!-- main menu block end -->
