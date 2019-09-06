<?php
defined('TYPO3_MODE') || die('Access denied.');

(function () {
    // X-Class image view helper
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder::class] = [
        'className' => \Pixelant\PxaLazyLoadingImages\TagBuilder::class
    ];
})();
