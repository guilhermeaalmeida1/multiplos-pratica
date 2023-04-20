<?php

namespace Tests\MultiplosTest;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Multiplos\Multiplos;

#[CoversClass(Multiplos::class)]
class MultiplosTest extends TestCase
{
    public function testNumeroMultiploFoiDefinido()
    {
        $multiplos = new Multiplos(3);
        $this->assertEquals($multiplos->getNumeroMultiploParaValidacao(), array(3));
    }

    private function comparaResultado($primeiroResultado, $segundoResultado)
    {
        return $primeiroResultado == $segundoResultado;
    }

    #[TestWith([23, 10, true])]
    #[TestWith([2633, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosTresECinco($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(3, 5);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals(
            $this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()),
            $boolComparacao
        );
    }

    #[TestWith([18, 10, true])]
    #[TestWith([1683, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosTres($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplosaaaaaaaaaa = new Multiplos(3);

        $multiplosaaaaaaaaaa->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals($this->comparaResultado($resultadoEsperado, $multiplosaaaaaaaaaa->mostraResultado()),
            $boolComparacao);
    }

    #[TestWith([5, 10, true])]
    #[TestWith([950, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosCinco($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(5);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals(
            $this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()),
            $boolComparacao
        );
    }

    #[TestWith([7, 10, true])]
    #[TestWith([735, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosSete($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(7);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals(
            $this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()),
            $boolComparacao
        );
    }

    #[TestWith([12, 10, true])]
    #[TestWith([1685, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosCincoESete($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(5, 7);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals(
            $this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()),
            $boolComparacao
        );
    }

    #[TestWith([25, 10, true])]
    #[TestWith([2418, 100, true])]
    #[TestWith([24, 10, false])]
    public function testValidaMultiplosTresESete($resultadoEsperado, $totalDeNumerosNaturais, $boolComparacao): void
    {
        $multiplos = new Multiplos(3, 7);

        $multiplos->validaNumeros($totalDeNumerosNaturais);

        $this->assertEquals(
            $this->comparaResultado($resultadoEsperado, $multiplos->mostraResultado()),
            $boolComparacao
        );
    }
}