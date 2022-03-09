<?php
 class datediff{
     public $date1;
     public $date2;
     public function  differ($date1,$date2)
     {
         $this->date1= $date1;
         $this->date2= $date2;
         $sdate =$this->date1;
         $edate = $this->date2;
     
         $diff = abs($date2-$date1);

        
  $years = floor($diff / (365*60*60*24));
 

  $months = floor(($diff - $years * 365*60*60*24) / (31*60*60*24));
 
  $days = floor(($diff - $years * 365*60*60*24 - $months*31*60*60*24) / (60*60*24)-2);


  echo "Difference:".$years."year, ". $months."months,".$days." days";


      




     }
    
 }


 $obj = new datediff();
 $d1 = strtotime("1981-11-03");
 $d2 = strtotime("2013-09-04");
 $obj->differ($d1,$d2); 



?>