<?php

namespace App\Domain\Concretes;
use App\Data\Repositories\Contracts\IReportRepository;
use Illuminate\Support\Collection;
use App\Domain\Contracts\IReportDomain;

class ReportDomain implements IReportDomain {

    protected IReportRepository $reportRepository;

    public function __construct(IReportRepository $reportRepository) {
        $this->reportRepository = $reportRepository;
    }
    
    public function fetchAll() : Collection {

        return $this->reportRepository->fetchAll();

    }

}