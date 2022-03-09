<?php
class MyCalculator{
    public $num1;
    public $num2;
    public function __construct($num1,$num2)
    {
       $this->num1 = $num1;
       $this->num2 = $num2;
    }
    function add (){
        return  ($this->num1+$this->num2);
    }

    function sub (){
        return  ($this->num1-$this->num2);
    }
    function mul (){
        return  ($this->num1*$this->num2);
    }
    function divide (){
        return  ($this->num1/$this->num2);
    }
}
$mycalc = new MyCalculator(12,6);
echo $mycalc->add()."<br>";
echo $mycalc->sub()."<br>";
echo $mycalc->mul()."<br>";
echo $mycalc->divide()."<br>";

?>