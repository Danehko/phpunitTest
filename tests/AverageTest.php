3+7+<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected $Average;

    public function setUp()
    {
        $this->Average = new Average();
    }

    public function testCalculationOfMean() //media
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculationOfMeanErro() //media
    {
        $numbers = [];
        $this->assertEquals("ERRO", $this->Average->mean($numbers));
    }

    public function testCalculationOfMedian() //mediana
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }

    public function testCalculationOfMean2()
    {
        $numbers = [1,1,1,1,1,1,1];
        $this->assertEquals(1, $this->Average->mean($numbers));
    }

    public function testCalculationOfMedian2() //mediana
    {
        $numbers = [3, 7, 6, 1, 5, 4];
        $this->assertEquals(4.5, $this->Average->median($numbers));
    }

    public function testCalculationOfSum() //mediana
    {
        $numbers = [3, 7, 6, 1, 5, 4];
        $this->assertEquals(26, $this->Average->sum($numbers));
    }

    public function testCalculator0()
    {
        $opcao = 0;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->Calculator($opcao, $numbers));
    }
    public function testCalculator1()
    {
        $opcao = 1;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->Calculator($opcao, $numbers));
    }
    public function testCalculator2()
    {
        $opcao = 2;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(22, $this->Average->Calculator($opcao, $numbers));
    }
    public function testCalculator3()
    {
        $opcao = 5;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals([3, 7, 6, 1, 5], $this->Average->Calculator($opcao, $numbers));
    }
    public function testesenha()
    {
        $senha = "Daniel";
        echo gettype($senha);
        $this->assertEquals(TRUE, $this->Average->confereTexto($senha));
    }


}
