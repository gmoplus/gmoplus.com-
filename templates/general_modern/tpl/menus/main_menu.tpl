<!-- main menu block -->

{strip}
<div>
	<span class="menu-button hide" title="{$lang.menu}"><span></span><span></span><span></span></span>
	<span class="mobile-menu-header hide"><span>{$lang.menu}</span><span></span></span>

	<ul class="menu">
		{foreach name='mMenu' from=$main_menu item='menu_item'}
            {include file='menus/menu_item.tpl' menuItem=$menu_item itemTag='li'}
		{/foreach}
		<li class="more" style="display: none;"><span><span></span><span></span><span></span></span></li>
	</ul>
</div>
{/strip}

<ul id="main_menu_more"></ul>

<!-- main menu block end -->
