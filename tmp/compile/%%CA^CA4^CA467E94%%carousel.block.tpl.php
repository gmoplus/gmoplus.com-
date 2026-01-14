<?php /* Smarty version 2.6.31, created on 2025-05-30 13:47:37
         compiled from /home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl', 4, false),array('function', 'pageUrl', '/home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl', 53, false),array('function', 'phrase', '/home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl', 57, false),array('modifier', 'version_compare', '/home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl', 9, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl', 19, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl', 31, false),array('modifier', 'regex_replace', '/home/gmoplus/public_html/plugins/listings_carousel/carousel.block.tpl', 55, false),)), $this); ?>
<!-- carousel block -->

<?php if ($this->_tpl_vars['listings_carousel']): ?>
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'featuredTop'), $this);?>


    <?php $this->assign('carousel_option', $this->_tpl_vars['carousel_options'][$this->_tpl_vars['block']['ID']]); ?>
    <?php $this->assign('phrase_sale', 'listing_fields+name+sale_rent_1'); ?>

    <?php if (((is_array($_tmp=$this->_tpl_vars['config']['rl_version'])) ? $this->_run_mod_handler('version_compare', true, $_tmp, "4.9.3") : version_compare($_tmp, "4.9.3")) >= 0): ?>
        <?php $this->assign('carouselPrefix', 'f-'); ?>
    <?php endif; ?>

    <div id="carousel_<?php echo $this->_tpl_vars['block']['Key']; ?>
" class="<?php echo $this->_tpl_vars['carouselPrefix']; ?>
carousel <?php echo $this->_tpl_vars['carousel_option']['Direction']; ?>
">
        <div class="carousel_block <?php echo $this->_tpl_vars['carouselPrefix']; ?>
carousel__viewport overflow-hidden position-relative m-0">
        <ul class="<?php echo $this->_tpl_vars['carouselPrefix']; ?>
carousel__track featured with-pictures row flex-nowrap">
            <?php $_from = $this->_tpl_vars['listings_carousel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['featured_listing']):
?>
                <?php $this->assign('type', $this->_tpl_vars['featured_listing']['Listing_type']); ?>
                <?php $this->assign('page_key', $this->_tpl_vars['listing_types'][$this->_tpl_vars['type']]['Page_key']); ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'featured_item.tpl') : smarty_modifier_cat($_tmp, 'featured_item.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
        </div>
    </div>

    <script class="fl-js-dynamic">
    <?php echo '

    if (typeof rlCarousel == "undefined") {
        var rlCarousel = new Array();
    }
    '; ?>
rlCarousel['carousel_<?php echo $this->_tpl_vars['block']['Key']; ?>
'] = <?php echo $this->_tpl_vars['carousel_option']['Number']; ?>
-<?php echo count($this->_tpl_vars['listings_carousel']); ?>
;<?php echo '
    $(document).ready(function(){
        $("#'; ?>
carousel_<?php echo $this->_tpl_vars['block']['Key']; ?>
<?php echo '").carousel({
            prefix: '; ?>
'<?php echo $this->_tpl_vars['carouselPrefix']; ?>
'<?php echo ',
            box_key: '; ?>
'<?php echo $this->_tpl_vars['block']['Key']; ?>
'<?php echo ',
            options: '; ?>
'<?php echo $this->_tpl_vars['block']['options']; ?>
'<?php echo ',
            side_bar_exists: '; ?>
'<?php echo $this->_tpl_vars['side_bar_exists']; ?>
'<?php echo ',
            priceTag: '; ?>
<?php if ($this->_tpl_vars['tpl_settings']['featured_price_tag']): ?>true<?php else: ?>false<?php endif; ?><?php echo ',
            vertical: '; ?>
<?php if ($this->_tpl_vars['carousel_option']['Direction'] == 'vertical'): ?>true<?php else: ?>false<?php endif; ?><?php echo ',
            circular: '; ?>
<?php if ($this->_tpl_vars['carousel_option']['Round'] == 1): ?>true<?php else: ?>false<?php endif; ?><?php echo ',
            direction: '; ?>
'<?php echo (defined('RL_LANG_DIR') ? @RL_LANG_DIR : null); ?>
'<?php echo ',
            visible: '; ?>
<?php echo $this->_tpl_vars['carousel_option']['Visible']; ?>
<?php echo ',
            scroll: '; ?>
<?php echo $this->_tpl_vars['carousel_option']['Per_slide']; ?>
<?php echo ',
            number: '; ?>
<?php echo $this->_tpl_vars['carousel_option']['Number']; ?>
<?php echo ',
            count: '; ?>
<?php echo count($this->_tpl_vars['listings_carousel']); ?>
<?php echo ',
            auto: '; ?>
<?php if ($this->_tpl_vars['carousel_option']['Delay'] > 0): ?><?php echo $this->_tpl_vars['carousel_option']['Delay']; ?>
000<?php else: ?>null<?php endif; ?><?php echo '
        });
    });
    '; ?>

    </script>
<?php else: ?>
    <?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['type']]['Page'] && $this->_tpl_vars['pages']['add_listing']): ?>
        <?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('assign' => 'href','key' => 'add_listing'), $this);?>

        <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['href']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['href'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_here'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

    <?php else: ?>
        <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'no_listings_here_submit_deny','db_check' => true), $this);?>

    <?php endif; ?>
<?php endif; ?>

<!-- carousel block end -->