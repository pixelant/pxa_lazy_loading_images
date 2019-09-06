<?php
declare(strict_types=1);

namespace Pixelant\PxaLazyLoadingImages\Xclass\Fluid\ViewHelpers;

use Pixelant\PxaLazyLoadingImages\Utility\MainUtility;
use Pixelant\PxaLazyLoadingImages\Xclass\Fluid\Core\ViewHelper\TagBuilder;
use TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper as ExtbaseImageViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder as ExtbaseTagBuilder;

/**
 * Class ImageViewHelper
 * @package Pixelant\PxaLazyLoadingImages\Xclass\Fluid\ViewHelpers
 */
class ImageViewHelper extends ExtbaseImageViewHelper
{
    /**
     * Set own tag builder. Only on FE
     *
     * @param ExtbaseTagBuilder $tag
     */
    public function setTagBuilder(ExtbaseTagBuilder $tag)
    {
        if (MainUtility::isLazyLoadingEnabled()) {
            $tag = (new TagBuilder($tag->getTagName()));
        }
        parent::setTagBuilder($tag);
    }
}
