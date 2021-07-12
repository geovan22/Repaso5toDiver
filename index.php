<?php
    include('Autoload.php')

    if (isset($_GET['class'])&& isset ($_GET['method']))
    {
        $class = $_GET['class'];
        $method = $_GET['class'];
    }
    else
    {
        $class = "Home"
        $method = "Inicio";
    }

    if (class_exists($class) && method_exists($class, $method))
    {
        $c = new $class();
        $c->$method();
    }
    else
    {
        echo "Clase o metodo no existe";
    }
?>