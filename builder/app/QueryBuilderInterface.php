<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;
use App\QueryBuilder;
interface QueryBuilderInterface
{
    public function select(string $select);
    public function where(string $where);
    public function from(string $from);
    public function build(): QueryBuilder;
}