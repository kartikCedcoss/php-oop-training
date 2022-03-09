<?php
class  strdate {
    public $date;
    
    function datestr(){
        $this->date = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
        return $this->date;
    }

}
$obj =new strdate();
echo $obj->datestr();

?>