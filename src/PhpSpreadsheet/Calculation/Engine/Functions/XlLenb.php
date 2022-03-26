<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine\Functions;

use PhpOffice\PhpSpreadsheet\Calculation\Category;
use PhpOffice\PhpSpreadsheet\Calculation\Engine\XlFunctionAbstract;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Text;

/**
 * @inheritDoc
 */
class XlLenb extends XlFunctionAbstract
{
    /**
     * @var string
     */
    protected $name = 'LENB';

    /**
     * @var string
     */
    protected $category = Category::CATEGORY_TEXT_AND_DATA;

    /**
     * @var callable
     */
    protected $functionCall = [Text::class, 'length'];

    /**
     * @var string
     */
    protected $argumentCount = '1';
}
