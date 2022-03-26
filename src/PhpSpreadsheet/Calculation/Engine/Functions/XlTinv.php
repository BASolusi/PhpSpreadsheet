<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\StudentT;

/**
 * @inheritDoc
 */
class XlTinv extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'TINV';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_STATISTICAL;

    /**
     * @var callable
     */
    protected $functionCall = [StudentT::class, 'inverse'];

    /**
     * @var string
     */
    protected $argumentCount = '2';
}
