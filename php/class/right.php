<?php

class right
{
    public $name;
    function greeting()
    {
        echo"right hello : ". $this->name . "<br>";
    }

    public function daelim()
    {
        echo "대림대학교";
        return $this;
    }

    public function foo()
    {
        echo "너는 바보야<br>";
        return $this;
    }

    public function bar()
    {
        echo "나도 바보야<br>";
    }
}