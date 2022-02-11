 
<html>
 <body>
<h1> FORM SUBMITTED VALUES</h1>
<?php
    echo $_GET['name'];
    echo "<br>";



    class agetask
    {
  const BR = '<br/>';
  var $age;

  public static function print_age(){
    echo $_GET['age']/3;
  
    }
  }
   $hw= new agetask;

    $hw->print_age();





    
  
    echo $_GET['gender'];
    echo "<br>";




    
    foreach($_GET['languages'] as $selected){
echo $selected."</br>";
}

    echo $_GET['city'];
   
   ?>




 </body>
 </html>