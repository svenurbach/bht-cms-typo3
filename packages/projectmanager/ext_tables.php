<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Projectmanager',
        'tools',
        'projectmanager',
        '',
        [
            
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:projectmanager/Resources/Public/Icons/user_mod_projectmanager.svg',
            'labels' => 'LLL:EXT:projectmanager/Resources/Private/Language/locallang_projectmanager.xlf',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projectmanager_domain_model_project', 'EXT:projectmanager/Resources/Private/Language/locallang_csh_tx_projectmanager_domain_model_project.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projectmanager_domain_model_project');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projectmanager_domain_model_tech', 'EXT:projectmanager/Resources/Private/Language/locallang_csh_tx_projectmanager_domain_model_tech.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projectmanager_domain_model_tech');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_projectmanager_domain_model_person', 'EXT:projectmanager/Resources/Private/Language/locallang_csh_tx_projectmanager_domain_model_person.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_projectmanager_domain_model_person');
})();
