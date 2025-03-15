<?php
require('../vendor/autoload.php');

use MySQLQueryBuilder\MySQLQueryBuilder;

$query = (new MySQLQueryBuilder())
    ->select(['name', 'email'])
    ->from('users')
    ->where(['id = 1'])
    ->getQuery();

echo $query;
# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête