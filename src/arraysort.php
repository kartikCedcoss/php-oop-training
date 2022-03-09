<?php
class sort{
    public $arrsort;

   function arsort(array $arrsort){
       $this->arsort = $arrsort;
       $sortmyarr = $this->arsort;
       sort($sortmyarr);
       return $sortmyarr;
   }

}
 $obj1 = new sort();
 print_r  ( $obj1->arsort(array(11, -2, 4, 35, 0, 8, -9))) ;

?>