<?php
class display{
    public $var;
    public function dispstr(){
        echo $this->var;
    }
}

$obj = new display();
$obj->var = "'MyClass class has inititalized'";
$obj->dispstr();
?>