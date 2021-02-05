<?php

function checkSymbol($string){
        $stack = new splStack();
        $arraySymbol = str_split($string);
        $flag = true;

        for ($i = 0; $i < count($arraySymbol) ; $i ++)
        {

            if ($arraySymbol[$i] === "("){
                $stack->push($arraySymbol[$i]);
            }elseif($arraySymbol[$i] === ")"){
                if ($stack === null){
                    $flag = false;
                }else{
                    $stack->pop();
                }
            }
        }
        if (count($stack) > 0){
            $flag = false;
        }

        return $flag;

}
echo "<pre>";
print_r(checkSymbol('(9+4)*((9-2)+3)'));
