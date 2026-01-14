<?php /* Smarty version 2.6.31, created on 2025-04-14 18:38:28
         compiled from /home/gmoplus/public_html/plugins/fieldBoundBoxes/field-bound_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'phrase', '/home/gmoplus/public_html/plugins/fieldBoundBoxes/field-bound_box.tpl', 4, false),)), $this); ?>
<!-- field-bound box tpl -->

<?php if (empty ( $this->_tpl_vars['fbb_options'] )): ?>
    <span class="text-notice"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'fbb_no_options','db_check' => true), $this);?>
</span>
<?php else: ?>
    <?php 
    global $page_info;

    $block = $this->get_template_vars('block');
    $side_bar_exists = $this->get_template_vars('side_bar_exists');
    $fbb_is_nova = $this->get_template_vars('fbb_is_nova');
    $fbb_box = $this->get_template_vars('fbb_box');
    $special_block = $this->get_template_vars('home_page_special_block');
    $is_special = isset($special_block) && $special_block['Key'] == $block['Key'];

    $columns = $this->get_template_vars('pageMode') ? $fbb_box['Page_columns'] : $fbb_box['Columns'];
    $icons_horizontal = $fbb_box['Icons_position'] == 'right' || $fbb_box['Icons_position'] == 'left';

    if ($columns == 'auto') {
        if ($fbb_box['Style'] == 'text_pic') {
            if ($icons_horizontal) {
                $class = 'col-12 col-sm-6 col-md-4 ';
                $class .= $side_bar_exists ? 'col-xl-3' : 'col-xl-2';

                if (in_array($block['Side'], array('middle_left', 'middle_right'))) {
                    $class = 'col-15 col-sm-6 col-md-6 ';
                    $class .= $side_bar_exists ? 'col-lg-12 col-xl-6' : ' col-xl-4';
                } elseif ($block['Side'] == 'left' || $is_special) {
                    $class = 'col-12 col-sm-6 col-md-4 col-lg-12';
                }
            } else {
                $class = 'col-6 col-md-3 col-lg-3';
                $class .= !$side_bar_exists || $fbb_is_nova ? ' col-xl-2' : '';

                if (in_array($block['Side'], array('middle_left', 'middle_right'))) {
                    $class = 'col-6 col-xl-4';
                } elseif ($block['Side'] == 'left' || $is_special) {
                    $class = 'col-6 col-md-3 col-lg-6';
                }
            }
        } else {
            $class = 'col-sm-6 col-md-4 ';
            $class .= !$side_bar_exists || $fbb_is_nova ? 'col-lg-3' : 'col-lg-4';

            if (in_array($block['Side'], array('middle_left', 'middle_right'))) {
                $class = 'col-sm-6';
            } elseif ($block['Side'] == 'left' || $is_special) {
                $class = 'col-sm-6 col-md-4 col-lg-12';
            }
        }
    } else {
        $set_col = 12 / $columns;
        $class = 'col-md-' . $set_col;
    }

    if ($GLOBALS['tpl_settings']['bootstrap_grid_no_xl']) {
        $class = str_replace(['col-xl-2', 'col-xl-3', 'col-xl-4'], '', $class);
    }

    /**
     * @todo - Remove this code when the plugun compatibility > 4.8.1
     */
    if ($is_special && version_compare($GLOBALS['config']['rl_version'], '4.8.1', '<=')) {
        $class = str_replace('col-md-3', 'col-md-4', $class);
    }

    $this->assign('icons_horizontal', $icons_horizontal);
    $this->assign('fbb_col_class', $class);
    $this->assign('fbb_columns', $columns);

    $no_picture_url = RL_TPL_BASE . 'img/no-picture.png';
    $this->assign_by_ref('no_picture_url', $no_picture_url);

    if (is_file(RL_ROOT . 'templates/' . $GLOBALS['config']['template'] . '/img/no-picture.svg')) {
        $no_picture_url = RL_TPL_BASE . 'img/no-picture.svg';
    }
     ?>

    <?php if ($this->_tpl_vars['fbb_box']['Style'] == 'responsive'): ?>
        <ul class="row field-bound-box-responsive field-bound-box-responsive_<?php echo $this->_tpl_vars['fbb_box']['Orientation']; ?>
<?php if ($this->_tpl_vars['fbb_columns'] != 'auto'): ?> field-bound-box-responsive_custom-column<?php endif; ?>">
            <?php $_from = $this->_tpl_vars['fbb_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
            <li class="<?php echo $this->_tpl_vars['fbb_col_class']; ?>
">
                <a class="w-100 field-bound-box-responsive__wrapper d-block position-relative" href="<?php echo $this->_tpl_vars['option']['link']; ?>
">
                    <img class="w-100 h-100 position-absolute<?php if (! $this->_tpl_vars['option']['Icon']): ?> field-bound-box-responsive__img_no-picture<?php endif; ?>" 
                         src="<?php if ($this->_tpl_vars['option']['Icon']): ?><?php echo $this->_tpl_vars['option']['Icon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_picture_url']; ?>
<?php endif; ?>" />
                    <div class="field-bound-box-responsive__footer w-100 position-absolute d-flex flex-column">
                        <div class="field-bound-box-responsive__info d-flex flex-row align-items-end">
                            <span class="w-100 field-bound-box-responsive__name text-truncate flex-fill text-overflow pr-2" title="<?php echo $this->_tpl_vars['option']['name']; ?>
"><?php echo $this->_tpl_vars['option']['name']; ?>
</span>
                            <?php if ($this->_tpl_vars['fbb_box']['Show_count']): ?>
                                <div class="field-bound-box-responsive__count"><?php echo $this->_tpl_vars['option']['Count']; ?>
</div>
                            <?php endif; ?>
                        </div>

                        <?php if ($this->_tpl_vars['fbb_box']['Orientation'] == 'portrait'): ?>
                            <div class="text-center field-bound-box-responsive__button"><?php echo $this->_tpl_vars['lang']['fbb_view_listings']; ?>
</div>
                        <?php endif; ?>
                    </div>
                </a>
            </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    <?php elseif ($this->_tpl_vars['fbb_box']['Style'] == 'text'): ?>
        <ul class="row field-bound-box-text<?php if ($this->_tpl_vars['fbb_columns'] != 'auto'): ?> field-bound-box-text_custom-column<?php endif; ?>">
            <?php $_from = $this->_tpl_vars['fbb_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
            <li class="<?php echo $this->_tpl_vars['fbb_col_class']; ?>
 item<?php if ($this->_tpl_vars['fbb_box']['Show_count'] && ! $this->_tpl_vars['option']['Count']): ?> field-bound-box-text-option_empty<?php endif; ?>">
                <div class="field-bound-box-text__wrapper d-flex flex-row-reverse justify-content-end">
                    <?php if ($this->_tpl_vars['fbb_box']['Show_count']): ?>
                        <div class="ml-2 font-size-xs text-info font-weight-bold">
                            <span class="d-flex"><?php echo $this->_tpl_vars['option']['Count']; ?>
</span>
                        </div>
                    <?php endif; ?>

                    <div class="shrink-fix">
                        <a class="text-overflow d-inline-block align-top mw-100" title="<?php echo $this->_tpl_vars['option']['name']; ?>
" href="<?php echo $this->_tpl_vars['option']['link']; ?>
"><?php echo $this->_tpl_vars['option']['name']; ?>
</a>
                    </div>
                </div>
            </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    <?php elseif ($this->_tpl_vars['fbb_box']['Style'] == 'text_pic'): ?>
        <ul class="row field-bound-box-text-pic">
            <?php if ($this->_tpl_vars['fbb_box']['Icons_position'] == 'right'): ?>
                <?php $this->assign('icons_position', 'flex-row-reverse'); ?>
            <?php elseif ($this->_tpl_vars['fbb_box']['Icons_position'] == 'top'): ?>
                <?php $this->assign('icons_position', 'flex-column'); ?>
            <?php elseif ($this->_tpl_vars['fbb_box']['Icons_position'] == 'bottom'): ?>
                <?php $this->assign('icons_position', 'flex-column-reverse'); ?>
            <?php endif; ?>

            <?php $_from = $this->_tpl_vars['fbb_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
            <li class="<?php echo $this->_tpl_vars['fbb_col_class']; ?>
 <?php if ($this->_tpl_vars['fbb_box']['Show_count'] && ! $this->_tpl_vars['option']['Count']): ?>field-bound-box-text-option_empty<?php endif; ?><?php if (! $this->_tpl_vars['icons_horizontal']): ?> text-center<?php endif; ?>">
                <a class="field-bound-box-text-pic__wrapper mw-100 d-inline-flex <?php echo $this->_tpl_vars['icons_position']; ?>
<?php if (! $this->_tpl_vars['icons_horizontal']): ?> align-items-center<?php endif; ?>" title="<?php echo $this->_tpl_vars['option']['name']; ?>
" href="<?php echo $this->_tpl_vars['option']['link']; ?>
">
                    <img style="width: <?php echo $this->_tpl_vars['fbb_box']['Icons_width']; ?>
px;height: <?php echo $this->_tpl_vars['fbb_box']['Icons_height']; ?>
px;"
                         src="<?php if ($this->_tpl_vars['option']['Icon']): ?><?php echo $this->_tpl_vars['option']['Icon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_picture_url']; ?>
<?php endif; ?>"
                         class="field-bound-box-text-pic__img<?php if (! $this->_tpl_vars['option']['Icon']): ?> field-bound-box-text-pic__img_no-picture<?php endif; ?>" />

                    <span class="d-flex shrink-fix mw-100 <?php if ($this->_tpl_vars['icons_horizontal']): ?>align-items-center <?php if ($this->_tpl_vars['fbb_box']['Icons_position'] == 'left'): ?>ml-2<?php else: ?>mr-2<?php endif; ?><?php else: ?>my-2<?php if ($this->_tpl_vars['fbb_box']['Orientation'] == 'portrait' && $this->_tpl_vars['fbb_box']['Show_count']): ?> flex-column<?php endif; ?><?php endif; ?> justify-content-center">
                        <span class="text-overflow"><?php echo $this->_tpl_vars['option']['name']; ?>
</span>
                        <?php if ($this->_tpl_vars['fbb_box']['Show_count']): ?>
                            <span class="font-size-xs text-info font-weight-bold <?php if (! $this->_tpl_vars['icons_horizontal'] && $this->_tpl_vars['fbb_box']['Orientation'] == 'portrait'): ?>mt-2<?php else: ?>ml-2<?php endif; ?>"><?php echo $this->_tpl_vars['option']['Count']; ?>
</span>
                        <?php endif; ?>
                    </span>
                </a>
            </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    <?php elseif ($this->_tpl_vars['fbb_box']['Style'] == 'icon'): ?>
        <?php 
        global $page_info;

        $block = $this->get_template_vars('block');
        $side_bar_exists = $this->get_template_vars('side_bar_exists');
        $fbb_is_nova = $this->get_template_vars('fbb_is_nova');
        $special_block = $this->get_template_vars('home_page_special_block');
        $is_special = $special_block['Key'] == $block['Key'];

        $class = 'col-4 col-sm-3 ';

        if ($block['Side'] == 'left' || $is_special) {
            $class .= $fbb_is_nova ? 'col-md-2 col-lg-6 col-xl-4' : 'col-md-2 col-lg-4';
        } elseif (in_array($block['Side'], array('middle_left', 'middle_right'))) {
            $class .= $side_bar_exists ? 'col-md-4 col-lg-4 col-xl-3' : 'col-md-4 col-lg-3 col-xl-2';
        } else {
            $class .= $side_bar_exists ? 'col-md-2' : 'col-md-2 col-lg-1';
        }

        if ($GLOBALS['tpl_settings']['bootstrap_grid_no_xl']) {
            $class = str_replace(['col-xl-2', 'col-xl-3', 'col-xl-4'], '', $class);
        }

        /**
         * @todo - Remove this code when the plugun compatibility > 4.8.1
         */
        if ($is_special && version_compare($GLOBALS['config']['rl_version'], '4.8.1', '<=')) {
            $class = str_replace('col-md-3', 'col-md-4', $class);
        }

        $this->assign('fbb_col_class', $class);
         ?>

        <ul class="row field-bound-box-icon">
            <?php $_from = $this->_tpl_vars['fbb_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
            <li class="field-bound-box-icon__col <?php echo $this->_tpl_vars['fbb_col_class']; ?>
">
                <a class="d-flex flex-column align-items-center hint<?php if (! $this->_tpl_vars['option']['Count']): ?> field-bound-box-item_empty<?php endif; ?>" title="<?php echo $this->_tpl_vars['option']['name']; ?>
" href="<?php echo $this->_tpl_vars['option']['link']; ?>
">
                    <img style="width: <?php echo $this->_tpl_vars['fbb_box']['Icons_width']; ?>
px;height: <?php echo $this->_tpl_vars['fbb_box']['Icons_height']; ?>
px;"
                         src="<?php if ($this->_tpl_vars['option']['Icon']): ?><?php echo $this->_tpl_vars['option']['Icon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_picture_url']; ?>
<?php endif; ?>"
                         class="field-bound-box-icon__img<?php if (! $this->_tpl_vars['option']['Icon']): ?> field-bound-box-text-pic__img_no-picture<?php endif; ?>" />

                    <span class="my-2 font-weight-bold<?php if (! $this->_tpl_vars['option']['Count']): ?> field-bound-box-count_empty<?php endif; ?>"><?php echo $this->_tpl_vars['option']['Count']; ?>
</span>
                </a>
            </li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    <?php endif; ?>
<?php endif; ?>

<!-- field-bound box tpl end-->