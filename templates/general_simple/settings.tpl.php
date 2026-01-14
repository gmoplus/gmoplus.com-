<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.10.0
 *  LICENSE: FL0255RKH690 - https://www.flynax.com/flynax-software-eula.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: gmoplus.com
 *  FILE: SETTINGS.TPL.PHP
 *  
 *  The software is a commercial product delivered under single, non-exclusive,
 *  non-transferable license for one domain or IP address. Therefore distribution,
 *  sale or transfer of the file in whole or in part without permission of Flynax
 *  respective owners is considered to be illegal and breach of Flynax License End
 *  User Agreement.
 *  
 *  You are not allowed to remove this information from the file without permission
 *  of Flynax respective owners.
 *  
 *  Flynax Classifieds Software 2025 | All copyrights reserved.
 *  
 *  https://www.flynax.com
 ******************************************************************************/

switch ($config['general_simple_color']) {
    case 'red':
        $color_code = 'e07165';
        break;

    case 'blue':
        $color_code = '3879c2';
        break;

    default:
        $color_code = '6f983e';
        break;
}

/* template settings */
$tpl_settings = array(
    'type' => 'responsive_42', // DO NOT CHANGE THIS SETTING
    'version' => 1.1,
    'name' => 'general_simple_wide', // _flatty_wide - is necessary postfix
    'inventory_menu' => false,
    'right_block' => false,
    'long_top_block' => false,
    'featured_price_tag' => true,
    'ffb_list' => false, //field bound boxes plugins list
    'fbb_custom_tpl' => true,
    'header_banner' => true,
    'header_banner_size_hint' => '728x90',
    'home_page_gallery' => false,
    'autocomplete_tags' => true,
    'category_banner' => true,
    'shopping_cart_use_sidebar' => true,
    'listing_details_anchor_tabs' => false,
    'listing_details_nav_mode' => 'h1_mixed',
    'search_on_map_page' => true,
    'ld_posted_date_fixed' => true,
    'home_page_map_search' => false,
    'browse_add_listing_icon' => true,
    'listing_details_simple_gallary' => true,
    'listing_grid_except_fields' => array('title', 'bedrooms', 'bathrooms', 'square_feet', 'time_frame', 'phone', 'pay_period'),
    'sidebar_sticky_pages' => array('listing_details'),
    'sidebar_restricted_pages' => array('search_on_map'),
    'svg_icon_fill' => true,
    'default_listing_grid_mode' => 'list',
    'listing_grid_mode_only' => false,
    'qtip' => array(
        'background' => $color_code,
        'b_color'    => $color_code,
    ),
    'font_family' => [
        'local' => true,
        'name' => 'Source Sans Pro',
        'format' => 'woff2',
        'weights' => [
            '300' => 'SourceSansPro-Light',
            '400' => 'SourceSansPro-Regular',
            '600' => 'SourceSansPro-Bold',
        ]
    ]
);

if (is_object($rlSmarty)) {
    $rlSmarty -> assign_by_ref('tpl_settings', $tpl_settings);
}

// insert config setting related data
if (!isset($config['general_simple_color'])) {
    $reefless->loadClass('Lang');
    $lang_keys = [];
    $languages = $rlLang->getLanguagesList();
    $tpl_phrases = array(
        array('admin', 'config+name+general_simple_color', 'Template color', 'settings')
    );

    // Insert template phrases
    foreach ($languages as $language) {
        foreach ($tpl_phrases as $tpl_phrase) {
            if (!$rlDb->getOne('ID', "`Code` = '{$language['Code']}' AND `Key` = '{$tpl_phrase[1]}'", 'lang_keys')) {
                $lang_keys[] = [
                    'Code' => $language['Code'],
                    'JS' => '0',
                    'Module' => $tpl_phrase[0],
                    'Key' => $tpl_phrase[1],
                    'Value' => $rlValid->xSql($tpl_phrase[2]),
                    'Plugin' => $tpl_settings['type'],
                    'Target_key' => $tpl_phrase[3] ?: '',
                ];
            }
        }
    }

    $rlLang->createPhrases($lang_keys);

    // Insert config
    $rlDb->insertOne([
        'Group_ID' => 1,
        'Position' => 10,
        'Key' => 'general_simple_color',
        'Default' => 'green',
        'Type' => 'select',
        'Plugin' => $tpl_settings['type']
    ], 'config');

    // Insert hooks
    $db_prefix = RL_DBPREFIX;
    $sql = <<< VS
INSERT INTO `{$db_prefix}hooks` (`Name`, `Plugin`, `Code`, `Status`) VALUES
('apMixConfigItem', '{$tpl_settings['type']}', 'global \$config, \$configsLsit;\r\n\r\nif (\$param1[''Key''] != ''general_simple_color'')\r\n    return;\r\n\r\n\$param1[''Values''] = array(\r\n    array(''ID'' => ''green'', ''name'' => ''Green''),\r\n    array(''ID'' => ''blue'', ''name'' => ''Blue''),\r\n    array(''ID'' => ''red'', ''name'' => ''Red'')\r\n);\r\n\r\n// remove empty "- Select -" option from colors selector\r\n\$param2[] = ''general_simple_color'';', 'active'),
('apTplContentBottom', '{$tpl_settings['type']}', 'global \$controller, \$config;\r\n\r\nif (\$controller != ''settings'') return;\r\n\r\n\$out = <<< VS\r\n<script>\r\nvar general_simple_color = function(){\r\n    var name = \$(''select[name="post_config[template][value]"]'').val();\r\n    var row = \$(''select[name="post_config[general_simple_color][value]"]'').closest(''tr'');\r\n\r\n    if (name == ''general_simple'') {\r\n        row.show();\r\n    } else {\r\n        row.hide();\r\n    }\r\n};\r\n\r\ngeneral_simple_color();\r\n\$(''select[name="post_config[template][value]"]'').change(function(){\r\n    general_simple_color();\r\n});\r\n</script>\r\nVS;\r\n\r\necho \$out;', 'active');
VS;
    $rlDb->query($sql);

    // update page for fetch new hooks in system
    if (defined('REALM') && REALM == 'admin') {
        $reefless->referer();
    }
}
