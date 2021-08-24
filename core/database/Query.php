<?php

namespace App\Core\Database;

use PDO;

class Query {

    protected $queryLogs = [];

    public function __construct(protected PDO $db)
    {
        
    }

    protected function addToQueryLog(string $sql): void
    {
        $this->queryLogs[] = $sql;
    }

    public function select(string $table, array $columns = [], array $where = [])
    {
        $columnNames = count($columns) > 0 ? implode(',', $columns) : '*';

        // if (count($columns) > 0) {
        //     $columnNames = implode(',', $columns);
        // } else {
        //     $columnNames = '*';
        // }

        $conditions = "";

        foreach($where as $column => $value) {
            $conditions .= strlen($conditions) > 0 ? " AND " : " WHERE ";
            
            $conditions .= "{$column} = $value";
        }

        $sql = "SELECT {$columnNames} FROM {$table} {$conditions}";
        $this->addToQueryLog($sql);
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert(string $table, array $values): bool
    { 
        $sql = "INSERT INTO {$table} (" . implode(', ', array_keys($values)) . ") VALUES (:" . implode(', :', array_keys($values)) . ")";
        $this->addToQueryLog($sql);
        $statement = $this->db->prepare($sql);

        return $statement->execute($values);
    }

    public function update(string $table, array $values, array $conditions = []): int
    {
        $sql = "UPDATE {$table} SET ";

        foreach($values as $column => $value) {
            $sql .= "{$column} = :{$column},";
        }

        $sql = rtrim($sql, ',');
        
        if (count($conditions) > 0) {
            $sql .= " WHERE ";
            foreach($conditions as $key => $value) {
                $sql .= " {$key} = {$value} AND";
            }
        }

        $sql = rtrim($sql, 'AND');
        $this->addToQueryLog($sql);
        $statement = $this->db->prepare($sql);

        return $statement->execute($values);
    }

    public function delete(string $table, array $conditions = []): int
    {
        // $conditionStr = count($conditions) > 0 ? "WHERE :" . implode(', :', array_keys($conditions)) : "";

        $conditionStr = "";
        foreach($conditions as $column => $value) {
            $conditionStr .= strlen($conditionStr) > 0 ? " AND " : " WHERE ";
            
            $conditionStr .= "{$column} = :{$column}";
        }

        $sql = "DELETE FROM {$table} {$conditionStr}";
        $this->addToQueryLog($sql);     
        $statement = $this->db->prepare($sql);
    
        return $statement->execute($conditions);  
    }

    public function getQueryLog(): array
    {
        return $this->queryLogs;
    }
}