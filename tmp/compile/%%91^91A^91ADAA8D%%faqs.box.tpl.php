<?php /* Smarty version 2.6.31, created on 2025-12-20 07:27:32
         compiled from /home/gmoplus/public_html/plugins/FAQs/faqs.box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/home/gmoplus/public_html/plugins/FAQs/faqs.box.tpl', 8, false),array('modifier', 'regex_replace', '/home/gmoplus/public_html/plugins/FAQs/faqs.box.tpl', 23, false),array('modifier', 'strip_tags', '/home/gmoplus/public_html/plugins/FAQs/faqs.box.tpl', 23, false),array('modifier', 'truncate', '/home/gmoplus/public_html/plugins/FAQs/faqs.box.tpl', 23, false),array('modifier', 'strlen', '/home/gmoplus/public_html/plugins/FAQs/faqs.box.tpl', 24, false),array('function', 'pageUrl', '/home/gmoplus/public_html/plugins/FAQs/faqs.box.tpl', 13, false),)), $this); ?>
<!-- faqs block tpl -->
<?php if (! empty ( $this->_tpl_vars['all_faqs_block'] )): ?>
    <ul class="news faqs">
        <?php $_from = $this->_tpl_vars['all_faqs_block']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['faqs']):
?>
            <li class="mb-3">
                <div>
                    <div class="date">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['faqs']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>

                    </div>
                    <a title="<?php echo $this->_tpl_vars['faqs']['title']; ?>
"
                        href="<?php echo ''; ?><?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'faqs','add_url' => $this->_tpl_vars['faqs']['Path']), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'faqs','vars' => "id=".($this->_tpl_vars['faqs']['ID'])), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
"
                    >
                        <?php echo $this->_tpl_vars['faqs']['title']; ?>

                    </a>
                </div>
                <article>
                    <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['faqs']['content'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(<style[^>]*>[^>]*<\\/style>)/mi", "") : smarty_modifier_regex_replace($_tmp, "/(<style[^>]*>[^>]*<\\/style>)/mi", "")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('truncate', true, $_tmp, $this->_tpl_vars['config']['faqs_block_content_length'], "", false) : smarty_modifier_truncate($_tmp, $this->_tpl_vars['config']['faqs_block_content_length'], "", false)); ?>

                    <?php if (((is_array($_tmp=$this->_tpl_vars['faqs']['content'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > $this->_tpl_vars['config']['faqs_block_content_length']): ?>...<?php endif; ?>
                </article>
            </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
    <div class="ralign">
        <a title="<?php echo $this->_tpl_vars['lang']['view_all_faqs']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'faqs'), $this);?>
">
            <?php echo $this->_tpl_vars['lang']['view_all_faqs']; ?>

        </a>
    </div>
<?php else: ?>
    <?php echo $this->_tpl_vars['lang']['no_faqs']; ?>

<?php endif; ?>
<!-- faqs block tpl end -->