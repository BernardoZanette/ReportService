<?php

namespace App\Data\Repositories\Contracts;
use Illuminate\Support\Collection;

interface IReportRepository {
    
    public function fetchAll() : Collection;

}