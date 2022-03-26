<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Concatenate;

/**
 * @inheritDoc
 */
class XlConcatenate extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'CONCATENATE';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_TEXT_AND_DATA;

    /**
     * @var callable
     */
    protected $functionCall = [Concatenate::class, 'CONCATENATE'];

    /**
     * @var string
     */
    protected $argumentCount = '1+';
}
