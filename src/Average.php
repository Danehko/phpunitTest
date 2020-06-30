<?php

namespace drmonkeyninja;

class Average
{
    /**
     * Calculate the mean average
     * @param array $numbers Array of numbers
     * @return float Mean average
     */
    public function mean(array $numbers)
    {
        if (count($numbers)> 0){
            return array_sum($numbers) / count($numbers);
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
