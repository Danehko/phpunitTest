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

    public function testCalculandoMedia() //media
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculandoMediaComLixo() //media
    {
        $numbers = ['a',5,1];
        $this->assertEquals("ERROR-01", $this->Average->mean($numbers));
    }

    public function testCalculandoVazio() //media
    {
        $numbers = [];
        $this->assertEquals("ERROR-00", $this->Average->mean($numbers));
    }

    public function testCalculandoMediana() //mediana
    {
        $numbers = [3, 7, 6, 1, 5,10,2];
        $this->assertEquals(5, $this->Average->median($numbers));
    }

    public function testCalculandoMedianacomLixo() //mediana
    {
        $numbers = ['a','a',3, 7, 6, 1, 5];
        $this->assertEquals("ERROR-01", $this->Average->median($numbers));
    }

    public function testCalculandoMedianaComNPar() //mediana
    {
        $numbers = [3, 7, 6, 1, 5, 4];
        $this->assertEquals(4.5, $this->Average->median($numbers));
    }
    
    public function testCalculandoMedianaVazio() //mediana
    {
        $numbers = [];
        $this->assertEquals("ERROR-00", $this->Average->median($numbers));
    }

    public function testCalculandoSoma() //mediana
    {
        $numbers = [3, 7, 6, 1, 5, 4];
        $this->assertEquals(26, $this->Average->sum($numbers));
    }

    public function testCalculandoSomaVazio() //mediana
    {
        $numbers = [];
        $this->assertEquals("ERROR-00", $this->Average->sum($numbers));
    }

    public function testCalculandoSomaComLixo() //mediana
    {
        $numbers = [3, 7, 6, 1, 5, 4,'a'];
        $this->assertEquals("ERROR-01", $this->Average->sum($numbers));
    }

    public function testCalculadora0() //calculadora
    {
        $opcao = 0;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->Calculator($opcao, $numbers));
    }

    public function testCalculadora1() //calculadora
    { 
        $opcao = 1;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->Calculator($opcao, $numbers));
    }

    
    public function testCalculadora2() //calculadora
    {
        $opcao = 2;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(22, $this->Average->Calculator($opcao, $numbers));
    }


    public function testCalculadoraOpcaoErrada() //calculadora
    {
        $opcao = 5;
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals("ERROR-02", $this->Average->Calculator($opcao, $numbers));
    }

    public function testCalculadoraVazio() //calculadora
    {
        $opcao = 2;
        $numbers = [];
        $this->assertEquals("ERROR-00", $this->Average->Calculator($opcao, $numbers));
    }

    public function testCalculadoraOpcaoComLixo() //calculadora
    {
        $opcao = 2;
        $numbers = [3, 7, 6, 1, 5,'a'];
        $this->assertEquals("ERROR-01", $this->Average->Calculator($opcao, $numbers));
    }

    public function testComparacao()
    {
        $senha = "Daniel";
        $this->assertEquals(TRUE, $this->Average->confereTexto($senha, $senha));
    }
    public function testComparacaoFalsa()
    {
        $senhaConta = "Daniel";
        $senha = "Daniel1";
        $this->assertEquals(FALSE, $this->Average->confereTexto($senha,$senhaConta));
    }
}
