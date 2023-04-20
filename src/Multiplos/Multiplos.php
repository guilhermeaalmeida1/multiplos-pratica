<?php

namespace src\Multiplos;

class Multiplos
{

    public int $resultado = 0;

    public array $numeroMultiploParaValidacao;

    public function __construct(int ...$num)
    {
        $this->numeroMultiploParaValidacao = $num;
    }

    public function verificaSeNumeroEMultiplo(int $numero, int $numeroMultiplo): bool
    {
        return ($numero % $numeroMultiplo) == 0;
    }

    private function somaResultado($numeroValidado): void
    {
        $this->resultado += $numeroValidado;
    }

    public function mostraResultado(): int
    {
        return $this->resultado;
    }

    public function validaNumeros($totalDeNumerosParaValicacao): void
    {
        foreach ($this->numeroMultiploParaValidacao as $numeroMultiplo) {
            for ($i = 0; $i < $totalDeNumerosParaValicacao; $i++) {
                if ($this->verificaSeNumeroEMultiplo($i, $numeroMultiplo)) {
                    $this->somaResultado($i);
                }
            }
        }
    }

    public function getNumeroMultiploParaValidacao(): array
    {
        return $this->numeroMultiploParaValidacao;
    }


}