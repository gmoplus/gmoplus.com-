<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.9.3
 *  LICENSE: FL0255RKH690 - https://www.flynax.com/flynax-software-eula.html
 *  PRODUCT: General Classifieds
 *  DOMAIN: gmoplus.com
 *  FILE: USER_FEEDS.INC.PHP
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

$formats = $rlDb->fetch(['Key', 'Name'], array('Status'=>'active'), "AND FIND_IN_SET('import', `Format_for`) ORDER BY `Key`", null, 'xml_formats');

if (!$formats) {
    $errors[] = $lang['xf_configure_formats'];
} else {
    $rlSmarty->assign_by_ref('formats', $formats);

    $reefless->loadClass('XmlImport', null, 'xmlFeeds');

    if ($_POST['submit']) {
        $feed_url = $_POST['feed_url'];
        $format = $_POST['xml_format'];
        $name = $_POST['feed_name'];
        $feed_key = $rlValid->str2key($name) . "_" . $account_info['ID'] . "_" . rand();

        if (!$format || $format == "0") {
            $errors[] = str_replace('{field}', '<span class="field_error">'. $lang['xf_format'] .'</span>', $lang['notice_field_empty']);
            $error_fields .= 'xml_format,';
        }

        if (!trim($feed_url)) {
            $errors[] = str_replace('{field}', '<span class="field_error">'. $lang['xf_feed_url'] .'</span>', $lang['notice_field_empty']);
            $error_fields .= 'feed_url,';
        } elseif ($rlDb->getOne('Key', "`Url` = '{$feed_url}'", "xml_feeds")) {
            $errors[] = $lang['xf_notice_url_exist'];
            $error_fields .= 'feed_url,';
        } elseif (!$rlValid->isUrl($feed_url)) {
            $errors[] = str_replace('{field}', '<span class="field_error">'. $lang['xf_feed_url'] .'</span>', $lang['notice_field_incorrect']);
            $error_fields .= 'feed_url,';
        }

        if (!$errors) {
            $insert['Key'] = $feed_key;
            $insert['Name'] = $name;
            $insert['Url'] = $feed_url;
            $insert['Account_ID'] = $account_info['ID'];
            $insert['Format'] = $format;
            $insert['Plan_ID'] = $rlDb->getOne("ID", "`Status` = 'active' AND `Price` = 0", "listing_plans");
            $insert['Default_category'] = '';
            $insert['Listings_status'] = $config['xml_users_feeds_status'] == 'active' ? 'active' : 'approval';
            $insert['Status'] = 'pending';

            if ($rlDb->insertOne($insert, "xml_feeds")) {
                $reefless->loadClass('Notice');
                $rlNotice->saveNotice($lang['xf_feed_submitted']);
                $reefless->refresh();
            }
        }
    }

    $sql = "SELECT *, ";
    $sql .="IF(UNIX_TIMESTAMP(`Lastrun`) = 0, 0, `Lastrun`) AS `Lastrun` ";
    $sql .="FROM `{db_prefix}xml_feeds` ";
    $sql .="WHERE `Account_ID` = {$account_info['ID']} ";
    $feeds = $rlDb->getAll($sql);

    $rlSmarty->assign("feeds", $feeds);

    $reefless->loadClass('XmlFeeds', null, "xmlFeeds");
    $rlXajax->registerFunction(array('deleteXmlFeed', $rlXmlFeeds, 'ajaxDeleteXmlFeed'));
}
