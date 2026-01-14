<!-- main menu block -->

{strip}
<div>
    <span class="menu-button hide" title="{$lang.menu}"><span></span><span></span><span></span></span>

    {foreach name='mMenu' from=$main_menu item='menu_item'}
        {if $menu_item.Key == 'add_listing'}
            {include file='menus/menu_item.tpl' menuItem=$menu_item itemClass='add-property button d-none d-lg-inline-block'}
            {break}
        {/if}
    {/foreach}

    <div class="menu-toggle d-none d-lg-block{if $smarty.cookies.main_menu_closed} closed{/if}">
        {$lang.menu}
        <span class="toggle plus"></span>
    </div>
    <ul class="menu">
        {foreach name='mMenu' from=$main_menu item='menu_item'}
            {if $menu_item.Key == 'add_listing'}{continue}{/if}
            {include file='menus/menu_item.tpl' menuItem=$menu_item itemTag='li'}
        {/foreach}
        <li class="more" style="display: none;"><span><span></span><span></span><span></span></span></li>
    </ul>
</div>
{/strip}

<ul id="main_menu_more"></ul>

<!-- main menu block end -->
