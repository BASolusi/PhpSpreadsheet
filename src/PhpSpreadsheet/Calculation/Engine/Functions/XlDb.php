<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Depreciation;

/**
 * @inheritDoc
 */
class XlDb extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'DB';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_FINANCIAL;

    /**
     * @var callable
     */
    protected $functionCall = [Depreciation::class, 'DB'];

    /**
     * @var string
     */
    protected $argumentCount = '4,5';
}
