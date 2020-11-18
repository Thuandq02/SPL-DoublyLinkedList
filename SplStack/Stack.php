<?php
function check($sym)
{
    $stack = new SplStack();
    $stack1 = new SplStack();
    $arr = str_split($sym);

    if ($stack === null) {
        return true;
    }
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === "(") {
            $stack->push($arr[$i]);
        } else if ($arr[$i] && $stack === null) {
            return false;
        }else if ($arr[$i] === ")"){
            $stack1->push($arr[$i]);
        }
    }
    if ($stack->count() !== $stack1->count()){
        return false;
    }else{
        return true;
    }
}
var_dump(check("s * (s – a) * (s – b * (s – c)" ));