<?php

declare(strict_types=1);

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
    public function testEmptyStringShouldReturnZero(): void
    {
        $result = $this->calculator->add('');
        $this->assertEquals(0, $result);
    }
    public function testIfIWillPassOneYouWillReturnOne(): void
    {
        $result = $this->calculator->add('1');
        $this->assertEquals(1, $result);
    }
    public function testIfIWillPassNumberYouWillReturnNumber(): void
    {
        $result = $this->calculator->add('12');
        $this->assertEquals(12, $result);
    }
    public function testIfIWillPassTwoPlusThreeItWillReturnFive(): void
    {
        $result = $this->calculator->add('2,3');
        $this->assertEquals(5, $result);
    }
}
