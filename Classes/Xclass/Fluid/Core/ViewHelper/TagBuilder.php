<?php
declare(strict_types=1);

namespace Pixelant\PxaLazyLoadingImages\Xclass\Fluid\Core\ViewHelper;

use TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder as TagBuilderAlias;

/**
 * Class TagBuilder
 * @package Pixelant\PxaLazyLoadingImages
 */
class TagBuilder extends TagBuilderAlias
{
    /**
     * Set image 'src' attribute as 'data-src'
     *
     * @param string $attributeName
     * @param string $attributeValue
     * @param bool $escapeSpecialCharacters
     */
    public function addAttribute($attributeName, $attributeValue, $escapeSpecialCharacters = true)
    {
        if ($this->tagName === 'img' && $attributeName === 'src') {
            $attributeName = 'data-src';
        }
        parent::addAttribute($attributeName, $attributeValue, $escapeSpecialCharacters);
    }
}
