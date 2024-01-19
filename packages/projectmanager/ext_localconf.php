<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Projectmanager',
        'Projectmanager',
        [
            
        ],
        // non-cacheable actions
        [
            
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    projectmanager {
                        iconIdentifier = projectmanager-plugin-projectmanager
                        title = LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_projectmanager.name
                        description = LLL:EXT:projectmanager/Resources/Private/Language/locallang_db.xlf:tx_projectmanager_projectmanager.description
                        tt_content_defValues {
                            CType = list
                            list_type = projectmanager_projectmanager
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
