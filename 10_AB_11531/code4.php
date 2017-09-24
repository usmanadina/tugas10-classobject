<?php 
class smartphone { 
   public function __construct() { 
     echo "Constructor dari class smartphone <br />"; 
   }   
   public function __destruct() { 
     echo "Constructor dari class smartphone <br />"; 
   } 
} 
class smartphone_dualsim extends smartphone { 
   public function __construct() { 
     echo "Constructor dari class smartphone_dualsim <br />"; 
   }   
   public function __destruct() { 
     echo "Destructor dari class smartphone_dualsim <br />"; 
   } 
} 
class smartphone_singlesim extends smartphone_dualsim { 
   public function __construct() { 
     echo "Destructor dari class smartphone_singlesim <br />"; 
   }   
   public function __destruct() { 
     echo "Destructor dari class smartphone_singlesim <br />"; 
   } 
} 
$gadget_baru_construct = new smartphone();
$gadget_baru_construct = new smartphone_dualsim();
echo "Belajar OOP PHP <br />";
$gadget_baru_construct = new smartphone_singlesim();
?>