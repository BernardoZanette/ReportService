<?php

namespace App\Data\Repositories\Concretes;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Query\Builder;

class BaseRepository {
    
    protected $table = null;
    private $connection;

    public function __construct(DatabaseManager $databaseManager) {
        $this->connection = $databaseManager->connection();
    }

    protected function getBuilder(string $table = null) : Builder {
        $table = $table ?? $this->table;
        $query = $this->connection->table($table);
        $query->select("$table.*");
        return $query;
    }

}