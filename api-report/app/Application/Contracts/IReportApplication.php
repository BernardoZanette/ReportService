<?php

namespace App\Application\Contracts;
use Illuminate\Support\Collection;

interface IReportApplication {

    public function fetchAll() : Collection;

}