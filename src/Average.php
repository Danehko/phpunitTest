<?php

namespace drmonkeyninja;

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
        $contv = 0;
        echo $contador;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                $contador = $contador + 1;
                echo $contador;
                if(is_int($numbers[$contador])!=1){
                    $contv = $contv + 1;
                }
            }
            return array_sum($numbers) / (count($numbers) - $contv);
        }else{
            return "ERRO";
        }       
    }

    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function median(array $numbers)
    {
        sort($numbers);
        $size = count($numbers);
        if ($size % 2) {
            return $numbers[$size / 2];
        } else {
            return $this->mean(array_slice($numbers, ($size / 2) - 1, 2)
            );
        }
    }

    public function sum(array $numbers)
    {
        return array_sum($numbers);
    }

    public function calculator($opcao, array $numbers)
    {
        switch($opcao){
            case 0:
                return $this->mean($numbers);
            case 1:
                return $this->median($numbers);
            case 2:
                return $this->sum($numbers);
            default:
                return $numbers;
        }

    }

    public function confereTexto($senha)
    {
        if($senha == "Daniel"){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
