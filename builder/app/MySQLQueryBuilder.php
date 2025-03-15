<?php
namespace App;
class MySQLQueryBuilder implements QueryBuilderInterface
{
    private $query;

    public function select(array $fields): QueryBuilderInterface
    {
        $this->query = "Select " . implode(", ", $fields);
        return $this;
    }
    
    public function from(string $table): QueryBuilderInterface
    {
        $this->query .= " FROM " . $table;
        return $this;
    }

    public function where(array $conditions): QueryBuilderInterface
    {
        $this->query .= " WHERE " . implode(" AND ", $conditions);
        return $this;
    }


    public function getQuery(): string
    {
        return $this->query;
    }
}




