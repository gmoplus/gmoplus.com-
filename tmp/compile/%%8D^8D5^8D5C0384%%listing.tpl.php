<?php /* Smarty version 2.6.31, created on 2025-05-30 12:05:29
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/blocks/listing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/listing.tpl', 3, false),array('function', 'math', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/listing.tpl', 47, false),array('function', 'toPrettyDateTimeShort', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/listing.tpl', 140, false),array('modifier', 'in_array', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/listing.tpl', 9, false),array('modifier', 'replace', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/listing.tpl', 49, false),)), $this); ?>
<!-- listing item -->

<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingTop'), $this);?>


<?php if ($this->_tpl_vars['listing']['Listing_type']): ?>
    <?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['listing']['Listing_type']]); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['listing_type']['Photo'] || ((is_array($_tmp=$this->_tpl_vars['pageInfo']['Controller'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['_mixedListingControllers']) : in_array($_tmp, $this->_tpl_vars['_mixedListingControllers'])) || $_REQUEST['mode'] == 'rvLoadListings'): ?>
    <?php $this->assign('pictures_available', true); ?>
<?php else: ?>
    <?php $this->assign('pictures_available', false); ?>
<?php endif; ?>

<?php $this->assign('price', $this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['price_tag_field']]); ?>

<article class="item<?php if ($this->_tpl_vars['listing']['Featured']): ?> featured<?php endif; ?><?php if (! $this->_tpl_vars['pictures_available']): ?> no-image<?php endif; ?> two-inline col-sm-4<?php if (! $this->_tpl_vars['side_bar_exists']): ?> col-md-3<?php endif; ?> <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingItemClass'), $this);?>
">
    <div class="navigation-column d-none">
        <span class="category-info">
            <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['listing_type']['Page_key']]; ?>
/<?php echo $this->_tpl_vars['listing']['Path']; ?>
<?php if ($this->_tpl_vars['listing_type']['Cat_postfix']): ?>.html<?php else: ?>/<?php endif; ?><?php else: ?>?page=<?php echo $this->_tpl_vars['pages'][$this->_tpl_vars['listing_type']['Page_key']]; ?>
&category=<?php echo $this->_tpl_vars['listing']['Category_ID']; ?>
<?php endif; ?>">
                <?php echo $this->_tpl_vars['listing']['name']; ?>

            </a>
        </span>
    </div>

    <div class="main-column clearfix">
        <?php if ($this->_tpl_vars['pictures_available']): ?>
            <div class="picture<?php if (! $this->_tpl_vars['listing']['Main_photo']): ?> no-picture<?php endif; ?>">
                <a title="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['listing']['url']; ?>
">
                    <?php if ($this->_tpl_vars['listing']['Photos_count'] > 1): ?>
                    <div data-id="<?php echo $this->_tpl_vars['listing']['ID']; ?>
" class="listing-picture-slider">
                        <span class="listing-picture-slider__navbar d-flex h-100 relative">
                        <?php unset($this->_sections['pics']);
$this->_sections['pics']['start'] = (int)0;
$this->_sections['pics']['loop'] = is_array($_loop=$this->_tpl_vars['listing']['Photos_count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pics']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['pics']['max'] = (int)5;
$this->_sections['pics']['name'] = 'pics';
$this->_sections['pics']['show'] = true;
if ($this->_sections['pics']['max'] < 0)
    $this->_sections['pics']['max'] = $this->_sections['pics']['loop'];
if ($this->_sections['pics']['start'] < 0)
    $this->_sections['pics']['start'] = max($this->_sections['pics']['step'] > 0 ? 0 : -1, $this->_sections['pics']['loop'] + $this->_sections['pics']['start']);
else
    $this->_sections['pics']['start'] = min($this->_sections['pics']['start'], $this->_sections['pics']['step'] > 0 ? $this->_sections['pics']['loop'] : $this->_sections['pics']['loop']-1);
if ($this->_sections['pics']['show']) {
    $this->_sections['pics']['total'] = min(ceil(($this->_sections['pics']['step'] > 0 ? $this->_sections['pics']['loop'] - $this->_sections['pics']['start'] : $this->_sections['pics']['start']+1)/abs($this->_sections['pics']['step'])), $this->_sections['pics']['max']);
    if ($this->_sections['pics']['total'] == 0)
        $this->_sections['pics']['show'] = false;
} else
    $this->_sections['pics']['total'] = 0;
if ($this->_sections['pics']['show']):

            for ($this->_sections['pics']['index'] = $this->_sections['pics']['start'], $this->_sections['pics']['iteration'] = 1;
                 $this->_sections['pics']['iteration'] <= $this->_sections['pics']['total'];
                 $this->_sections['pics']['index'] += $this->_sections['pics']['step'], $this->_sections['pics']['iteration']++):
$this->_sections['pics']['rownum'] = $this->_sections['pics']['iteration'];
$this->_sections['pics']['index_prev'] = $this->_sections['pics']['index'] - $this->_sections['pics']['step'];
$this->_sections['pics']['index_next'] = $this->_sections['pics']['index'] + $this->_sections['pics']['step'];
$this->_sections['pics']['first']      = ($this->_sections['pics']['iteration'] == 1);
$this->_sections['pics']['last']       = ($this->_sections['pics']['iteration'] == $this->_sections['pics']['total']);
?>
                            <span class="flex-fill">
                                <?php if ($this->_sections['pics']['first']): ?>
                                <img src="<?php if ($this->_tpl_vars['listing']['Main_photo']): ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank_10x7.gif<?php endif; ?>"
                                    <?php if ($this->_tpl_vars['listing']['Main_photo_x2']): ?>srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo_x2']; ?>
 2x"<?php endif; ?>
                                    alt="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
"
                                    loading="lazy" />
                                <?php else: ?>
                                    <img class="pic-empty-<?php echo $this->_sections['pics']['iteration']; ?>
 d-none" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank_10x7.gif" alt="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" />
                                    <?php if ($this->_sections['pics']['last'] && $this->_tpl_vars['listing']['Photos_count'] > 5): ?>
                                    <span class="justify-content-center align-items-center text-center flex-column">
                                        <svg viewBox="0 0 54 46">
                                            <use xlink:href="#photo-cam-icon"></use>
                                        </svg>
                                        <?php echo smarty_function_math(array('equation' => 'count - 5','count' => $this->_tpl_vars['listing']['Photos_count'],'assign' => 'more_count'), $this);?>

                                        <?php $this->assign('count_replace', ('{')."count".('}')); ?>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['count_more_pictures'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['count_replace'], $this->_tpl_vars['more_count']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['count_replace'], $this->_tpl_vars['more_count'])); ?>

                                    </span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </span>
                        <?php endfor; endif; ?>
                        </span>
                    </div>
                    <?php else: ?>
                        <img src="<?php if ($this->_tpl_vars['listing']['Main_photo']): ?><?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank_10x7.gif<?php endif; ?>"
                        <?php if ($this->_tpl_vars['listing']['Main_photo_x2']): ?>srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['listing']['Main_photo_x2']; ?>
 2x"<?php endif; ?>
                        alt="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
" />
                    <?php endif; ?>

                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingItemPhoto'), $this);?>


                    <?php if ($this->_tpl_vars['listing']['Featured']): ?><div class="label" title="<?php echo $this->_tpl_vars['lang']['featured']; ?>
"><?php echo $this->_tpl_vars['lang']['featured']; ?>
</div><?php endif; ?>
                </a>

                <span id="fav_<?php echo $this->_tpl_vars['listing']['ID']; ?>
" class="favorite add" title="<?php echo $this->_tpl_vars['lang']['add_to_favorites']; ?>
">
                    <svg viewBox="0 0 14 12" class="icon">
                        <use xlink:href="#favorite-icon"></use>
                    </svg>
                </span>
            </div>
        <?php endif; ?>

        <ul class="card-info d-flex flex-column position-relative<?php if ($this->_tpl_vars['config']['sf_display_fields']): ?> with-names<?php endif; ?>">
            <li class="title">
                <a class="link-large"
                    title="<?php echo $this->_tpl_vars['listing']['listing_title']; ?>
"
                    <?php if ($this->_tpl_vars['config']['view_details_new_window']): ?>target="_blank"<?php endif; ?>
                    href="<?php echo $this->_tpl_vars['listing']['url']; ?>
">
                    <?php echo $this->_tpl_vars['listing']['listing_title']; ?>

                </a>
            </li>

            <?php if ($this->_tpl_vars['listing']['fields']['bedrooms']['value'] || $this->_tpl_vars['listing']['fields']['bathrooms']['value'] || $this->_tpl_vars['listing']['fields']['square_feet']['value']): ?>
                <li class="services"><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['fields']['bedrooms']['value']): ?><?php echo '<span title="'; ?><?php echo $this->_tpl_vars['listing']['fields']['bedrooms']['name']; ?><?php echo '" class="badrooms">'; ?><?php echo $this->_tpl_vars['listing']['fields']['bedrooms']['value']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['fields']['bathrooms']['value']): ?><?php echo '<span title="'; ?><?php echo $this->_tpl_vars['listing']['fields']['bathrooms']['name']; ?><?php echo '" class="bathrooms">'; ?><?php echo $this->_tpl_vars['listing']['fields']['bathrooms']['value']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['listing']['fields']['square_feet']['value']): ?><?php echo '<span title="'; ?><?php echo $this->_tpl_vars['listing']['fields']['square_feet']['name']; ?><?php echo '" class="square_feet">'; ?><?php echo $this->_tpl_vars['listing']['fields']['square_feet']['value']; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?>
</li>
            <?php endif; ?>

            <li class="fields d-flex">
                <div class="flex-fill d-flex flex-wrap shrink-fix text-break">
                    <?php $this->assign('short_form_fields', 0); ?>
                    <?php $_from = $this->_tpl_vars['listing']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?>
                        <?php if (empty ( $this->_tpl_vars['item']['value'] ) || ! $this->_tpl_vars['item']['Details_page'] || ( $this->_tpl_vars['item']['Key'] == $this->_tpl_vars['config']['price_tag_field'] || ((is_array($_tmp=$this->_tpl_vars['item']['Key'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['tpl_settings']['listing_grid_except_fields']) : in_array($_tmp, $this->_tpl_vars['tpl_settings']['listing_grid_except_fields'])) )): ?><?php continue; ?><?php endif; ?>

                        <?php if ($this->_tpl_vars['config']['sf_display_fields']): ?>
                            <div class="table-cell small clearfix">
                                <div class="name"><?php echo $this->_tpl_vars['item']['name']; ?>
</div>
                                <div class="value"><?php echo $this->_tpl_vars['item']['value']; ?>
</div>
                            </div>
                        <?php else: ?>
                        <span><?php echo $this->_tpl_vars['item']['value']; ?>
</span>
                        <?php endif; ?>

                        <?php $this->assign('short_form_fields', $this->_tpl_vars['short_form_fields']+1); ?>
                    <?php endforeach; endif; unset($_from); ?>

                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingAfterFields'), $this);?>

                </div>
                <div class="stat-line"><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingAfterStats'), $this);?>
</div>
            </li>

            <li class="useful d-flex flex-wrap mt-2">
                <?php if ($this->_tpl_vars['config']['general_sunny_city_field'] && $this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['general_sunny_city_field']] && $this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['general_sunny_city_field']]['value']): ?>
                <span class="d-flex align-items-center card-info_location">
                    <svg viewBox="0 0 18 18" class="mr-1">
                        <use xlink:href="#small-location-icon"></use>
                    </svg>

                    <?php echo $this->_tpl_vars['listing']['fields'][$this->_tpl_vars['config']['general_sunny_city_field']]['value']; ?>

                </span>
                <?php endif; ?>
                <span class="d-flex align-items-center card-info_posted-date">
                    <svg viewBox="0 0 18 18" class="mr-1">
                        <use xlink:href="#small-clock-icon"></use>
                    </svg>

                    <?php echo toPrettyDateTimeShort(array('date' => $this->_tpl_vars['listing']['Date']), $this);?>

                </span>
            </li>

            <li class="system d-flex flex-wrap">
                <?php if ($this->_tpl_vars['price']['value']): ?>
                    <span class="price-tag">
                        <?php if ($this->_tpl_vars['price']['Options']['from']): ?><?php echo $this->_tpl_vars['lang']['price_from']; ?>
<?php endif; ?>
                        <span>
                            <?php if ($this->_tpl_vars['price']['Options']['option'] && $this->_tpl_vars['price']['Options']['option'] == $this->_tpl_vars['price']['Contact_form_option']): ?>
                                <a href="javascript://"
                                    class="contact-owner price-contact-form"
                                    data-listing-id="<?php echo $this->_tpl_vars['listing']['ID']; ?>
"
                                    data-account-id="<?php echo $this->_tpl_vars['listing']['Account_ID']; ?>
"
                                >
                            <?php endif; ?>
                            <?php echo $this->_tpl_vars['price']['value']; ?>

                            <?php if ($this->_tpl_vars['price']['Options']['option'] && $this->_tpl_vars['price']['Options']['option'] == $this->_tpl_vars['price']['Contact_form_option']): ?></a><?php endif; ?>
                        </span>
                        <?php if ($this->_tpl_vars['listing']['sale_rent'] == 2 && $this->_tpl_vars['listing']['fields']['time_frame']['value']): ?>
                            / <?php echo $this->_tpl_vars['listing']['fields']['time_frame']['value']; ?>

                        <?php endif; ?>
                    </span>
                <?php endif; ?>

                <div>
                    <div class="before-nav"><?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingBeforeStats'), $this);?>
</div>

                    <ul class="nav-column d-flex justify-content-end <?php if (! $this->_tpl_vars['price']['value']): ?> stick-top<?php endif; ?>">
                        <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'listingNavIcons'), $this);?>


                        <?php if ($this->_tpl_vars['config']['show_call_owner_button']): ?>
                        <li data-listing-id="<?php echo $this->_tpl_vars['listing']['ID']; ?>
" class="call-owner">
                            <svg viewBox="0 0 14 14" class="icon grid-icon-fill">
                                <use xlink:href="#contact-icon"></use>
                            </svg>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </li>

                    </ul>
    </div>
</article>

<!-- listing item end -->