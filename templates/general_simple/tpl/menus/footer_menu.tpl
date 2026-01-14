<!-- footer menu block -->

<ul class="row">
{foreach name='fMenu' from=$footer_menu item='menu_item'}
    <li class="col-md-4 col-sm-6">{include file='menus/menu_item.tpl' menuItem=$menu_item}</li>
{/foreach}
</ul>

<!-- footer menu block end -->
