<?php
require('../vendor/autoload.php');

use App\Config;

$config1 = Config::getInstance();
echo $config1->get('apiKey') . PHP_EOL;
$config2 = Config::getInstance();

var_dump($config1 === $config2);


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques