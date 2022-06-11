<?php

session_start();


spl_autoload_register('autoload');

function autoload($class_name){
    $array_paths = array(
        'Database/',
        'Controllers/',
        'Models/'
    );
     
    foreach($array_paths as $path){
        $file = sprintf($path. '%s.php' ,$class_name);
        if(is_file($file)){
            include_once $file;
        }
    }
    
}






// $parts = explode ('\\',$class_name);
// $name = array_pop($parts);
//spl_autoload_register() allows you to register multiple functions (or static methods from your own Autoload class) that PHP will put into a stack/queue and call sequentially when a "new Class" is declared.
//callback function:
//La fonction d'autoload à enregistrer. Si null, alors, l'implémentation par défaut de la fonction spl_autoload() sera enregistrée.
//The explode() function breaks a string into an array.
//The array_pop() function deletes the last element of an array. 