<?php
declare(strict_types=1);

namespace Pixelant\PxaLazyLoadingImages\Utility;

/**
 * Class MainUtility
 * @package Pixelant\PxaLazyLoadingImages\Utility
 */
class MainUtility
{
    /**
     * Check if lazy loading is enabled
     */
    public static function isLazyLoadingEnabled(): bool
    {
        if (defined('TYPO3_MODE') && TYPO3_MODE === 'FE') {
            return (bool)($GLOBALS['TSFE']->config['config']['tx_pxalazyloadingimages_enable'] ?? 0);
        }

        return false;
    }
}
