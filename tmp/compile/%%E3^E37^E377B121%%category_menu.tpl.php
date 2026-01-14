<?php /* Smarty version 2.6.31, created on 2025-04-14 18:38:26
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/menus/category_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/home/gmoplus/public_html/templates/general_sunny/tpl/menus/category_menu.tpl', 25, false),)), $this); ?>
<!-- categories panel -->

<?php $this->assign('menu_types_count', 0); ?>
<?php $this->assign('menu_type', ''); ?>
<?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lt_item']):
?>
    <?php if ($this->_tpl_vars['lt_item']['Menu']): ?>
        <?php $this->assign('menu_types_count', $this->_tpl_vars['menu_types_count']+1); ?>
        <?php $this->assign('menu_type', $this->_tpl_vars['lt_item']['Key']); ?>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<div class="category-menu__button btn order-6 order-md-0 mr-4 user-select-none d-none d-md-flex">
    <span class="category-menu__button-icon"><span></span></span>

    <?php echo $this->_tpl_vars['lang']['all_categores']; ?>

</div>

<div class="order-last w-100 mt-md-3 category-menu__container flex-column">
    <div class="category-menu__header w-100 d-md-none d-flex align-items-center justify-content-between">
        <div class="category-menu__back category-menu__header-button justify-content-center d-flex align-items-center">
            <svg viewBox="0 0 7 12" class="category-menu__category-arrow flex-shrink-0">
               <use xlink:href="#arrow-right-icon"></use>
            </svg>
        </div>
        <div class="category-menu__caption justify-content-center" data-phrase="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categories'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
"><?php echo $this->_tpl_vars['lang']['categories']; ?>
</div>
        <div class="category-menu__close category-menu__header-button justify-content-center d-flex align-items-center">
            <svg viewBox="0 0 12 12">
                <use xlink:href="#close-icon"></use>
            </svg>
        </div>
    </div>
    <div class="category-menu__body d-flex w-100">
        <div class="category-menu__categories flex-shrink-0">
            <?php if ($this->_tpl_vars['menu_types_count'] > 1): ?>
                <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ltf'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ltf']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['lt_item']):
        $this->_foreach['ltf']['iteration']++;
?>
                    <?php if ($this->_tpl_vars['lt_item']['Menu']): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menus/category_menu_item.tpl', 'smarty_include_vars' => array('id' => 0,'typeKey' => $this->_tpl_vars['lt_item']['Key'],'item' => $this->_tpl_vars['lt_item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['box_categories'][$this->_tpl_vars['menu_type']] && $this->_tpl_vars['box_categories'][$this->_tpl_vars['menu_type']]['0']): ?>
                    <?php $_from = $this->_tpl_vars['box_categories'][$this->_tpl_vars['menu_type']]['0']['sub_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ltf'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ltf']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menu_category']):
        $this->_foreach['ltf']['iteration']++;
?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menus/category_menu_item.tpl', 'smarty_include_vars' => array('id' => $this->_tpl_vars['menu_category']['ID'],'typeKey' => $this->_tpl_vars['menu_type'],'item' => $this->_tpl_vars['menu_category'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endforeach; endif; unset($_from); ?>
                <?php else: ?>
                    <?php echo $this->_tpl_vars['lang']['loading']; ?>

                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="category-menu__subcategories scrollbar flex-fill">
            <div class="category-menu__loading"><?php echo $this->_tpl_vars['lang']['loading']; ?>
</div>
        </div>
    </div>
</div>

<script id="categorires-menu-item" type="text/x-jsrender">
    <div data-id="[%:ID%]"
         data-type="[%:Type%]"
         class="d-flex align-items-center category-menu__category-item[%if #index == 0%] category-menu__category-item_active[%/if%]">
    <div class="category-menu__category-icon mr-2 flex-shrink-0">
        [%if Menu_icon%]
        [%else%]
            <svg viewBox="0 0 24 24">
               <use xlink:href="#default-category-icon"></use>
            </svg>
        [%/if%]
    </div>

    <div class="category-menu__category-name ml-1 flex-fill">[%:name%]</div>

    <svg viewBox="0 0 7 12" class="category-menu__category-arrow ml-2 flex-shrink-0">
       <use xlink:href="#arrow-right-icon"></use>
    </svg>
</div>
</script>

<script id="categorires-column-item" type="text/x-jsrender">
    <div class="category-menu__subcategory-cont">
        <div class="category-menu__subcategory-parent"><a href="[%:link%]">[%:name%]</a><span class="category-menu__subcategory-parent-count ml-2">[%:Count%]</span></div>

        [%for sub_categories%]
            <div class="mt-2[%if #index > 9%] hide[%/if%]">
                <a class="category-menu__subcategory-item" href="[%:link%]">[%:name%]</a>
            </div>

            [%if #index == 9%]
                <div class="mt-3">
                    <a href="[%:#parent.parent.parent.data.link%]" class="view-more-button">
                        <?php echo $this->_tpl_vars['lang']['more']; ?>

                        <svg viewBox="0 0 19 12">
                            <use xlink:href="#long-arrow-right-icon"></use>
                        </svg>
                    </a>
                </div>
            [%/if%]
        [%/for%]
    </div>
</script>

<script class="fl-js-dynamic">
lang['listing_type_no_categories'] = "<?php echo $this->_tpl_vars['lang']['listing_type_no_categories']; ?>
";
var category_menu_main_type = '<?php echo $this->_tpl_vars['menu_type']; ?>
';
<?php echo '

$(function(){
    var menu_loaded = false;
    var $mainMenu = $(\'.main-menu\');
    var $menuButton = $(\'.category-menu__button\');
    var $menuList = $(\'.category-menu__categories\');
    var $menuBody = $(\'.category-menu__body\');
    var $menuCaption = $(\'.category-menu__caption\');
    var $menuContainer = $(\'.category-menu__container\');
    var $categoryItem = $(\'.category-menu__category-item\');
    var $subcategoriesCont = $(\'.category-menu__subcategories\');

    var contActiveClass = \'category-menu__container_active\';

    var loadCategory = function(id, type, name, boxSelector){
        (function(id, type, name, boxSelector){
            var html = `
            <div id="${boxSelector}">
                <h1 class="mb-4 d-none d-md-block">${name}</h1>
                <div class="category-menu__subcategories-cont">${lang.loading}</div>
            </div>`;
            var $box = $($.parseHTML(html));

            $subcategoriesCont.append($box);

            var data = {
                mode: \'getCategoryLevel\',
                prepare: 1,
                lang: rlLang,
                parent_id: id,
                type: type
            };
            flUtil.ajax(data, function(response, status){
                if (status == \'success\' && response.status == \'OK\') {
                    var $targetCont = $box.find(\'.category-menu__subcategories-cont\');

                    if (response.results.length) {
                        var has_subcategories = false;
                        for (var i in response.results) {
                            if (parseInt(response.results[i].sub_categories_calc) > 0) {
                                has_subcategories = true;
                                break;
                            }
                        }

                        $targetCont.empty().append(
                            $(\'#categorires-column-item\').render(response.results)
                        );
                    } else {
                        $targetCont.empty().append(
                            lang[\'listing_type_no_categories\']
                        );
                    }
                } else {
                    printMessage(\'error\', lang[\'system_error\']);
                }
            });
        })(id, type, name, boxSelector);
    }

    var loadFirstLevel = function(){
        $firstItem = $categoryItem.filter(\':first\');

        if (!$firstItem.data(\'clicked\')) {
            $firstItem.trigger(\'click\');
        }
    }

    flUtil.loadScript(rlConfig[\'libs_url\'] + \'javascript/jsRender.js\', function(){
        // Load the main categories list
        if (!$menuList.find(\'.category-menu__category-item\').length) {
            var data = {
                mode: \'getCategoryLevel\',
                prepare: 1,
                lang: rlLang,
                parent_id: 0,
                type: category_menu_main_type
            };
            flUtil.ajax(data, function(response, status){
                if (status == \'success\' && response.status == \'OK\') {
                    $menuList.empty().append(
                        $(\'#categorires-menu-item\').render(response.results)
                    );
                } else {
                    $menuList.append(lang[\'listing_type_no_categories\']);
                }
            });
        }

        // Load the first set of categories
        $mainMenu.live(\'mouseenter\', function(){
            if (media_query == \'mobile\') {
                return;
            }

            $categoryItem = $(\'.category-menu__category-item\'); // Update reference
            loadFirstLevel();
        });

        $menuButton.click(function(){
            $mainMenu.toggleClass(\'category-menu__container_opened\');
            $(\'body\').addClass(\'category-menu__body-overflow\');

            if (media_query != \'mobile\') {
                loadFirstLevel();
            }
        });

        $(\'.category-menu__close\').click(function(){
            $mainMenu.removeClass(\'category-menu__container_opened\');
            $(\'body\').removeClass(\'category-menu__body-overflow\');
        });

        $(\'.category-menu__back\').click(function(){
            $menuContainer.removeClass(contActiveClass);
            $menuCaption.text($menuCaption.data(\'phrase\'));
        });

        $categoryItem.live(\'click\', function(){
            var id = $(this).data(\'id\');
            var type = $(this).data(\'type\');
            var name = $(this).find(\'.category-menu__category-name\').text();

            // Single category mode, redirect to it\'s url
            if (!type) {
                return;
            }

            $(\'.category-menu__loading\').remove();

            var box_selector = type + \'_\' + id;

            var $targetSubcategoriesCont = $subcategoriesCont.find(\'#\' + box_selector);
            $subcategoriesCont.find(\'> div\').addClass(\'hide\');

            $(\'.category-menu__category-item_active\').removeClass(\'category-menu__category-item_active\');
            $(this).addClass(\'category-menu__category-item_active\');

            if (media_query == \'mobile\' && !$menuContainer.hasClass(contActiveClass)) {
                $menuContainer.addClass(contActiveClass);
                $menuCaption.text(name);
            }

            if ($targetSubcategoriesCont.length) {
                $targetSubcategoriesCont.removeClass(\'hide\');
            } else {
                if ($(this).data(\'clicked\')) {
                    return;
                }

                $(this).attr(\'data-clicked\', true);

                loadCategory(id, type, name, box_selector);
            }
        });

        $(document).bind(\'click touchstart\', function(event){
            if (!$(event.target).parents().hasClass(\'category-menu__container\')
                && !$(event.target).parents().hasClass(\'category-menu__button\')
                && !$(event.target).hasClass(\'category-menu__button\')
            ) {
                $mainMenu.removeClass(\'category-menu__container_opened\');
            }
        });

        $(document).on(\'keyup\', function(e){
            if (e.key == \'Escape\') {
                $mainMenu.removeClass(\'category-menu__container_opened\');
            }
        });
    });
});

'; ?>

</script>

<!-- categories panel end -->