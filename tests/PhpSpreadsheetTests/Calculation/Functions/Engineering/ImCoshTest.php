<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Engineering;

use PhpOffice\PhpSpreadsheet\Calculation\Engineering;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheetTests\Custom\ComplexAssert;
use PHPUnit\Framework\TestCase;

class ImCoshTest extends TestCase
{
    const COMPLEX_PRECISION = 1E-8;

    /**
     * @var ?ComplexAssert
     */
    protected $complexAssert;

    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
        $this->complexAssert = new ComplexAssert();
    }

    protected function tearDown(): void
    {
        $this->complexAssert = null;
    }

    /**
     * @dataProvider providerIMCOSH
     *
     * @param mixed $expectedResult
     * @param mixed $value
     */
    public function testIMCOSH($expectedResult, $value): void
    {
        $result = Engineering::IMCOSH($value);
        self::assertTrue(
            $this->complexAssert->assertComplexEquals($expectedResult, $result, self::COMPLEX_PRECISION),
            $this->complexAssert->getErrorMessage()
        );
    }

    public function providerIMCOSH()
    {
        return require 'tests/data/Calculation/Engineering/IMCOSH.php';
    }
}
