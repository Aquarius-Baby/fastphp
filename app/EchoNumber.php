<?php
include_once("/Users/cmy/CodeSpace/PHP/fastphp/prepend.php");

class EchoNumber
{

    function add($a, $b)
    {
        echo $a + $b . PHP_EOL;
    }

    function jian($a, $b)
    {
        echo $a - $b . PHP_EOL;
    }

    function cheng($a, $b)
    {
        echo $a * $b . PHP_EOL;
    }

    function chu($a, $b)
    {
        echo $a / $b . PHP_EOL;
    }

    function call($a, $b)
    {
        $this->add($a, $b);
    }

}

$f = new echoNumber();
$f->add(3, 4);
$f->cheng(2, 3);
$f->call(5, 6);