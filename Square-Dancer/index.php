<?php
include_once ('Dancer.php');

$girl = new SplQueue();
$girl1 = new Dancer('Hoa', 'nu');
$girl2 = new Dancer('chinh', 'nu');
$girl3 = new Dancer('Mai', 'nu');
$girl->enqueue($girl1);
$girl->enqueue($girl2);
$girl->enqueue($girl3);

$boy = new SplQueue();
$boy1 = new Dancer('Nam', 'nam');
$boy2 = new Dancer('Thinh', 'nam');
$boy3 = new Dancer('Nga', 'nam');
$boy4 = new Dancer('Anh', 'nam');
$boy->enqueue($boy1);
$boy->enqueue($boy2);
$boy->enqueue($boy3);
$boy->enqueue($boy4);

function ghep($girl, $boy){
    if ($girl->count()==0 || $boy->count()==0){
        echo 'Số người phải đợi là: ' . ($girl->count()+$boy->count());
    }else{
        echo $girl->dequeue()->getName().' va '.$boy->dequeue()->getName().'<br/>';
    }
}
ghep($girl, $boy);
ghep($girl, $boy);
ghep($girl, $boy);
ghep($girl, $boy);