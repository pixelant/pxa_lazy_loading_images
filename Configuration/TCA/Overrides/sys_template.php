<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'pxa_lazy_loading_images',
    'Configuration/TypoScript',
    'Pxa Lazy Loading Images'
);
