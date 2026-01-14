<?php /* Smarty version 2.6.31, created on 2025-11-22 03:09:57
         compiled from /home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 3, false),array('function', 'pageUrl', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 97, false),array('function', 'phrase', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 101, false),array('modifier', 'explode', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 6, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 20, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 27, false),array('modifier', 'replace', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 44, false),array('modifier', 'regex_replace', '/home/gmoplus/public_html/plugins/listings_box/listings_box.block.tpl', 99, false),)), $this); ?>
<!-- listings boxes -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'featuredTop'), $this);?>


<?php $this->assign('has_pictures', false); ?>
<?php $this->assign('box_types', ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['type']) : explode($_tmp, $this->_tpl_vars['type']))); ?>
<?php $_from = $this->_tpl_vars['box_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['box_type']):
?>
    <?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['box_type']]['Photo']): ?>
        <?php $this->assign('has_pictures', true); ?>
        <?php break; ?>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if (! empty ( $this->_tpl_vars['listings_box'] )): ?>
    <ul id="listing_box_<?php echo $this->_tpl_vars['block']['ID']; ?>
" class="row featured<?php if ($this->_tpl_vars['box_option']['display_mode'] == 'grid'): ?> lb-box-grid<?php endif; ?><?php if (! $this->_tpl_vars['type'] || $this->_tpl_vars['has_pictures']): ?> with-pictures<?php else: ?> list<?php endif; ?>">
    <?php $_from = $this->_tpl_vars['listings_box']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listingsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listingsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['featured_listing']):
        $this->_foreach['listingsF']['iteration']++;
?><?php echo ''; ?><?php $this->assign('type', $this->_tpl_vars['featured_listing']['Listing_type']); ?><?php echo ''; ?><?php $this->assign('page_key', $this->_tpl_vars['listing_types'][$this->_tpl_vars['type']]['Page_key']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['box_option']['display_mode'] == 'default'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'featured_item.tpl') : smarty_modifier_cat($_tmp, 'featured_item.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['box_option']['display_mode'] == 'grid'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listings_box') : smarty_modifier_cat($_tmp, 'listings_box')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listings_box.grid.tpl') : smarty_modifier_cat($_tmp, 'listings_box.grid.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php endforeach; endif; unset($_from); ?>
    </ul>

    <?php if ($this->_tpl_vars['box_option']['load_more'] && count($this->_tpl_vars['listings_box']) >= $this->_tpl_vars['box_option']['limit']): ?>
        <div class="text-center" id="ads-block-<?php echo $this->_tpl_vars['block']['ID']; ?>
">
            <input class="pl-5 pr-5" type="button" value="<?php echo $this->_tpl_vars['lang']['load_more_listings']; ?>
" data-phrase="<?php echo $this->_tpl_vars['lang']['load_more_listings']; ?>
" />
        </div>

        <script class="fl-js-dynamic">
        <?php echo '

        $(function(){
            var box_id  = \'ads-block-'; ?>
<?php echo $this->_tpl_vars['block']['ID']; ?>
<?php echo '\';
            var $cont   = $(\'#\' + box_id);
            var $box    = $cont.prev();
            var $button = $cont.find(\'input[type=button]\');

            var data = {
                '; ?>

                mode: 'lbLoadMoreListings',
                key: '<?php echo ((is_array($_tmp=$this->_tpl_vars['block']['Key'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'ltfb_', '') : smarty_modifier_replace($_tmp, 'ltfb_', '')); ?>
',
                ids: '<?php echo $this->_tpl_vars['lb_selected_ids']; ?>
',
                sideBarExists: <?php if ($this->_tpl_vars['side_bar_exists']): ?>1<?php else: ?>0<?php endif; ?>,
                blockSide: '<?php echo $this->_tpl_vars['block']['Side']; ?>
',
                pageKey: rlPageInfo['key']
                <?php echo '
            };

            $button.width($button.width());

            $button.click(function(){
                $(this).val(lang[\'loading\']);

                flUtil.ajax(data, function(response, status){
                    if (status == \'success\' && response.status == \'OK\') {
                        if (response.results.html) {
                            var $html = $(jQuery.parseHTML(response.results.html)[2]);
                            $listings = $html.find(\'> li\').unwrap();

                            if (typeof $.convertPrice == \'function\') {
                                $listings.find(\'.price_tag > *:not(nav)\').each(function(){
                                    $(this).convertPrice();
                                });
                            }

                            $box.append($listings);

                            flFavoritesHandler();
                            flContactOwnerHandler();

                            if (response.results.next) {
                                data.total += parseInt(response.results.count);
                                data.ids += \',\' + response.results.ids;
                            } else {
                                $cont.remove();
                            }
                        } else {
                            $cont.remove();
                        }
                    } else {
                        printMessage(\'error\', lang[\'system_error\']);
                    }

                    $button.val($button.data(\'phrase\'));
                });
            });
        });

        '; ?>

        </script>
    <?php endif; ?>
<?php else: ?>
    <?php if ($this->_tpl_vars['pages']['add_listing']): ?>
        <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'add_listing','assign' => 'add_listing_href'), $this);?>

        <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_href']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_href'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_here'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

    <?php else: ?>
        <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'no_listings_found_deny_posting','db_check' => 'true'), $this);?>

    <?php endif; ?>
<?php endif; ?>
<!-- listings boxes end -->