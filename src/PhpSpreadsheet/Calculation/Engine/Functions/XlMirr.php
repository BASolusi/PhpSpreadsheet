<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\CashFlow\Variable\Periodic;

/**
 * @inheritDoc
 */
class XlMirr extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'MIRR';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_FINANCIAL;

    /**
     * @var callable
     */
    protected $functionCall = [Periodic::class, 'modifiedRate'];

    /**
     * @var string
     */
    protected $argumentCount = '3';
}
