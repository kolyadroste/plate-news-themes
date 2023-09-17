<?php
defined('TYPO3') || die ('Access denied.');
call_user_func(function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'plate_news_themes',
        'setup',
        "@import 'EXT:plate_news_themes/Configuration/TypoScript/setup.typoscript'");
});
