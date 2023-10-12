<?php
if (!defined ('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile('bht-su-theme','Configuration/TSconfig/BackendLayouts.tsconfig','Default Backend Layout mit Sidebar');
