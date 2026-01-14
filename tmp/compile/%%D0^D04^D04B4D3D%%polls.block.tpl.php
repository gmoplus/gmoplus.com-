<?php /* Smarty version 2.6.31, created on 2025-04-14 18:38:28
         compiled from /home/gmoplus/public_html/plugins/polls/polls.block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/polls/polls.block.tpl', 5, false),array('function', 'phrase', '/home/gmoplus/public_html/plugins/polls/polls.block.tpl', 29, false),)), $this); ?>
<!-- poll block -->

<?php if ($this->_tpl_vars['poll']): ?>
    <div class="poll-container" id="poll_container_<?php echo $this->_tpl_vars['poll']['ID']; ?>
">
        <?php $this->assign('poll_name_key', ((is_array($_tmp='polls+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['poll']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['poll']['ID']))); ?>

        <?php if ($this->_tpl_vars['poll']['voted']): ?>
            <?php if ($this->_tpl_vars['poll']['Random'] == 1 || $this->_tpl_vars['block']['Header'] == 0): ?>
                <header class="pb-2"><b><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['poll_name_key']]; ?>
</b></header>
            <?php endif; ?>

            <ul class="poll-votes">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'polls') : smarty_modifier_cat($_tmp, 'polls')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'results.tpl') : smarty_modifier_cat($_tmp, 'results.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </ul>

            <div class="poll-total mt-3"><?php echo $this->_tpl_vars['lang']['total_votes']; ?>
: <b><?php echo $this->_tpl_vars['poll']['total']; ?>
</b></div>
        <?php else: ?>
            <?php if ($this->_tpl_vars['poll']['Random'] == 1 || $this->_tpl_vars['block']['Header'] == 0): ?>
                <header class="pb-2"><b><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['poll_name_key']]; ?>
</b></header>
            <?php endif; ?>

            <div class="poll-inquirer">
                <ul class="poll-answer">
                <?php $_from = $this->_tpl_vars['poll']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pollsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pollsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['poll_item']):
        $this->_foreach['pollsF']['iteration']++;
?>
                    <li class="d-flex w-100 align-items-center<?php if (! ($this->_foreach['pollsF']['iteration'] == $this->_foreach['pollsF']['total'])): ?> mb-1<?php endif; ?>">
                        <span style="background: <?php echo $this->_tpl_vars['poll_item']['Color']; ?>
;height: 18px;flex: 0 0 2px;" class="mr-1"></span>
                        <label>
                            <input type="radio" name="poll_<?php echo $this->_tpl_vars['poll']['Key']; ?>
" value="<?php echo $this->_tpl_vars['poll_item']['Key']; ?>
" />
                            <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => ((is_array($_tmp='polls_items+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['poll_item']['Key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['poll_item']['Key']))), $this);?>

                        </label>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
                </ul>

                <div class="poll-nav pt-3 d-flex flex-wrap align-items-center">
                    <div><input type="button" value="<?php echo $this->_tpl_vars['lang']['vote']; ?>
" id="vote_button_<?php echo $this->_tpl_vars['poll']['ID']; ?>
" /></div>
                    <div class="ml-2 mr-2 mt-2 mb-2 text-center flex-fill"><span class="link"><?php echo $this->_tpl_vars['lang']['polls_view_results']; ?>
</span></div>
                </div>
            </div>

            <div class="poll-results hide">
                <ul class="poll-votes" id="poll_results_<?php echo $this->_tpl_vars['poll']['ID']; ?>
">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'polls') : smarty_modifier_cat($_tmp, 'polls')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'results.tpl') : smarty_modifier_cat($_tmp, 'results.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </ul>

                <div class="poll-total mt-3"><?php echo $this->_tpl_vars['lang']['total_votes']; ?>
: <b><?php echo $this->_tpl_vars['poll']['total']; ?>
</b></div>

                <div class="poll-results-nav mt-2 ralign">
                    <span class="link"><?php echo $this->_tpl_vars['lang']['polls_back_for_vote']; ?>
</span>
                </div>
            </div>
        <?php endif; ?>

        <script id="pollItem" type="text/x-jquery-tmpl">
        <?php echo '

        ${($data.lang_votes = \''; ?>
<?php echo $this->_tpl_vars['lang']['votes']; ?>
<?php echo '\'),\'\'}

        <li>
            <div>${name} (<b>${Votes}</b> ${lang_votes})</div>
            <div style="width: {{if percent < 10}}10{{else percent >= 10 && percent < 70}}${percent*1.25}{{else}}${percent}{{/if}}%; background: ${Color};color: {{if Color == \'#ffffff\'}}#000000{{else}}#ffffff{{/if}};">
                ${percent}%
            </div>
        </li>

        '; ?>

        </script>
    </div>
<?php else: ?>
    <?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'polls_not_created','db_check' => true), $this);?>

<?php endif; ?>

<!-- poll block end -->