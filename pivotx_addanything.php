<?php
// - Extension: Add Anything
// - Version: 0.1
// - Author: MattD
// - Email: networkhood@google.com
// - Site: http://www.bitnn.com
// - Description: Adds whatever you put in the tag... watch out... seriously, anything.
// - Date: 2012-05-08
// - Identifier: addanything

// Register 'addanything' as a smarty tag.
$PIVOTX['template']->register_function('addanything', 'smarty_addanything');
function smarty_addanything($params, &$smarty) {
    global $PIVOTX;

    if (empty($params['target'])) {
        return "";
    } else {
        $target = $params['target'];
    }

    $html = file_get_contents($target);
    return $html;
}

?>

