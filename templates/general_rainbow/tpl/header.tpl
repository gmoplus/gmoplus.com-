{include file='head.tpl'}

{include file='../img/gallery.svg'}

<div class="main-wrapper d-flex flex-column">
    <header class="page-header{if $pageInfo.Key == 'home' && !$config.main_menu_home_page} main-menu-hidden{/if}{if $pageInfo.Key == 'search_on_map'} fixed-menu{/if}">
        <div class="point1 clearfix">
            <div class="top-navigation">
                <div class="point1 d-flex mx-auto flex-wrap no-gutters justify-content-between">
                    <div class="d-flex align-items-center flex-fill col-auto col-md-12 position-static">
                        <div class="mr-2" id="logo">
                            <a href="{$rlBase}" title="{$config.site_name}">
                                <img alt="{$config.site_name}" src="{$rlTplBase}img/logo.svg?rev={$config.static_files_revision}" />
                            </a>
                        </div>
                        <div class="d-flex flex-fill justify-content-end">
                            <div class="d-none d-md-flex" id="left-userbar">
                                {include file='blocks'|cat:$smarty.const.RL_DS|cat:'lang_selector.tpl'}

                                {rlHook name='tplHeaderUserNav'}
                            </div>
                            <div class="d-flex justify-content-end user-navbar">
                                {rlHook name='tplHeaderUserArea'}

                                {include file='blocks'|cat:$smarty.const.RL_DS|cat:'user_navbar.tpl'}
                            </div>

                            {foreach name='mMenu' from=$main_menu item='menu_item'}
                                {if $menu_item.Key != 'add_listing'}{continue}{/if}
                                {include file='menus/menu_item.tpl' menuItem=$menu_item itemClass='button add-property d-none d-md-flex'}
                                {break}
                            {/foreach}
                        </div>
                    </div>

                    <nav class="main-menu col-auto col-md-12 d-flex{if $pageInfo.Key == 'home' && !$config.main_menu_home_page} d-md-none{/if}">
                        {include file='menus'|cat:$smarty.const.RL_DS|cat:'main_menu.tpl'}
                    </nav>
                </div>
            </div>
        </div>
        {assign var='page_menu' value=','|explode:$pageInfo.Menus}

        {if $pageInfo.Key == 'home'}
        <section class="header-nav d-flex flex-column">
            {include file='blocks'|cat:$smarty.const.RL_DS|cat:'home_content.tpl'}
        </section>
        {/if}
    </header>
