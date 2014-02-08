<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

$className = 'OA_UpgradePostscript_2_7_30_beta_rc4';

require_once RV_PATH . '/lib/RV.php';
RV::require_lib(
    array(
        '/OA/DB/Table.php',
        '/OA/Upgrade/UpgradeLogger.php'
    )
);

class OA_UpgradePostscript_2_7_30_beta_rc4
{
    var $oUpgrade;

    function OA_UpgradePostscript_2_7_30_beta_rc4()
    {

    }

    function execute($aParams)
    {
        $this->oUpgrade = & $aParams[0];
        $this->oUpgrade->addPostUpgradeTask('Rebuild_Banner_Cache');
        return true;
    }

}