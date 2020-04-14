<?php declare(strict_types=1);

namespace StringCalculatorKata;

use PHPUnit\Framework\TestCase;

require __DIR__ . '/../src/StringCalculator.php';

final class StringCalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new StringCalculator();
    }

    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }

    public function testEmptyStringShouldReturnZero(): void
    {
        $result = $this->calculator->add('');
        $this->assertEquals(0, $result);
    }
}

