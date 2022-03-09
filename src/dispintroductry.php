<?php
class intro{
   public $name;

   public function disp($name){
       $this->name = $name;
       echo "Hello All ,I Am ".$this->name;
   }
}
$obj = new intro();
$obj->disp("RAM");



?>