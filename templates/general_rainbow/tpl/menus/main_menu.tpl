<!-- main menu block -->

<div class="menu d-flex h-100 align-items-center flex-grow-0 flex-md-fill shrink-fix">
    <div class="d-none d-md-flex h-100 flex-fill shrink-fix">
        <span class="mobile-menu-header d-none align-items-center order-1">
            <span class="mobile-menu-header-title">{$lang.menu}</span>
            <div class="flex-fill d-flex mr-3 justify-content-center" id="mobile-left-usernav"></div>
            <svg viewBox="0 0 12 12" class="mobile-close-icon">
                <use xlink:href="#close-icon"></use>
            </svg>
        </span>

        <div class="menu-content pt-3 pb-3 pt-md-0 pb-md-0 order-3">
        {foreach name='mMenu' from=$main_menu item='menu_item'}
            {if $menu_item.Key == 'add_listing'}{assign var='add_listing_button' value=$menu_item}{continue}{/if}
            {include file='menus/menu_item.tpl' menuItem=$menu_item}
        {/foreach}
        </div>

        {if $add_listing_button}
            {include file='menus/menu_item.tpl' menuItem=$add_listing_button itemClass='button add-property order-2 flex-shrink-0 d-flex d-md-none'}
        {/if}

        <div class="menu-content order-4 d-block d-md-none mt-3 pt-2 pb-2">
            <div class="content {if $isLogin}a-menu{/if}">
                {if $isLogin}
                    {include file='menus/account_menu.tpl'}
                {else}
                    <span class="user-navbar-container">
                        {include file='blocks/login_modal.tpl'}
                    </span>
                {/if}
            </div>
        </div>
    </div>
</div>

<span class="menu-button d-flex d-md-none align-items-center" title="{$lang.menu}">
    <svg viewBox="0 0 20 14">
        <use xlink:href="#mobile-menu"></use>
    </svg>
</span>

<!-- main menu block end -->
