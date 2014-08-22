<?php

/**
 * Uninstall file for blog
 *
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id$
 */
function tax_agreement_uninstall(&$content)
{
    $db = Database::newDB();

    if ($db->tableExists('ta_form')) {
        $tbl = $db->buildTable('ta_form');
        $tbl->drop();
    }
    return true;
}

?>
