<?php
   function CargadorClase($class)
   {
     if(is_file('/'.$class.'.ARCHIVO.php'))
     {
       include('/'.$class.'.ARCHIVO.php');
     }
  else if(is_file('/'.$class.'.ARCHIVO.php'))
     {
        include('/'.$class.'.ARCHIVO.php');
     }
}
?>
