<?php

namespace App\Data\Repositories\Concretes;
use App\Data\Repositories\Concretes\BaseRepository;
use App\Data\Repositories\Contracts\IReportRepository;
use Illuminate\Support\Collection;

class ReportRepository extends BaseRepository implements IReportRepository {
    
    protected $table = "reports";

    public function fetchAll() : Collection {
        $query = $this->getBuilder();
        return $query->get();
    }

}