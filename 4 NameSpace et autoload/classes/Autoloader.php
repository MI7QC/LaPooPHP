<?php
//App = racine du dossier claases
namespace App;

class Autoloader
{
    // les methode static vont etre accesible sans avoir besoin d'instencier la Class     on peut appeller la methode register comme ceci Autoloader::register dans le fichier (exemple)index.php 
    static function register()
    {
        spl_autoload_register([
            //constance magique __CLASS__
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {   // On récupère dans $class la totalité du namespace de la classe concernée voir echo $class = App\Banque\CompteCourant
        // On retire App\  __NAMESPACE__ = App   voir avec echo __NAMESPACE__
        $class = str_replace(__NAMESPACE__. '\\','',$class);
        // On remplac eles \ par des /
        $class = str_replace('\\','/',$class); 
        // On vérifie si le fichier existe  :info __DIR__  pointe le dossier(classes) ou se trouve le fichier
        $fichier = __DIR__ . '/' . $class . '.php';
        if(file_exists($fichier)){
            require_once  $fichier; 
        }
    }
}