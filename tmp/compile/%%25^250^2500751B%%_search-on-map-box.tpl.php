<?php /* Smarty version 2.6.31, created on 2025-04-19 03:35:22
         compiled from /home/gmoplus/public_html/templates/general_sunny/components/search-on-map-box/_search-on-map-box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/home/gmoplus/public_html/templates/general_sunny/components/search-on-map-box/_search-on-map-box.tpl', 3, false),)), $this); ?>
<!-- search on map banner tpl -->

<a href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'search_on_map'), $this);?>
">
    <span title="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
" class="position-relative d-block search-on-map-box" data-caption="<?php echo $this->_tpl_vars['block']['name']; ?>
">
        <img class="w-100" alt="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/search-on-map-banner.webp" />
    </span>
</a>

<!-- search on map banner tpl end -->