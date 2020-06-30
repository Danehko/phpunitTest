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
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contv = $contv;
                }
                else{
                    $contv = $contv + 1;
                }
                $contador = $contador + 1;
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
        $array = array();
        $contador =0;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    array_push($array,$numbers[$contador]);
                }
                $contador = $contador + 1;
            }
            sort($array);
            $size = count($array);
            if ($size % 2) {
                return $array[$size / 2];
            } else {
                return $this->mean(array_slice($array, ($size / 2) - 1, 2)
                );
            }
        }
        else{
            return "ERRO";
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
