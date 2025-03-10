<?php
namespace MySQLQueryBuilder;
class MySQLQueryBuilder implements QueryBuilderInterface
{
    public string $where = '';
    public string $from = '';
    public string $select = '';

    public function select(string $select): self
    {
        $this->select = $select;
        return $this;
    }

    public function where(string $where): self
    {
        $this->where = $where;
        return $this;
    }

    public function from(string $from): self
    {
        $this->from = $from;
        return $this;
    }

    public function build(): QueryBuilder
    {
        return new QueryBuilder($this);
    }
}

class QueryBuilder
{
    protected string $where;
    protected string $from;
    protected string $select;

    public function __construct(MySQLQueryBuilder $builder)
    {
        $this->where = $builder->where;
        $this->from = $builder->from;
        $this->select = $builder->select;
    }

    public function getQuery(): string
    {
        return "SELECT {$this->select} FROM {$this->from} WHERE {$this->where}";
    }
}
