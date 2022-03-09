<?php
class fact{
   public $num;
   public $facto =1;
   function calc($num){
       $this->num = $num;
       for($i = $this->num; $i>= 1; $i-- )
       {
           $this->facto = $this->facto * $i;

       }
       return $this->facto;
   }
}
 
$obj = new fact();
echo  $obj->calc(5);

?>