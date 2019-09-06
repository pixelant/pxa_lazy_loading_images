<?php
defined('TYPO3_MODE') || die('Access denied.');

(function () {
    // X-Class image view helper
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::class] = [
        'className' => \Pixelant\PxaLazyLoadingImages\Xclass\Fluid\ViewHelpers\ImageViewHelper::class
    ];
})();
