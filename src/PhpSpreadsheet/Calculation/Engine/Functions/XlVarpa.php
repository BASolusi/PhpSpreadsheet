<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Variances;

/**
 * @inheritDoc
 */
class XlVarpa extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'VARPA';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_STATISTICAL;

    /**
     * @var callable
     */
    protected $functionCall = [Variances::class, 'VARPA'];

    /**
     * @var string
     */
    protected $argumentCount = '1+';
}
