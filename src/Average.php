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
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contador = $contador + 1;
                }
                else{
                    return "ERROR-01";
                }
            }
            return array_sum($numbers) / count($numbers);
        }else{
            return "ERROR-00";
        }       
    }

    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function median(array $numbers)
    {
        $contador =0;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contador = $contador + 1;
                }
                else
                {
                    return "ERROR-01";
                }
            }
            sort($numbers);
            $size = count($numbers);
            if ($size % 2) {
                return $numbers[$size / 2];
            } else {
                return $this->mean(array_slice($numbers, ($size / 2) - 1, 2));
            }
        }
        else{
            return "ERROR-00";
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
                    return "ERROR-01";
                }
            }
            return array_sum($numbers);
        }
        else{
            return "ERROR-00";
        }        
    }

    public function calculator($opcao, array $numbers)
    {
        $contador =0;
        if (count($numbers)> 0){
            while($contador != count($numbers)){
                if(is_int($numbers[$contador])){
                    $contador = $contador + 1;
                }
                else
                {
                    return "ERROR-01";
                }
            }
            switch($opcao){
                case 0:
                    return $this->mean($numbers);
                case 1:
                    return $this->median($numbers);
                case 2:
                    return $this->sum($numbers);
                default:
                    return "ERROR-02";
            }
        }
        else{
            return "ERROR-00";
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
