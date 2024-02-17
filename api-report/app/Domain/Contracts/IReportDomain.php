<?php

namespace App\Domain\Contracts;
use Illuminate\Support\Collection;

interface IReportDomain {

    public function fetchAll() : Collection;

}