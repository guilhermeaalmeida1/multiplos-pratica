<?php

namespace Tests\MultiplosTest;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Multiples\Multiple;

#[CoversClass(Multiple::class)]
class MultiplosTest extends TestCase
{
    public function testMultipleNUmberWasDefinede()
    {
        $this->assertEquals((new Multiple(3))->getMultipleNumbersForValidation(), array(3));
    }

    private function compareResult($firstResulta, $secondResult)
    {
        return $firstResulta == $secondResult;
    }

    #[TestWith([23, 10, true])]
    #[TestWith([2633, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidateMultipleOdThreeAndFive($resultDesired, $totalUmbersToValidate, $boolToCompare): void
    {
        $multiple = new Multiple(3, 5);

        $multiple->validateNumber($totalUmbersToValidate);

        $this->assertEquals(
            $this->compareResult($resultDesired, $multiple->showResult()),
            $boolToCompare
        );
    }

    #[TestWith([18, 10, true])]
    #[TestWith([1683, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosTres($resultDesired, $totalUmbersToValidate, $boolToCompare): void
    {
        $multiple = new Multiple(3);

        $multiple->validateNumber($totalUmbersToValidate);

        $this->assertEquals($this->compareResult($resultDesired, $multiple->showResult()),
            $boolToCompare);
    }

    #[TestWith([5, 10, true])]
    #[TestWith([950, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosCinco($resultDesired, $totalUmbersToValidate, $boolToCompare): void
    {
        $multiple = new Multiple(5);

        $multiple->validateNumber($totalUmbersToValidate);

        $this->assertEquals(
            $this->compareResult($resultDesired, $multiple->showResult()),
            $boolToCompare
        );
    }

    #[TestWith([7, 10, true])]
    #[TestWith([735, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosSete($resultDesired, $totalUmbersToValidate, $boolToCompare): void
    {
        $multiple = new Multiple(7);

        $multiple->validateNumber($totalUmbersToValidate);

        $this->assertEquals(
            $this->compareResult($resultDesired, $multiple->showResult()),
            $boolToCompare
        );
    }

    #[TestWith([12, 10, true])]
    #[TestWith([1685, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosCincoESete($resultDesired, $totalUmbersToValidate, $boolToCompare): void
    {
        $multiple = new Multiple(5, 7);

        $multiple->validateNumber($totalUmbersToValidate);

        $this->assertEquals(
            $this->compareResult($resultDesired, $multiple->showResult()),
            $boolToCompare
        );
    }

    #[TestWith([25, 10, true])]
    #[TestWith([2418, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosTresESete($resultDesired, $totalUmbersToValidate, $boolToCompare): void
    {
        $multiple = new Multiple(3, 7);

        $multiple->validateNumber($totalUmbersToValidate);

        $this->assertEquals(
            $this->compareResult($resultDesired, $multiple->showResult()),
            $boolToCompare
        );
    }
}