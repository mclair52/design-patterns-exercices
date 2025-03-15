<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;
interface QueryBuilderInterface
{
    public function select(array $fields);
    public function where(array $conditions);
    public function from(string $table);
    public function getQuery(): string;
}