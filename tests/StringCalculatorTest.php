<?php

declare(strict_types=1);

namespace StringCalculatorKata;

use PHPUnit\Framework\TestCase;

require __DIR__ . '/../src/StringCalculator.php';

final class StringCalculatorTest extends TestCase
{
    private $calculator;

    public function testEmptyStringShouldReturnZero(): void
    {
        $this->calculator = new StringCalculator();

        $result = $this->calculator->add('');

        $this->assertEquals(0, $result);
    }

    public function testIfIWillPassOneYouWillReturnOne(): void
    {
        $this->calculator = new StringCalculator();

        $result = $this->calculator->add('1');

        $this->assertEquals(1, $result);
    }

    public function testIfIWillPassNumberYouWillReturnNumber(): void
    {
        $this->calculator = new StringCalculator();

        $result = $this->calculator->add('12');

        $this->assertEquals(12, $result);
    }
}
