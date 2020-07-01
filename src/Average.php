<?php

namespace drmonkeyninja;
require __DIR__ . "/../vendor/autoload.php";

const VAZIO     = "ERROR-00"; //PARAMETRO VAZIO 
const LIXO      = "ERROR-01"; //PARAMETRO INFORMADO ERRADO
const OPCAO_INV = "ERROR-02"; //OPÇÃO INVALIDA

class Average{
    public $aux1 = 0;

    /**
     * Calculate the mean average
     * @param array $numbers Array of numbers
     * @return float Mean average
     */
    public function mean(array $numbers)
    {
        $contador=0;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contador = $contador + 1;
                }
                else{
                    return LIXO;
                }
            }
            return array_sum($numbers) / count($numbers);
        }else{
            return VAZIO;
        }       
    }

    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function median(array $numbers)
    {
        $retorno =0;
        $contador =0;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contador = $contador + 1;
                }
                else
                {
                    return LIXO;
                }
            }
            sort($numbers);
            $size = count($numbers);
            if ($size % 2) {
                $retorno = $numbers[$size / 2];
            } else {
                $retorno = $this->mean(array_slice($numbers, ($size / 2) - 1, 2));
            }
            return $retorno;
        }
        else{
            return VAZIO;
        }
    }

    public function sum(array $numbers)
    {
        $contador =0;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contador = $contador + 1;
                }
                else
                {
                    return LIXO;
                }
            }
            return array_sum($numbers);
        }
        else{
            return VAZIO;
        }        
    }

    public function calculator($opcao, array $numbers)
    {
        $retorno = 0;
        $contador =0;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contador = $contador + 1;
                }
                else
                {
                    return LIXO;
                }
            }
            switch($opcao){
                case 0:
                    $retorno = $this->mean($numbers);
                break;
                case 1:
                    $retorno = $this->median($numbers);
                break;
                case 2:
                    $retorno = $this->sum($numbers);
                break;
                default:
                    $retorno = OPCAO_INV;
                break;   
            }
            return $retorno; 
        }
        else{
            return VAZIO;
        }   
    }

    public function confereTexto($senhaConta, $senhaDigitada )
    {
        if($senhaConta == $senhaDigitada){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
