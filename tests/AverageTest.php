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

    public function calculandoMedia() //media
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function calculandoMediaComLixo() //media
    {
        $numbers = ['a','b',"",'',"ba",3,4];
        $this->assertEquals(1, $this->Average->mean($numbers));
    }

    public function calculandoVazio() //media
    {
        $numbers = [];
        $this->assertEquals("ERRO", $this->Average->mean($numbers));
    }

    public function calculandoMediana() //mediana
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }

    public function calculandoMedianaComNPar() //mediana
    {
        $numbers = [3, 7, 6, 1, 5, 4];
        $this->assertEquals(4.5, $this->Average->median($numbers));
    }

    public function calculandoSoma() //mediana
    {
        $numbers = [3, 7, 6, 1, 5, 4];
        $this->assertEquals(26, $this->Average->sum($numbers));
    }

    public function testandoCalculadora0()
    {
        $opcao = 0;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->Calculator($opcao, $numbers));
    }

    public function testandoCalculadora1()
    {
        $opcao = 1;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->Calculator($opcao, $numbers));
    }

    
    public function testandoCalculadora2()
    {
        $opcao = 2;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(22, $this->Average->Calculator($opcao, $numbers));
    }


    public function testandoCalculadora3()
    {
        $opcao = 5;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals([3, 7, 6, 1, 5], $this->Average->Calculator($opcao, $numbers));
    }

    public function testandoComparacao()
    {
        $senha = "Daniel";
        $this->assertEquals(TRUE, $this->Average->confereTexto($senha));
    }
}
