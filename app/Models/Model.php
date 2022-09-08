<?php

namespace App\Models;

use PDO;
use Database\DBConnection;

abstract class Model {

    protected $db;
    protected $table;
    protected $tabledeux;

    public function __construct(DBConnection $db)
    {
        return $this->db = $db;
    }

    public function all(): array
    {
        return $this->query("SELECT * FROM {$this->table}");
    }

    public function allUsers()
    {
        return $this->query("SELECT * FROM {$this->tabledeux}");
    }

    public function findById(int $id): Model
    {
        return $this->query("SELECT * FROM {$this->table} JOIN {$this->tabledeux} ON {$this->table}.users_id = {$this->tabledeux}.id WHERE {$this->table}.users_id = ?", [$id], true);
        
    }

    public function create(array $data, ?array $company = null)
    {

        
        $firstParenthesis = "";
        $secondParenthesis = "";
        $i = 1;
        

        foreach ($data as $key => $value) {
            $comma = $i === count($data) ? "" : ", ";
            $firstParenthesis .= "{$key}{$comma}";
            $secondParenthesis .= ":{$key}{$comma}";
            $i++;
        }

        return $this->query("INSERT INTO {$this->tabledeux} ($firstParenthesis)
        VALUES ($secondParenthesis)", $data);
    }

    public function update(int $id, array $data)
    {
        $sqlRequestPart = "";
        $i = 1;

        foreach ($data as $key => $value) {
            $comma = $i === count($data) ? " " : ", ";
            $sqlRequestPart .= "{$key} = :{$key}{$comma}";
            $i++;
        }
        

        $data['id'] = $id; 
        
        return $this->query("UPDATE {$this->table} 
        INNER JOIN {$this->tabledeux} 
        ON {$this->table}.users_id = {$this->tabledeux}.id 
        SET {$sqlRequestPart} 
        WHERE users_id = :id", $data);
    }

    public function destroy(int $id): bool
    {
        return $this->query("DELETE {$this->table}, {$this->tabledeux} FROM {$this->table}
        INNER JOIN {$this->tabledeux}
        ON {$this->table}.users_id = {$this->tabledeux}.id 
        WHERE {$this->table}.users_id = ?", [$id], true);
    }

    public function query(string $sql, array $param = null, bool $single = null)
    {

        $method = is_null($param) ? 'query' : 'prepare';
        

        if(
            strpos($sql, 'DELETE') === 0 
            || strpos($sql, 'UPDATE') === 0 
            || strpos($sql, 'INSERT') === 0) {

            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->execute($param);
            
        }
        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }
}