<?php

namespace TRAW\VideoVtt\Resource\Rendering;

/*
 * This file is part of the "video_vtt" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Http\ApplicationType;
use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder;

/**
 * Class AudioTagRenderer
 */
class AudioTagRenderer extends \TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer
{

    /**
     * The MimeTypes are used in a DisplayCondition
     *
     * @return array
     */
    public function getPossibleMimeTypes(): array
    {
        return $this->possibleMimeTypes;
    }
}
