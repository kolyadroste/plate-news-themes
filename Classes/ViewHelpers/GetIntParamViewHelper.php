<?php

namespace Atomicplan\PlateNewsThemes\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetIntParamViewHelper extends AbstractViewHelper
{
    /**
     * Initialize arguments
     */
    public function initializeArguments()
    {
        $this->registerArgument('name', 'string', 'Name of the GET parameter', true);
    }

    /**
     * Renders a GET param
     */
    public function render()
    {
        $param = $this->arguments['name'];
        $value = GeneralUtility::_GET($param);
        if (!empty($value) && is_numeric($value)) {
            $value = (int)$value;
        } else {
            $value = null;
        }

        return $value;
    }
}
