<?php

namespace src\Multiples;

class Multiple
{

    public int $result = 0;

    public array $multipleNumbersForValidation;

    public function __construct(int ...$num)
    {
        $this->multipleNumbersForValidation = $num;
    }

    public function numberIsMultiple(int $number, int $multiple): bool
    {
        return ($number % $multiple) == 0;
    }

    private function sumResult($validNumber): void
    {
        $this->result += $validNumber;
    }

    public function showResult(): int
    {
        return $this->result;
    }

    public function validateNumber($totalUmbersToValidate): void
    {
        foreach ($this->multipleNumbersForValidation as $value) {
            for ($i = 0; $i < $totalUmbersToValidate; $i++) {
                if ($this->numberIsMultiple($i, $value)) {
                    $this->sumResult($i);
                }
            }
        }
    }

    public function getMultipleNumbersForValidation(): array
    {
        return $this->multipleNumbersForValidation;
    }


}