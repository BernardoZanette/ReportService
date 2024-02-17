<?php

namespace App\Application\Concretes;
use App\Application\Contracts\IReportApplication;
use App\Domain\Contracts\IReportDomain;
use Illuminate\Support\Collection;

class ReportApplication extends BaseApplication implements IReportApplication {

    protected IReportDomain $reportDomain;

    public function __construct(IReportDomain $reportDomain) {
        $this->reportDomain = $reportDomain;
    }

    public function fetchAll() : Collection {
        return $this->reportDomain->fetchAll();
    }

}